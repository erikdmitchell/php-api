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
        success: function(response) {
            console.log(response);
            
            $('.search-results').show();
        }
    });
});