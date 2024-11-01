# Timeline App
#### Web application to manage events created with Laravel framework 

## Steps to Setup

**1. Download PHP from <https://windows.php.net/download/> and extract it to `C:/php`**

**2. Copy `php.ini-development` to `php.ini`**

**3. Uncomment the extensions:**

```ini
extension=fileinfo
extension=mbstring
extension=mysqli
extension=openssl
extension=pdo_mysql
```

**4. Open the powershell and move to your empty folder**

**5. Clone the repository**

```powershell
git clone https://github.com/kanthakdominik/timeline_php.git
```

**6. Set the PowerShell execution policy**

```powershell
Set-ExecutionPolicy -ExecutionPolicy Unrestricted -Scope CurrentUser 
```

**7. Run the run script**

```powershell
.\run.ps1
```

The Timeline application will be available at at <http://localhost:8000>