const elem = document.querySelector('.ad-casanova')
const elem2 = document.querySelector('.ad-casanova2')



const casanova = basicScroll.create({
	
		elem: elem,
		// from: 'middle-bottom',
		// to: 'middle-middle',
		
		from: 'top-middle',
		to: 'top-top',
		inside  : () => elem2.classList.remove('ad-casanova--fixed'),

		
		props: {
			// '--height': {
			// 	from: '0vh',
			// 	to: '80vh',
			// 	direct: true
			// },
			'--scaleY': {
				from: '0',
				to: '1',
				direct: true
			}

		}

})
casanova.start()