# 🚀 **CPANEL DEPLOYMENT GUIDE**

**Repository**: https://github.com/habdil/ojs-al-musannif.git  
**Target**: Production cPanel hosting  
**Updated**: 2025-09-06

---

## **📋 PRE-DEPLOYMENT CHECKLIST**

### **✅ System Requirements on cPanel**
- [ ] **PHP Version**: PHP 7.4 or higher
- [ ] **Extensions**: mysqli, mbstring, openssl, curl, xml, json, zip
- [ ] **Database**: MySQL 5.7+ or MariaDB
- [ ] **File Permissions**: Write access to cache/, public/, files/ directories
- [ ] **Memory Limit**: Minimum 256MB
- [ ] **Max Execution Time**: 300 seconds

---

## **🔧 METHOD 1: CPANEL GIT DEPLOYMENT (Recommended)**

### **Step 1: Setup Git in cPanel**
1. **Access cPanel** → Git Version Control
2. **Clone Repository**:
   - **Repository URL**: `https://github.com/habdil/ojs-al-musannif.git`
   - **Repository Path**: `/public_html` (or subdirectory)
   - **Branch**: `main`
3. **Click "Create"**

### **Step 2: Configure Post-Deploy Hook**
Create file: `.cpanel.yml` in repository root
```yaml
---
deployment:
  tasks:
    - export DEPLOYPATH=/home/cpanel_user/public_html
    - /bin/cp config.inc.php.example config.inc.php
    - /bin/chmod -R 755 cache public files
    - /bin/chmod 644 config.inc.php
```

### **Step 3: Database Configuration**
1. **Create MySQL Database** in cPanel
2. **Edit config.inc.php** on server:
   ```php
   [database]
   driver = mysqli
   host = localhost
   username = cpanel_user_dbname
   password = your_db_password
   name = cpanel_user_dbname
   ```

---

## **🔧 METHOD 2: MANUAL FILE UPLOAD**

### **Step 1: Download Repository**
```bash
git clone https://github.com/habdil/ojs-al-musannif.git
cd ojs-al-musannif
```

### **Step 2: Prepare Files**
```bash
# Remove development files
rm -rf .git/ .claude/ BUG_REPORT.md ROLLBACK_PROCEDURE.md
rm -rf cache/t_compile/* cache/fc-*

# Create production config
cp config.inc.php config.inc.php.production
```

### **Step 3: Upload via File Manager**
1. **Zip the project** (excluding .git, cache files)
2. **Upload to cPanel File Manager**
3. **Extract in public_html** (or subdirectory)
4. **Set permissions**: 755 for directories, 644 for files

---

## **⚙️ PRODUCTION CONFIGURATION**

### **Required File Permissions**
```bash
chmod -R 755 cache/
chmod -R 755 public/
chmod -R 755 files/
chmod 644 config.inc.php
chmod 644 .htaccess
```

### **Environment-Specific Settings**
Update `config.inc.php` for production:

```php
[general]
base_url = "https://yourdomain.com"
installed = On

[database]
driver = mysqli
host = localhost
username = your_cpanel_user_dbname
password = your_secure_password
name = your_cpanel_user_dbname

[debug]
show_stacktrace = Off
display_errors = Off
deprecation_warnings = Off

[security]
salt = "ChangeThisToRandomString32CharsLong"
```

### **PHP Configuration**
Add to `.htaccess` if needed:
```apache
php_value upload_max_filesize 64M
php_value post_max_size 64M
php_value memory_limit 256M
php_value max_execution_time 300
```

---

## **🔄 AUTOMATED DEPLOYMENT WORKFLOW**

### **GitHub Actions Setup** (Optional)
Create `.github/workflows/deploy.yml`:

```yaml
name: Deploy to cPanel

on:
  push:
    branches: [ main ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    steps:
    - uses: actions/checkout@v2
    
    - name: Deploy to cPanel
      uses: SamKirkland/FTP-Deploy-Action@4.0.0
      with:
        server: ${{ secrets.FTP_SERVER }}
        username: ${{ secrets.FTP_USERNAME }}
        password: ${{ secrets.FTP_PASSWORD }}
        local-dir: ./
        server-dir: public_html/
        exclude: |
          .git*
          .github*
          *.md
          cache/
          .claude/
```

### **Webhook Deployment** (Alternative)
1. **cPanel Webhook**: Create webhook URL in cPanel
2. **GitHub Webhook**: Add webhook URL in GitHub repository settings
3. **Auto-deploy**: Triggered on each push to main branch

---

## **🧪 POST-DEPLOYMENT TESTING**

### **Essential Tests**
- [ ] **Homepage loads** without errors
- [ ] **Login system** functional
- [ ] **Admin dashboard** accessible  
- [ ] **Database connection** working
- [ ] **File permissions** correct
- [ ] **PHP extensions** loaded
- [ ] **Email system** configured
- [ ] **SSL certificate** active (if using HTTPS)

### **Testing Commands**
```bash
# Test PHP version and extensions
php -v
php -m | grep -E "mysqli|mbstring|openssl|curl"

# Test database connectivity
mysql -h localhost -u username -p database_name

# Check file permissions
ls -la cache/ public/ files/
```

---

## **📊 MONITORING & MAINTENANCE**

### **Log Files to Monitor**
- `error_log` (cPanel error logs)
- `C:\php74\php_errors.log` (if applicable)
- Database slow query log

### **Regular Maintenance**
- **Weekly**: Clear cache files
- **Monthly**: Update security patches
- **Quarterly**: Database optimization
- **Backup**: Daily automated backups

---

## **🚨 TROUBLESHOOTING**

### **Common Issues**

| Issue | Solution |
|-------|----------|
| 500 Internal Server Error | Check file permissions (755/644) |
| Database Connection Failed | Verify DB credentials in config.inc.php |
| PHP Extension Missing | Contact cPanel host to enable extensions |
| Cache Permission Error | `chmod -R 755 cache/` |
| Upload File Issues | Check `upload_max_filesize` in PHP settings |

### **Emergency Rollback**
```bash
# Via cPanel Git
1. Go to Git Version Control
2. Click "Manage" → "Pull/Deploy" 
3. Select previous commit
4. Click "Deploy"

# Manual rollback
1. Replace files with backup
2. Restore database from backup
3. Clear cache: rm -rf cache/*
```

---

## **📞 SUPPORT CONTACTS**

- **Repository**: https://github.com/habdil/ojs-al-musannif
- **OJS Documentation**: https://docs.pkp.sfu.ca/
- **Technical Issues**: Create issue in GitHub repository

---

**Last Updated**: 2025-09-06  
**Version**: 1.0 - Production Ready