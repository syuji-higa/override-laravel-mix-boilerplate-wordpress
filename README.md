# laravel-mix-boilerplate wordpress branch override files
https://github.com/dsktschy/laravel-mix-boilerplate/tree/wordpress

## merge files
- .eslintrc.js
- .gitignore
- .stylelintrc.js
- webpack.mix.js
- views/variables.json

## not merge files
- README.md

## copy assets files
https://github.com/syuji-higa/override-laravel-mix-boilerplate-assets

assets/ -> resources/themes/input-theme-name/assets/

## copy JavaScript files
https://github.com/syuji-higa/javascript-modules-v5

src/ -> resources/themes/input-theme-name/assets/js/

- store.js
- modules/eventer.js
- modules/image-preloader.js
- modules/inviewport-observer.js
- modules/scroll-observer.js
- modules/window-size-observer.js
- utils/background-image.js
- utils/debounce.js
- utils/event.js
- utils/load.js
- utils/rect.js
- utils/throttle.js
- utils/wait.js
- views/client-flag-setter.js
- views/height-fitter.js
- views/ignitioner.js
- views/inviewporter.js
- views/lazyloader.js
- views/page-loader.js

## npm install modules
```bash
$ npm i @babel/plugin-proposal-class-properties @babel/preset-env babel-eslint autoprefixer intersection-observer custom-event-polyfill bowser sanitize.css vanix -D
$ npm i @babel/polyfill -S
```
