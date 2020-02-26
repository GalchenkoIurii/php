$(function() {
    $('input[type=submit]').on('click', function(event) {
        event.preventDefault();
        var json = {
            name: $('input[name=name]').val(),
            surname: $('input[name=surname]').val()
        }
        $.ajax({
            url: $('form').prop('action'),
            method: 'POST',
            data: 'json=' + JSON.stringify(json)
        }).done(function(msg) {
            $('#greeting').html(msg);
        });
    });
});