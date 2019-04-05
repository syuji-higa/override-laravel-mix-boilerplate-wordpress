const sass = require('sass')

mix
  .sass('', '', {
    functions: {
      'path($path)': (imgPath) => {
        return new sass.types.String(`${imgPath.getValue()}?id=${Date.now()}`)
      }
    }
  })
  .options({
    processCssUrls: false,
    postCss: [
      require('autoprefixer')({
        grid: true
      })
    ]
  })
  .webpackConfig({
    module: {
      rules: [
        {
          test: /\.js$/,
          exclude: /node_modules\/(?!(vanix)\/).*/,
          loader: 'babel-loader'
        }
      ]
    }
  })

if (process.env.NODE_ENV === 'production') {
  mix.then(async () => {
    // In production, delete unnecesary files
    fs.removeSync(`${wpContentThemeDirName}/${svgDummyModuleName}.js`)
    fs.removeSync(`${wpContentThemeDirName}/mix-manifest.json`)
  })
}
