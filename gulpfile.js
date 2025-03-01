const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");
const tailwindcss = require("tailwindcss");
const browserSync = require("browser-sync").create();
const del = require("del");

// Đường dẫn file
const paths = {
  scss: "./assets/scss/**/*.scss",
  cssOutput: "./dist/css",
  html: "./**/*.php", // Theo dõi file PHP (có thể thay bằng `.html` nếu cần)
};

// Xóa thư mục dist trước khi build lại
gulp.task("clean", function () {
  return del([paths.cssOutput]);
});

// Task biên dịch SCSS + Tailwind
gulp.task("scss", function () {
  return gulp
    .src("./assets/scss/style.scss") // File SCSS chính
    .pipe(sass().on("error", sass.logError)) // Biên dịch SCSS thành CSS
    .pipe(postcss([tailwindcss(), autoprefixer()])) // Xử lý Tailwind và Autoprefixer
    .pipe(cleanCSS()) // Nén CSS
    .pipe(rename({ suffix: ".min" })) // Đổi tên file thành style.min.css
    .pipe(gulp.dest(paths.cssOutput)) // Lưu vào dist/css
    .pipe(browserSync.stream()); // Reload trình duyệt
});

// Task khởi động BrowserSync
gulp.task("serve", function () {
  browserSync.init({
    proxy: "http://theannhotel.local/", // Đổi thành URL localhost của bạn
    notify: false,
  });

  gulp.watch(paths.scss, gulp.series("scss"));
  gulp.watch(paths.html).on("change", browserSync.reload);
});

// Task mặc định
gulp.task("default", gulp.series("clean", "scss", "serve"));
