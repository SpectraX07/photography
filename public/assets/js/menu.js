const currentUrl = window.location.href,
menuAnchor = $('a[href="'+currentUrl+'"]');
if (menuAnchor.length) {
	menuAnchor.parent('li.menu-item').addClass('active');
	menuAnchor.parents('li.menu-item').addClass('active open');
}