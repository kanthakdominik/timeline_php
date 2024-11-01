Write-Output "##############################################"
Write-Output "##                                          ##"
Write-Output "##        PLEASE ENSURE THAT THE STEPS      ##"
Write-Output "##           FROM README ARE DONE.          ##"
Write-Output "##                                          ##"
Write-Output "##############################################"

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
    exit
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
    exit
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

# Navigate to the project directory
Write-Output "Navigate to timeline_php folder." 
cd timeline_php

# Install PHP dependencies
Write-Output "Installing PHP dependencies..."
composer install --optimize-autoloader

# Install Node.js dependencies
Write-Output "Installing Node.js dependencies..."
npm install

# Generate application key
Write-Output "Generating application key..." 
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