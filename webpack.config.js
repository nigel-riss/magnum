// const path = require('path');

module.exports = {
    entry: "./src/js/app.js",
    output: {
        // path: "./dist/scripts/",
        // path: path.resolve(__dirname, 'dist/scripts/'),
        filename: "app.js"
    },
    module: {
        loaders: [{
            loader: 'babel-loader',
            query: {
                presets: ['es2015']
            },
            test: /\.js$/,
            exclude: /node_modules/
        }]
    }
}