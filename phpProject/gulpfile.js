import { task, watch } from "gulp";
const browserSync = require("browser-sync").create();

task("server", function () {
  browserSync.init({
    proxy: "localhost",
    open: false,
  });

  watch("phpProject/index.php").on("change", () => {
    console.log("index.php file changed");
    browserSync.reload();
  });
});
