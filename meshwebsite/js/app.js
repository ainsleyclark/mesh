/***********************************************************************************************/
/* Add Active to SmallNav on Scroll */
/***********************************************************************************************/

/**
 * getHeaders
 * @param {array} arr - The contents item
 * @return {array} An array of items that match with the data attr
 */
window.onscroll = function changeClass() {
	let scrollSection = document.querySelectorAll('.section-scroll')
	let scrollPosY = window.pageYOffset | document.body.scrollTop

	for (let i = 0; i < scrollSection.length; i++) {
		let sectionHeight = scrollSection[i].offsetHeight
		let contentsItems = document.querySelectorAll('.contents-item')
		let sectionOffset = scrollSection[i].offsetTop - 43

		if (scrollPosY >= sectionOffset + sectionHeight || scrollPosY < sectionOffset) {
			contentsItems[i].classList.remove('active')
		} else {
			contentsItems[i].classList.add('active')
		}
	}
}

/***********************************************************************************************/
/* Highlight Code */
/***********************************************************************************************/

hljs.initHighlightingOnLoad()

/***********************************************************************************************/
/* Copy to Clipboard */
/***********************************************************************************************/

//Copy Click
let copyButtons = document.querySelectorAll('.copy-to-clipboard')

for (var i = 0; i < copyButtons.length; i++) {
	copyButtons[i].addEventListener('click', getCopyData, false)
}

function getCopyData(el) {
	//Get the HTML of the codes sibling
	var sibling = this.parentNode.firstChild.outerHTML
	sibling = strip(sibling)
	var fullLink = document.createElement('input')
	document.body.appendChild(fullLink)
	fullLink.value = sibling
	copyToClipboard(fullLink)
	changeToTick(this)
	fullLink.remove()
}

//Strip HTML tags from a given string
function strip(html) {
	var doc = new DOMParser().parseFromString(html, 'text/html')
	return doc.body.textContent || ''
}

//Copy to Clipboard
function copyToClipboard(el) {
	el.select()
	document.execCommand('copy')
}

//Change Clipboard Icon to Tick
let changeToTick = function(el) {
	el.style.display = 'none'
	el.nextElementSibling.style.display = 'block'
}

/***********************************************************************************************/
/* Scroll to Anchor */
/***********************************************************************************************/

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener('click', function(e) {
		e.preventDefault()

		let headerOffset = -55
		let section = document.querySelector(this.getAttribute('href'))
		let elementPosition = section.offsetTop
		let offsetPosition = elementPosition - headerOffset

		window.scrollTo({
			top: offsetPosition,
			behavior: 'smooth'
		})
	})
})
