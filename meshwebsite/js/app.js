/***********************************************************************************************/
/* Add Active to SmallNav on Scroll */
/***********************************************************************************************/

let scrollSection = document.querySelectorAll('.section-scroll')
let contentsItems = document.querySelectorAll('.contents-item')

window.addEventListener(
	'scroll',
	function() {
		let scrollPosY = window.pageYOffset | document.body.scrollTop
		reset()
		if (scrollPosY > scrollSection[0].offsetTop + 80) {
			scrollPosY += innerHeight / 2
			let elements = []
			for (let i = 0; i < scrollSection.length; i++) {
				let sectionHeight = scrollSection[i].offsetHeight
				let sectionOffset = scrollSection[i].offsetTop - 43

				let is = scrollPosY >= sectionOffset + sectionHeight || scrollPosY < sectionOffset
				if (!is) {
					contentsItems[i]._i = i
					elements.push(contentsItems[i])
				}
			}
			findActive(elements, scrollPosY)
		} else {
			contentsItems[0].classList.add('active')
		}
	},
	{ passive: true }
)

function findActive(elements, scrollPosY) {
	if (elements.length > 0) {
		let activeEl = { d: Infinity, el: null }
		elements.forEach(function(el) {
			let sec = scrollSection[el._i]
			let d = scrollPosY - sec.offsetHeight
			if (d < activeEl.d) {
				activeEl.d = d
				activeEl.el = el
			}
		})
		activeEl.el.classList.add('active')
	}
}

function reset() {
	contentsItems.forEach(function(el) {
		el.classList.remove('active')
	})
}

/***********************************************************************************************/
/* Highlight Code */
/***********************************************************************************************/

hljs.initHighlightingOnLoad()

/****************************/
/* Delegated Event Listener */
/****************************/
Node.prototype.addDelegatedEventListener = function(eventType, aim, callback) {
	let events = eventType.split(',')
	events.forEach(function(value) {
		this.addEventListener(
			value.trim(),
			function(event) {
				if (event.target.matches) {
					if (event.target.matches(aim + ', ' + aim + ' *')) {
						callback(event, event.target.closest(aim))
					}
				}
			},
			false
		)
	})
}

/***********************************************************************************************/
/* Copy to Clipboard */
/***********************************************************************************************/

//Copy Click

document.body.addDelegatedEventListener('click', '.copy-to-clipboard', getCopyData)

function getCopyData(e, el) {
	//Get the HTML of the codes sibling
	var sibling = el.parentNode.firstChild.outerHTML
	sibling = strip(sibling)
	var fullLink = document.createElement('textarea')
	document.body.appendChild(fullLink)
	fullLink.value = sibling
	copyToClipboard(fullLink)
	changeToTick(el)
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

document.body.addDelegatedEventListener('click', '.smallnav a[href^="#"]', function(e, el) {
	e.preventDefault()

	let headerOffset = -400
	let section = document.querySelector(el.getAttribute('href'))
	let elementPosition = section.offsetTop
	let offsetPosition = elementPosition - headerOffset

	window.scrollTo({
		top: offsetPosition - (innerHeight / 2 - 200),
		behavior: 'smooth'
	})
})
