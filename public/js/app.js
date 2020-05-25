var app = {
    init: function() {
        console.log('app initialisée');
        $('.list-group-item form button').on('click', app.deleteTask);
    },
    // Méthode qui va chercher le message
    deleteTask: function(e) {
        e.preventDefault();

        console.log('bouton de form cliqué');
        var btn = $(e.target);
        console.log(btn);
        var listItem = btn.parent().parent().parent();
        $.ajax(
            deleteURL,
            {
                method: 'POST',
                data: {
                    'id': listItem.attr('data-id')
                }
            }
        ).done(function(data) {
            console.log(data);
            if(data.error == false) {
                $('.list-group-item[data-id=' + data.id + ']').remove();
            }
        });
    }
}

$(app.init());
