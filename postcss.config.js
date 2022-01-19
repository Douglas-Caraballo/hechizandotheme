const postcssConfig = {
    plugins: [
        require('postcss-import'),
        require('autoprefixer'),
        require('postcss-nested'),
    ]
}
module.exports = postcssConfig;