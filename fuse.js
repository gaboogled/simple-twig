const { FuseBox } = require("fuse-box");
const fuse = FuseBox.init({
  homeDir: ".",
  target:"browser",
  output: "$name.js"
});
fuse.bundle("client").instructions(">index.ts");
fuse.run();
