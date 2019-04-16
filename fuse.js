const { FuseBox, CSSPlugin, UglifyJSPlugin } = require("fuse-box");

const isProduction = process.argv.indexOf("--production") > -1;

const fuse = FuseBox.init({
    homeDir: "_src",
    output: "_build/js/$name.js",
    plugins: [
        // node fuse --production
        isProduction && UglifyJSPlugin()
    ],
    rollup: {
        bundle: {
            moduleName: "Fuse4ever"
        },
        entry: `index.js`,
        treeshake: true
    }
});

fuse
    .bundle("app")
    .instructions("> index.ts");

fuse.run();
