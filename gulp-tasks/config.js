module.exports = {
  scss: {
    source: ['scss/**/[^_]*.scss'],
    all: ['scss/**/*.scss'],
    destination: 'dist/css',
    options: {
      outputStyle: 'expanded',
      includePaths: ['./node_modules'],
    },
  },
  scripts: {
    source: ['scripts/**/*.js'],
    destination: 'dist/scripts',
  },
  browserSync: {
    proxy: null,
    open: true,
    xip: false,
    logConnections: false,
  },
};
