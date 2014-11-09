module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

	sass: {
      dist: {
        options: {
          style: 'compressed'
        },
        files: {
          'assets/css/ses.min.css': 'assets/scss/ses.scss'
        }
      }
    },

    watch: {
      html: {
        files: ['index.html'],
        options: {
          livereload: true,
        }
      },
      sass: {
        files: 'assets/scss/*.scss',
        tasks: ['sass'],
        options: {
          livereload: true,
        }
      }
    }
  });

  //grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['sass', 'watch']);
}