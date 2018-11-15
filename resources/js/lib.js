function SendEmail(fields, form) {
    var options = {
        method: "POST",
        url: 'api/service',
        data: fields,
        async: true,
        dataType: 'json'
    };
    if (fields.toString() === '[object FormData]') {
        options['contentType'] = false;
        options['cache'] = false;
        options['processData'] = false;
    }
    $.ajax(options).done(function(data) {
        form.find('div.form').hide();
        form.find('div.thank').show();
        if (data.response && data.response !== '') {
            form.find('div.thank').html(data.response);
        } else if (data.error) {
            form.find('div.thank').html(data.error);
        }
        setTimeout(function() {
            form.find('div.form').show();
            form.find('div.thank').fadeOut('slow');
            form.parents('#pop_up').hide();
        }, 5000);
        form.find('div.form > form.callback > input:text').val('');
        form.find('div.form > form.callback > input.submit').val('Отправить');
        form.find('div.form > form.callback > input.submit').prop('disabled', false);
    }).fail(function(xhrObj) {
        console.log("While POSTing data to 'service' the following error occured: " + xhrObj.status + " (" + xhrObj.statusText + ")");
    });
}
$('.callback').on('submit', function(e) {
    e.preventDefault();
    var isValid = true;
    var fields = {};
    $(this).find('.validate').each(function() {
        if (!$(this).val()) {
            isValid = false;
            $(this).addClass('error');
        } else {
            fields[$(this).prop('name')] = $(this).val();
        }
    });
    $(this).find('input:not(:file):not(.validate)').each(function() {
        fields[$(this).prop('name')] = $(this).val();
    });
    fields['action'] = 'order';
    if (!isValid) return;
    if (typeof formFiles !== 'undefined' && formFiles !== null) {
        for (var key in fields) {
            formFiles.append(key, fields[key]);
        }
        SendEmail(formFiles, $(this).parents('div.form_bg'));
        formFiles = undefined;
    } else {
        SendEmail(fields, $(this).parents('div.form_bg'));
    }
    $('ul#filelist').html('');
    $(this).find('input.submit').val('Подождите...').prop('disabled', true);
});
$('.validate').on('focusin', function() {
    if ($(this).hasClass('error')) {
        $(this).removeClass('error');
    }
});
var formFiles;
$('#userimagebutton').click(function(e) {
    e.preventDefault();
    $(this).next("input[type='file']").click();
});
$('#userimage').on("change", function(e) {
    if (e.target.files && e.target.files.length) {
        formFiles = new FormData();
        for (var i = 0; i < e.target.files.length; i++) {
            formFiles.append('userImages[]', e.target.files[i]);
            $('ul#filelist').append('<li>' + (e.target.files[i]).name + '</li>');
        }
        $(this).val('');
    }
});