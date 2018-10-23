$('#search-btn').on('click', function() {
    var data = {
        'action' : 'search',
        'method' : 'get',
        'value' : $('#search').val()   
    };
    
    $.ajax({
        url: 'ajax.php',
        data: data,
        type: 'post',
        success: function(html) {
            $('.search-results').html(html).show();
        }
    });
});