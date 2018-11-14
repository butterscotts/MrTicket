//may or may not be an irrelevant function, haven't yet determined if i can do something with this :D

$(document).ready(function() {

    $('#example tr').click(function() {
        var href = $(this).find("a").attr("href");
        if(href) {
            window.location = href;
        }
    });

});
$(document).ready(function() {
    $('table.display').DataTable();
} );