var webpack = require('webpack');

module.exports = {
    entry: {
        'public': [
            './resources/assets/js/parkList.js'
        ],
    },
    output: {
        path: '/wamp64/www/W/public/js/',
        filename: '[name].bundle.js',
        chunkFilename: '[id].bundle.js'
    },
    module: {
        loaders: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: "babel-loader",
                query: {
                    compact: false // because I want readable output
                }
            }
        ]
    }
};