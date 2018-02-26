console.log('Hello script this is working yeah');

$(document).ready(function () {
    $('.main-navigation .search-toggle').on('click', function (event) {
        event.preventDefault();
        console.log('testing search on click');
        $('.main-navigation .search-field').focus();
    });

    $('.main-navigation .search-field').on('blur', function(){
   
        // hide it here
    });
});