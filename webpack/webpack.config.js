const {
  resolve
} = require("path");
const path = require('path');

// css extraction and minification
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CssMinimizerPlugin = require("css-minimizer-webpack-plugin");

// clean out build dir in-between builds
const {
  CleanWebpackPlugin
} = require('clean-webpack-plugin');

module.exports = [{
  entry: {
    libs: ['../webpack/src/js/libs.js'],
    app: ['../webpack/src/js/app.js']
  },
  output: {
    filename: '[name].bundle.js',
    path: path.resolve(__dirname, '../assets/js')
  },
  module: {
    rules: [
      // js babelization
      {
        test: /\.(js|jsx)$/,
        exclude: /node_modules/,
        loader: 'babel-loader'
      },
      // sass compilation
      {
        test: /\.(sass|scss)/i,
        use: [{
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: resolve(__dirname, "../assets/css"),
            },
          },
          {
            loader: 'css-loader',
            options: {
              url: false
            }
          },
          "sass-loader",
        ],
      },
      // loader for webfonts (only required if loading custom fonts)
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        type: 'asset/resource',
        generator: {
          filename: '../assets/fonts/[name][ext]',
        }
      },
      // loader for images and icons (only required if css references image files)
      {
        test: /\.(webp|svg|png)$/,
        type: 'asset/resource',
        generator: {
          filename: '../assets/img/[name][ext]',
        }
      },
    ]
  },
  plugins: [
    // clear out build directories on each build
    new CleanWebpackPlugin({
      cleanOnceBeforeBuildPatterns: [
        '../assets/js/*',
        '../assets/css/*',
        '../assets/img/*',
      ]
    }),
    // css extraction into dedicated file
    new MiniCssExtractPlugin({
      filename: '../css/[name].css'
    }),
  ],
  optimization: {
    // minification - only performed when mode = production
    minimizer: [
      // js minification - special syntax enabling webpack 5 default terser-webpack-plugin 
      `...`,
      // css minification
      new CssMinimizerPlugin(),
    ]
  },
}];