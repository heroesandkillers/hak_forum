$(document).ready(function()
{
    $('body').addClass('old-ie');
    $('#page-body').prepend('<div id="oldie"><h1>' + ieErrorTitle + '</h1>' + ieErrorMessage + '</div>');
    
    var header = $('header:first');
    header.replaceWith('<div id="header">' + header.html() + '</div>');
    if(!$('#site-description').parents('div#header').length)
    {
        // move header items to #header
        $('#site-description').appendTo($('#header'));
        $('#search-box').appendTo($('#header'));
    }
});
