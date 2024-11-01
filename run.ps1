
Write-Output "##############################################"
Write-Output "##                                          ##"
Write-Output "##        PLEASE ENSURE THAT PHP AND        ##"
Write-Output "##        MYSQL/MARIADB IS INSTALLED.       ##"
Write-Output "##                                          ##"
Write-Output "##############################################"

# Ask the user if they have MySQL or MariaDB installed
$dbInstalled = Read-Host "Do you have PHP and MySQL/MariaDB installed? (yes/no)"

if ($dbInstalled -ne "yes") {
    Write-Output "Please install PHP and MySQL/MariaDB before proceeding."
    exit
}

# Define paths for .env.example and .env files
$scriptDir = Split-Path -Parent $MyInvocation.MyCommand.Path
$exampleFilePath = Join-Path $scriptDir "timeline_php\.env.example"
$newEnvFilePath = Join-Path $scriptDir "timeline_php\.env"

# Copy .env.example to .env if it exists
if (Test-Path $exampleFilePath) {
    Copy-Item -Path $exampleFilePath -Destination $newEnvFilePath -Force
    Write-Output ".env file created and content copied from .env.example"
} else {
    Write-Output ".env.example file does not exist"
}

# Display current database configuration values from .env file
if (Test-Path $newEnvFilePath) {
    $envContent = Get-Content -Path $newEnvFilePath

    # Extract and display the required variables
    $dbPort = $envContent | Select-String -Pattern "^DB_PORT=.*"
    $dbDatabase = $envContent | Select-String -Pattern "^DB_DATABASE=.*"
    $dbUsername = $envContent | Select-String -Pattern "^DB_USERNAME=.*"
    $dbPassword = $envContent | Select-String -Pattern "^DB_PASSWORD=.*"

    Write-Output "Database Configuration:"
    Write-Output $dbPort
    Write-Output $dbDatabase
    Write-Output $dbUsername
    Write-Output $dbPassword
} else {
    Write-Output ".env file does not exist"
}
# Ask the user if they want to change the database configuration values
$changeConfig = Read-Host "Do you want to change the database configuration values? (yes/no)"

if ($changeConfig -eq "yes") {
    # Prompt the user to input new values
    $newDbPort = Read-Host "Enter new DB_PORT (current: $($dbPort -replace 'DB_PORT=', ''))"
    $newDbDatabase = Read-Host "Enter new DB_DATABASE (current: $($dbDatabase -replace 'DB_DATABASE=', ''))"
    $newDbUsername = Read-Host "Enter new DB_USERNAME (current: $($dbUsername -replace 'DB_USERNAME=', ''))"
    $newDbPassword = Read-Host "Enter new DB_PASSWORD (current: $($dbPassword -replace 'DB_PASSWORD=', ''))"

    # Update the .env file with new values
    (Get-Content -Path $newEnvFilePath) -replace "^DB_PORT=.*", "DB_PORT=$newDbPort" |
    Set-Content -Path $newEnvFilePath
    (Get-Content -Path $newEnvFilePath) -replace "^DB_DATABASE=.*", "DB_DATABASE=$newDbDatabase" |
    Set-Content -Path $newEnvFilePath
    (Get-Content -Path $newEnvFilePath) -replace "^DB_USERNAME=.*", "DB_USERNAME=$newDbUsername" |
    Set-Content -Path $newEnvFilePath
    (Get-Content -Path $newEnvFilePath) -replace "^DB_PASSWORD=.*", "DB_PASSWORD=$newDbPassword" |
    Set-Content -Path $newEnvFilePath

    Write-Output "Database configuration values updated."
} else {
    Write-Output "No changes made to the database configuration values."
}
# Check if Composer is installed
$composerPath = (Get-Command composer -ErrorAction SilentlyContinue).Path

if (-not $composerPath) {
    Write-Output "Composer is not installed. Installing Composer..."

    # Download Composer installer
    $composerInstallerUrl = "https://getcomposer.org/installer"
    $composerInstallerPath = Join-Path $scriptDir "composer-setup.php"
    Invoke-WebRequest -Uri $composerInstallerUrl -OutFile $composerInstallerPath

    # Install Composer
    php $composerInstallerPath --install-dir=$scriptDir --filename=composer

    # Verify installation
    $composerPath = (Get-Command "$scriptDir\composer" -ErrorAction SilentlyContinue).Path
    if ($composerPath) {
        Write-Output "Composer installed successfully."
    } else {
        Write-Output "Failed to install Composer."
    }

    # Clean up installer
    Remove-Item $composerInstallerPath
} else {
    Write-Output "Composer is already installed."
} 

# Navigate to the project directory
cd timeline_php

# Install PHP dependencies
Write-Output "Installing PHP dependencies..."
composer install --optimize-autoloader

# Check if Node.js and npm are installed
$nodePath = (Get-Command node -ErrorAction SilentlyContinue).Path
$npmPath = (Get-Command npm -ErrorAction SilentlyContinue).Path

if (-not $nodePath -or -not $npmPath) {
    Write-Output "Node.js or npm is not installed. Installing Node.js and npm..."

    # Download and install Node.js and npm
    $nodeInstallerUrl = "https://nodejs.org/dist/v14.17.0/node-v14.17.0-x64.msi"
    $nodeInstallerPath = Join-Path $scriptDir "node-setup.msi"
    Invoke-WebRequest -Uri $nodeInstallerUrl -OutFile $nodeInstallerPath
    Start-Process msiexec.exe -ArgumentList "/i", $nodeInstallerPath, "/quiet", "/norestart" -Wait

    # Verify installation
    $nodePath = (Get-Command node -ErrorAction SilentlyContinue).Path
    $npmPath = (Get-Command npm -ErrorAction SilentlyContinue).Path
    if ($nodePath -and $npmPath) {
        Write-Output "Node.js and npm installed successfully."
    } else {
        Write-Output "Failed to install Node.js and npm."
    }

    # Clean up installer
    Remove-Item $nodeInstallerPath
} else {
    Write-Output "Node.js and npm are already installed."
}

# Install Node.js dependencies
Write-Output "Installing Node.js dependencies..."
npm install

# Generate key
php artisan key:generate

# Run migrations
Write-Output "Running migrations..."
php artisan migrate

# Clear and cache configuration
Write-Output "Clearing and caching configuration..."
php artisan config:clear
php artisan config:cache

# Run database seeds
Write-Output "Seeding the database..."
php artisan db:seed

# Serve the application
Write-Output "Serving the application..."
php artisan serve 