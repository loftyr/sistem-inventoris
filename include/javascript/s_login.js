$(document).ready(function () {
    $('#login').submit(function (e) {
        e.preventDefault();
        $.toast({
            heading: 'Information',
            text: 'Loading Auth. . .',
            position: 'top-right'
        });

        var formData = $(this).serialize();

        $.ajax({
            url: 'login/authLogin',
            type: "POST",
            dataType: "JSON",
            data: formData,
            success: function (result) {
                if (result.cekUser == false) {
                    $.toast({
                        heading: 'Information',
                        text: 'Username Tidak Ditemukan',
                        position: 'top-right'
                    });
                } else if (result.cekPass == false) {
                    $.toast({
                        heading: 'Information',
                        text: 'Password Salah !!!',
                        position: 'top-right'
                    });
                } else if (result.cekUser == true && result.cekPass == true) {
                    var delay = 1000;
                    setTimeout(function () {
                        window.location = 'home';
                    }, delay);
                } else {
                    $.toast({
                        heading: 'Error',
                        text: 'Tidak Diketahui !!!',
                        position: 'top-right'
                    });
                }
            }
        });
    });
});