const path = require("path"),
    MiniCssExtractPlugin = require("mini-css-extract-plugin"),
    autoprefixer = require("autoprefixer"),
    MergeIntoSingleFilePlugin = require("webpack-merge-and-include-globally");

module.exports = {
    devtool: "eval",
    entry: {
        // polyfills: "./src/polyfills.js",
        main: "./src/page.js",
    },

    output: {
        path: path.resolve("./static"),
        publicPath: "",
        filename: "[name].js",
        chunkFilename: "[id].chunk.js",
    },
    resolve: {
        extensions: [".ts", ".tsx", ".js", ".json"],
    },
    externals: {
        jquery: "jQuery",
    },
    module: {
        rules: [
            {
                test: /\.(png|jpe?g|gif|svg|woff|woff2|ttf|eot|ico)$/,
                loader: "file-loader?name=assets/[name].[ext]",
            },
            {
                test: /\.(webm|mp4)$/,
                loader: "file-loader?name=assets/[name].[ext]",
            },
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: "css-loader",
                        options: { sourceMap: false, url: false },
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            sourceMap: false,
                            importLoaders: 1,
                            plugins: () => [autoprefixer()],
                        },
                    },
                    { loader: "sass-loader", options: { sourceMap: false } },
                ],
            },
            {
                test: /\.m?(js|jsx)$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: [
                            [
                                "@babel/preset-env",
                                {
                                    useBuiltIns: "usage",
                                },
                            ],
                            "@babel/preset-react",
                        ],
                    },
                },
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "[name].css",
            chunkFilename: "[id].css",
        })
      
    ],
};
