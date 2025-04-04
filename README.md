# Community Cookbook

Welcome to the **Community Cookbook** Drupal project! This guide will help you set up the site locally using **Lando**, import the database, and understand the recommended workflow for pushing changes.

---

## 🚀 Getting Started

### 1. Clone the repository
```bash
git clone git@github.com:YourUsername/community-cookbook.git
cd community-cookbook
```



Then start Lando:
```bash
lando start
```

### 3. Import the latest database
Ensure you have the most recent SQL file in the `/sql/` folder. To import:
```bash
lando db-import sql/2025-04-04-community-cookbook.sql
```
> 🔄 Adjust the filename if a newer one is available.

### 4. Run database updates
```bash
lando drush updb
```

### 5. Import configuration (if needed)
```bash
lando drush cim -y
```

---

## 💻 Making Changes and Pushing to GitHub

### Standard flow:
1. Export your configuration changes (after modifying config via the UI):
```bash
lando drush cex -y
```

2. Review changes:
```bash
git status
```

3. Stage and commit:
```bash
git add .
git commit -m "Descriptive message about your changes"
```

4. Push to the remote repo:
```bash
git push
```

5. Back up your database:
```bash
lando drush sql-dump > sql/$(date +%Y-%m-%d)-community-cookbook.sql
```
> ✅ This ensures you have a local copy of your current database state.

Optional: Keep only the 3 most recent dumps:
```bash
ls -1t sql/*.sql | tail -n +4 | xargs rm -f
```

---

## 🔧 Common Lando Commands
- Start Lando: `lando start`
- Stop Lando: `lando stop`
- Database import: `lando db-import yourfile.sql`
- Database dump: `lando drush sql-dump > sql/date-site.sql`
- Configuration export: `lando drush cex -y`
- Configuration import: `lando drush cim -y`
- Update DB after config changes: `lando drush updb`

---

## 🌐 Local Site Access
Once Lando is running:
```text
https://community-cookbook.lndo.site
```

---

## ✅ Notes
- Admin UI changes (like fields, content types, etc.) should be followed by `lando drush cex -y` to export to code.
- Always run `lando drush updb` after pulling the latest changes or importing config.
- Commit SQL dumps only if necessary. Best to store them locally or in secure backup, unless your team uses them in the repo.

---

Happy cooking! 🥘

