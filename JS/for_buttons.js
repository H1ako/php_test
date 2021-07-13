const btn_hire = $('#btn-hire');
const btn_menu = $('#btn-menu');
btn_hire.on('click', function () {
    console.log(document.documentElement.clientWidth);
})


btn_menu.on('click', function () {
    var navigate = $('#header-nav');
    var topBar = $('#section-header-top-bar');
    navigate.toggleClass('collapsed');
    // topBar.toggleClass('section-header-nav-clicked');
})