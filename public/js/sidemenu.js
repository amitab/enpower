function openMenu() {
    $('div#side-menu').addClass('active');
    $('div#page-wrap').addClass('active');
}

function closeMenu() {
    $('div#side-menu').removeClass('active');
    $('div#page-wrap').removeClass('active');
}

$(document).ready(function() {
    $(document).on('click', 'div.trigger', function() {
        if(!$('div#side-menu').hasClass('active')) {
            openMenu();
        } else {
            console.log('close');
            closeMenu();
        }
    });
});