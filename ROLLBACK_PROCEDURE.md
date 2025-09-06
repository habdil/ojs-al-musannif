# 🔄 **OJS PHP VERSION ROLLBACK PROCEDURE**

## **OVERVIEW**
This document provides step-by-step instructions to rollback from PHP 7.4 to the original PHP 8.3 configuration if issues arise.

---

## **BACKUP LOCATIONS**
All backup files are stored in: `E:\Cognifera-Education\OJS_BACKUP_20250906\`

### **Backed up files:**
- ✅ Database: `database_backup.sql`
- ✅ Configuration: `config.inc.php.backup`
- ✅ Files: `ojs_files/` directory
- ✅ Public files: `public_backup/`
- ✅ Apache config: `C:\xampp\apache\conf\extra\httpd-xampp.conf.backup`

---

## **ROLLBACK STEPS**

### **Step 1: Stop Web Services**
```bash
# Stop Apache via XAMPP Control Panel
# OR via command line:
powershell "Stop-Process -Name httpd -Force"
```

### **Step 2: Restore Apache Configuration**
```bash
# Restore original XAMPP PHP configuration
cp "C:\xampp\apache\conf\extra\httpd-xampp.conf.backup" "C:\xampp\apache\conf\extra\httpd-xampp.conf"
```

### **Step 3: Verify Original Configuration**
Check that these lines are restored in `httpd-xampp.conf`:
```apache
LoadFile "C:/xampp/php/php8ts.dll"
LoadFile "C:/xampp/php/libpq.dll"
LoadFile "C:/xampp/php/libsqlite3.dll"
LoadModule php_module "C:/xampp/php/php8apache2_4.dll"

<IfModule php_module>
    PHPINIDir "C:/xampp/php"
</IfModule>
```

### **Step 4: Remove PHP 7.4 Installation**
```bash
# Optional: Remove PHP 7.4 directory
rmdir /s "C:\php74"

# OR keep for future use but rename
ren "C:\php74" "C:\php74_backup"
```

### **Step 5: Restart Apache**
- Start Apache via XAMPP Control Panel
- Verify PHP version by accessing: `http://localhost/phptest.php`

### **Step 6: Test OJS Functionality**
1. Access OJS at configured URL: `http://localhost:8000`
2. Test basic functions:
   - Login functionality
   - Article browsing
   - Administrative panel
   - Database connectivity

---

## **DATABASE ROLLBACK (IF NEEDED)**

### **If database corruption occurs:**
```bash
# Stop MySQL service
net stop mysql

# Restore database from backup
"C:\xampp\mysql\bin\mysql.exe" -u root -p cognifer_ojs2025 < "E:\Cognifera-Education\OJS_BACKUP_20250906\database_backup.sql"

# Start MySQL service
net start mysql
```

---

## **FILE SYSTEM ROLLBACK**

### **If OJS files are corrupted:**
```bash
# Navigate to backup location
cd "E:\Cognifera-Education\OJS_BACKUP_20250906"

# Restore complete OJS directory
robocopy "ojs_files" "E:\Cognifera-Education\ojs-al-musannif" /E /R:0 /W:0

# Restore configuration
copy "config.inc.php.backup" "E:\Cognifera-Education\ojs-al-musannif\config.inc.php"

# Restore public files
robocopy "public_backup" "E:\Cognifera-Education\ojs-al-musannif\public" /E /R:0 /W:0
```

---

## **VERIFICATION CHECKLIST**

After rollback, verify these items:

### **✅ PHP Environment**
- [ ] PHP version shows 8.3.x or 8.2.x (XAMPP)
- [ ] All required extensions loaded (mysqli, mbstring, openssl, curl)
- [ ] No PHP error messages in logs

### **✅ Web Server**
- [ ] Apache starts without errors
- [ ] PHP pages load correctly
- [ ] No module loading errors

### **✅ Database**
- [ ] MySQL connection successful
- [ ] All tables present and accessible
- [ ] Data integrity maintained

### **✅ OJS Application**
- [ ] Homepage loads without errors
- [ ] User authentication works
- [ ] Administrative functions accessible
- [ ] No fatal PHP errors

---

## **EMERGENCY CONTACTS**

- **System Administrator**: [TO BE FILLED]
- **Database Administrator**: [TO BE FILLED]
- **OJS Support**: https://pkp.sfu.ca/support/

---

## **NOTES**

- Always test rollback procedure in staging first
- Keep backup files until system is stable for at least 1 week
- Document any issues encountered during rollback
- Consider creating additional backup point before rollback

---

**Last Updated**: 2025-09-06
**Document Version**: 1.0