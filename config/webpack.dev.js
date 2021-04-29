const webpackMerge = require("webpack-merge"),
  baseConfig = require("./webpack.base"),
  BrowserSyncPlugin = require("browser-sync-webpack-plugin");

const ENV = (process.env.NODE_ENV = process.env.ENV = "none");

module.exports = webpackMerge(baseConfig, {
  mode: ENV,
  watch: true,
  devtool: false,
  plugins: [
    new BrowserSyncPlugin({
      proxy: "http://localhost/wootutorial/",
      files: ["./*.php", "./views/**/*.twig", "./assets/**/*.*"],
      // host: "192.168.1.84",
      // https: true,
    }),
  ],
});
