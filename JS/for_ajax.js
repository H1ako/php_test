$('#form-btn-contact').on('click', function (event) {
    event.preventDefault();
    var form = $(this);
    var form_action = form.attr('action');
    var form_data = form.serialize();

    $posting = $.post(form_action, form_data, function () {
        // alert('posted');
    });
})