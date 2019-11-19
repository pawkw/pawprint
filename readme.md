# PawPrint WordPress Theme

## Building and Installing

You must have npm installed in order to build the theme.

Place the `pawprint` folder in `wp-content/themes`.

Open the folder in the terminal and run:
```
npm install
npm run build
```

## Notes

Javascript and SCSS are processed as bundles. SCSS files have to be imported in 'src/assets/scss/bundle.scss' and Javascript files immported in 'src/assets/js/bundle.js'.