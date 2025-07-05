# Compre China Static Website

This repository contains a static HTML template that expects assets under the `assets/` directory. The original files were provided without this structure so the styles and scripts would not load correctly.

## Folder Structure

```
assets/
  css/                     # Theme styles (`flowtrack.css`, etc.)
  js/                      # Custom scripts
  vendors/
    bootstrap/
      css/
      js/
    bootstrap-select/
      css/
      js/
    fontawesome/
      css/
      webfonts/
    flowtrack-icons/
      fonts/
    ...                    # other libraries
  images/                  # website images (placeholders)
  inc/                     # server side scripts (e.g. `sendemail.php`)
```

Most vendor libraries and images were missing from the original source, so placeholder files have been added. Replace these placeholders with the real assets before deploying.

## Deployment

1. Ensure all required assets (images, JavaScript libraries, fonts) are present under the `assets/` directory.
2. Upload the repository to any static web server or open `index.html` in a browser.
3. For contact forms to work, implement the logic in `assets/inc/sendemail.php` or connect it to your backend.

