$(document).ready(function() {
    $('#pbgStatus').change(function() {
        if ($(this).val() === 'sudah') {
            $('#noPbgTerbitField').show();
        } else {
            $('#noPbgTerbitField').hide();
        }
    });
});