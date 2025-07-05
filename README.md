# Compre China Static Site

This repository contains a collection of HTML, CSS, and JavaScript files for a static website. The pages reference various assets that should be organized as follows:

```
assets/
  css/      - Stylesheets such as `flowtrack.css` and `flowtrack-responsive.css`.
  js/       - Scripts including `flowtrack.js`.
  vendors/  - Third‑party libraries (Bootstrap, jQuery, etc.).
  images/   - Site images, icons, and graphics.
  inc/      - Server‑side helper files like `sendemail.php`.
```

## Deployment
1. Copy the repository files and the `assets` directory to your web server.
2. Ensure vendor libraries, fonts, images, and `flowtrack.js` are placed in their respective folders under `assets/` as shown above.
3. If PHP email functionality is required, upload `assets/inc/sendemail.php` to the same location.
4. Access `index.html` in a browser or via your web server to view the site.

The site relies on the JavaScript and CSS assets (`flowtrack.js`, vendor libraries), fonts from Google Fonts, and images referenced in the HTML. Make sure these assets are available for the pages to render correctly.
