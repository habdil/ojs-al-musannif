# 🔐 **CPANEL DEPLOYMENT SECRETS CONFIGURATION**

**For Repository**: https://github.com/habdil/ojs-al-musannif  
**Target**: Production cPanel hosting via GitHub Actions

---

## **📋 GITHUB SECRETS SETUP**

To enable automated deployment, you need to configure these secrets in your GitHub repository:

**Path**: Repository → Settings → Secrets and variables → Actions → New repository secret

---

### **🔑 REQUIRED SECRETS**

#### **FTP Deployment Secrets**
```yaml
CPANEL_FTP_SERVER
# Value: your-domain.com (or ftp.your-domain.com)
# Description: FTP server hostname from cPanel

CPANEL_FTP_USERNAME  
# Value: cpanel_username
# Description: Your cPanel username (not email)

CPANEL_FTP_PASSWORD
# Value: your_cpanel_password
# Description: Your cPanel password
```

#### **SSH Access Secrets (Optional)**
```yaml
CPANEL_SSH_HOST
# Value: your-domain.com (or ssh.your-domain.com)
# Description: SSH server hostname

CPANEL_SSH_USERNAME
# Value: cpanel_username  
# Description: Your cPanel SSH username

CPANEL_SSH_PASSWORD
# Value: your_cpanel_password
# Description: Your cPanel SSH password

CPANEL_SSH_PORT
# Value: 22
# Description: SSH port (usually 22)
```

---

## **⚙️ CPANEL CONFIGURATION STEPS**

### **Step 1: Enable FTP Access**
1. Login to **cPanel**
2. Go to **Files** → **FTP Accounts**
3. Ensure your main account has FTP access enabled
4. Note the FTP server details (usually `ftp.yourdomain.com`)

### **Step 2: Enable SSH Access (Optional)**
1. Check if SSH is enabled in cPanel
2. Go to **Advanced** → **SSH Access**
3. Generate or note SSH connection details
4. Test connection: `ssh cpanel_user@yourdomain.com`

### **Step 3: Verify File Permissions**
Ensure these directories are writable:
```
public_html/cache/          (755)
public_html/public/         (755)  
public_html/files/          (755)
public_html/config.inc.php  (644)
```

---

## **🚀 DEPLOYMENT PROCESS**

### **Automatic Deployment**
1. **Push to main branch**:
   ```bash
   git add .
   git commit -m "Deploy to production"
   git push origin main
   ```

2. **GitHub Actions will**:
   - ✅ Checkout latest code
   - ✅ Remove development files
   - ✅ Upload to cPanel via FTP
   - ✅ Set proper permissions
   - ✅ Clear OJS cache

3. **Monitor deployment**:
   - Go to GitHub → Actions tab
   - Watch deployment progress
   - Check for any errors

### **Manual Deployment**
```bash
# Trigger manual deployment
gh workflow run deploy-cpanel.yml
```

---

## **🔧 PRODUCTION CONFIGURATION**

### **Database Setup**
1. **Create MySQL Database** in cPanel:
   ```
   Database Name: cpanel_user_ojsdb
   Username: cpanel_user_ojsdb  
   Password: [strong-password]
   ```

2. **Import Database** (if migrating):
   ```bash
   # Via cPanel phpMyAdmin or command line
   mysql -u username -p database_name < backup.sql
   ```

3. **Update config.inc.php**:
   ```php
   [database]
   username = cpanel_user_ojsdb
   password = your_strong_password
   name = cpanel_user_ojsdb
   ```

### **SSL Configuration**
1. **Enable SSL** in cPanel (Let's Encrypt recommended)
2. **Update config.inc.php**:
   ```php
   [general]
   base_url = "https://yourdomain.com"
   
   [security]
   force_ssl = On
   force_login_ssl = On
   ```

### **Email Configuration**  
1. **Create email account** in cPanel:
   ```
   Email: noreply@yourdomain.com
   Password: [strong-password]
   ```

2. **Update config.inc.php**:
   ```php
   [email]
   smtp_server = "mail.yourdomain.com"
   smtp_username = "noreply@yourdomain.com"
   smtp_password = "your_email_password"
   ```

---

## **📊 MONITORING & TROUBLESHOOTING**

### **Deployment Logs**
- **GitHub Actions**: Repository → Actions → Latest workflow run
- **cPanel Error Logs**: cPanel → Errors → Error Logs
- **OJS Error Logs**: Check `cache/` directory for error files

### **Common Issues**

| Issue | Solution |
|-------|----------|
| FTP Connection Failed | Verify FTP credentials and server |
| Permission Denied | Check file permissions (755/644) |
| SSH Connection Failed | Ensure SSH is enabled in cPanel |
| Config Not Found | Verify config.inc.php exists and readable |
| Database Connection Error | Check database credentials |

### **Testing Checklist**
After deployment, test:
- [ ] Homepage loads (https://yourdomain.com)
- [ ] Admin login works
- [ ] Database connectivity
- [ ] Email sending functionality  
- [ ] File upload capabilities
- [ ] SSL certificate active

---

## **🔒 SECURITY RECOMMENDATIONS**

### **Secret Management**
- ✅ Use GitHub Secrets (never commit passwords)
- ✅ Use strong, unique passwords
- ✅ Enable 2FA on GitHub account
- ✅ Regularly rotate passwords
- ✅ Limit FTP/SSH access to necessary IPs

### **Production Security**
- ✅ Enable SSL/HTTPS
- ✅ Use secure database passwords  
- ✅ Enable OJS security features
- ✅ Regular security updates
- ✅ Monitor access logs

---

## **📞 SUPPORT**

- **Repository Issues**: https://github.com/habdil/ojs-al-musannif/issues
- **OJS Documentation**: https://docs.pkp.sfu.ca/
- **GitHub Actions**: https://docs.github.com/en/actions

---

**⚠️ IMPORTANT**: Never commit sensitive data like passwords or API keys to the repository. Always use GitHub Secrets or environment variables.