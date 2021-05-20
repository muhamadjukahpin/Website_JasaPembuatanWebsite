$(document).ready(function () {
    const flashdata = $('.flashdata').data('flashdata');
    if (flashdata) {
        Swal.fire("Success", "You have successfully registered", "success");
    }
})