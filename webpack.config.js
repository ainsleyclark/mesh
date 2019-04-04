import path from 'path'
import ExtractTextPlugin from 'extract-text-webpack-plugin'

const config = {
  target: 'web',
  entry: {
    'one': './src/one.css',
    'two': './src/two.css'
  },
  output: {
    path: path.join(__dirname, './dist/'),
    filename: '[name].css' // output js file name is identical to css file name
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: 'css-loader'
        })
      }
    ]
  },
  plugins: [
    new ExtractTextPlugin('[name].css') // css file will override generated js file
  ]
}