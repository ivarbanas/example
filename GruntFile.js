module.exports = function(grunt)
{
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		watch:{
			sass:{
				files:'sass/*.scss',
				tasks:['sass']
			}
		},
		concat:{
			options:{
				separator:"\n\n"
			},
			dist:{
				src:['js/ajaxLogin.js', 'js/carouselResponsive.js', 'js/loginValidation.js', 'js/mobDesktopMode.js', 'js/mobileSearchbox.js', 'js/mobileSlider.js', 'js/modernizrCustom2.8.3.min.js'],
				dest:'js/<%=pkg.name%>.js'
			}
		},
		uglify:{
			options:{
				mangle:false
			},
			my_target:{
				files:{
					'js/<%=pkg.name%>.min.js':['js/<%=pkg.name%>.js']
				}
			}
		},
		sass:{
			dist:{
				files:{
					'css/style.css':'sass/style.scss'
				}
			}
		}
	});
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	// tasks
	grunt.registerTask('justJavaScript',['concat','uglify']);
	grunt.registerTask('default',['concat']);
}