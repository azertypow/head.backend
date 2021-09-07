/**
 * @type {import('@vue/cli-service').ProjectOptions}
 */
module.exports = {
  outputDir: "../assets/",
  pages: {
    index: {
      entry: 'src/main.ts',
      filename: '../site/templates/default.php',
    }
  },
  publicPath: "/assets/",
  devServer: {
    proxy: 'http://localhost:8000'
  }
}
