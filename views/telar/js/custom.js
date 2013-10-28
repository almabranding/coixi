$(window).load(function() {
    var masorny = document.querySelector('#masorny');
    var msnry = new Masonry(masorny, {
        // options
        columnWidth: '.coixinsHome .item',
        isFitWidth: false,
        itemSelector: '.item'
    });
    $(".tooltip_wrapper").live('click', function(event) {
        $('#white_box').removeClass().addClass('hide');
        $('#white_full').show();
        $('#white_box').fadeIn('slow');
        return false;
    });

});


