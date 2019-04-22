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

## npm install modules
```bash
$ npm i @babel/plugin-proposal-class-properties @babel/preset-env babel-eslint autoprefixer -D
$ npm i @babel/polyfill -S
```
