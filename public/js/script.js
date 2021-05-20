$(document).ready(function () {
    // Animate Scroll
    $('.scroll-page').on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        var elementHref = $(href);
        $('body,html').animate({
            scrollTop: elementHref.offset().top - 55
        }, 800, 'swing');

    });

    // Navbar Link Active
    $('.navbar-collapse ul li a.nav-link').on('click', function () {
        $('li a.nav-link').removeClass('active');
        $(this).addClass('active');
    });


    // flashdata - Sweet Alert
    const flash_data = $('.flashdata').data('flashdata');
    if (flash_data == 'success-send') {
        Swal.fire("Berhasil", "Pesan berhasil terkirim", "success");
    } else if (flash_data == 'failed-send') {
        Swal.fire("Gagal", "Pesan gagal terkirim", "error");
    } else if (flash_data == 'success-logout') {
        Swal.fire("Success", "You were success logout", "success");
    }

});