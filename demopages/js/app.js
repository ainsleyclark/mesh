/**
 * getHeaders
 * @param {array} arr - The contents item
 * @return {array} An array of items that match with the data attr
 */

// const getHeaders = function(arr) {
//     let headers = [];

//     arr.forEach(function(value, index) {
//         let dataAttr = '#' + value.getAttribute('data-contentitem');
//         headers.push(dataAttr);
//     });

//     let headersObj = document.querySelectorAll(headers);

//     return headersObj;
// }

// let contentsItems = document.querySelectorAll('.contents-item');
// let headers = getHeaders(contentsItems);

// window.onscroll = function changeClass() {

//     let scrollPosY = window.pageYOffset | document.body.scrollTop;

//     headers.forEach(function(value, index) {
//         let itemYPos = value.offsetTop;
//         let itemHeight = value.clientHeight;

//         console.log(itemHeight);

//         //console.log('SCROLL Y POS ' + scrollPosY);
//         if(scrollPosY > itemYPos) {
//             contentsItems[index].classList.add('active');
//         } else {
//             //contentsItems[index].classList.remove('active');
//         }
//     });

// }

window.onscroll = function changeClass() {
	let scrollSection = document.querySelectorAll('.section-scroll')
	let scrollPosY = window.pageYOffset | document.body.scrollTop
	let windowHeight = window.innerHeight

	for (let i = 0; i < scrollSection.length; i++) {
		let sectionOffset = scrollSection[i].offsetTop
		let sectionHeight = scrollSection[i].offsetHeight
		let sectionID = scrollSection[i].id
		let contentsItems = document.querySelectorAll('.contents-item')

		if (scrollPosY >= sectionOffset + sectionHeight || scrollPosY < sectionOffset - 5) {
			contentsItems[i].classList.remove('active')
		} else {
			console.log(contentsItems[i])
			contentsItems[i].classList.add('active')
		}
	}

	//Make smallnav fixed after 50px
	let smallnav = document.querySelector('.smallnav')

	if (scrollPosY > 50) {
		smallnav.classList.add('fixed')
	} else {
		smallnav.classList.remove('fixed')
	}
}
