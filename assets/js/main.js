const siteHeader = document.querySelector(".site-header");
const bgClass = "with-bg";

window.addEventListener("scroll", function () {
	if (window.pageYOffset > 0) {
		siteHeader.classList.add(bgClass);
	} else {
		siteHeader.classList.remove(bgClass);
	}
});
