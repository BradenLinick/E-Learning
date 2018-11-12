module.exports = {
  mode: 'production',
  entry: './resources/js/index.js',
  output: {
      path: __dirname + '/public/js',
      filename: 'bundle.js'
  }
}