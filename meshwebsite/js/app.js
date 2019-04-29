/**
 * getHeaders
 * @param {array} arr - The contents item
 * @return {array} An array of items that match with the data attr
 */
window.onscroll = function changeClass() {
	let scrollSection = document.querySelectorAll('.section-scroll');
	let scrollPosY = window.pageYOffset | document.body.scrollTop;

	for (let i = 0; i < scrollSection.length; i++) {

		let sectionHeight = scrollSection[i].offsetHeight;
		let contentsItems = document.querySelectorAll('.contents-item');
		let sectionOffset = scrollSection[i].offsetTop - 43;

		if (scrollPosY >= sectionOffset + sectionHeight || scrollPosY < sectionOffset) {
			contentsItems[i].classList.remove('active');
		} else {
			contentsItems[i].classList.add('active');
		}
	}
}
