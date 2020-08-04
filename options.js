module.exports = {
	path: {
		build: {
			html: './local/templates/html/',
			js: './local/templates/html/js/',
			css: './local/templates/html/css/',
			components: './local/templates/html/components-template/',
			images: './local/templates/html/images/',
			imagesPlaceholder: './local/templates/html/images/placeholder',
			fonts: './local/templates/html/fonts/',
			video: './local/templates/html/video/'
		},

		src: {
			pug: './src/pages/**/*.pug',
			styles: [
				'./src/assets/css/'
			],
			js: './src/assets/js/',
			svg: './src/**/*.svg',
			images: './src/**/*.{png,jpg,jpeg,gif,svg,webp}',
			assets: './src/assets/',
			fonts: './src/assets/fonts/**/*',
			sprites: './src/assets/sprites/'
		},
		watch: {
			pug: './src/**/*.pug',
			sass: './src/**/*.{scss,sass}',
			js: './src/**/*.js',
			svg: './src/**/*.svg',
			images: './src/**/*.{png,jpg,jpeg,gif,ico,svg,webp}'
		}
	},

	serverConfig: {
		server: {
			baseDir: './'
		},
		startPath: "/local/templates/html/index.html",
		host: 'localhost',
		port: '4301',
		reloadDelay: 100,
		timestamps: false,
		notify: false,
		// logPrefix: 'frontend'
		// tunnel: true,
		// tunnel: "slamlight"
	},
};
