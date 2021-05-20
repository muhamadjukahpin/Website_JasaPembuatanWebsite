$(document).ready(function () {
    // Sweet Alert
    const flashdata = $('.flashdata').data('flashdata');
    if (flashdata == 'success-login') {
        Swal.fire("Success", "You have successfully login", "success");
    } else if (flashdata == 'success-delete') {
        Swal.fire("Success", "You have successfully deleted data", "success");
    } else if (flashdata == 'success-edit') {
        Swal.fire("Success", "You have successfully edited data", "success");
    } else if (flashdata == 'success-add') {
        Swal.fire("Success", "You have successfully added data", "success");
    }

    $('.button-delete').on('click', function (e) {
        e.preventDefault();
        const action = $(this).attr('action');
        Swal.fire({
            title: 'Are you sure?',
            text: "You will delete this data",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                // $('.button-delete').unbind('click');
                // const input = '<input type="hidden" name="_method" value="DELETE">';
                // location.href(action,input);
            }
        })
    })

    // Data Tabel
    $('#table_id').DataTable();

    const ckeditor = document.querySelector('.ckeditor');
    if (ckeditor) {
        // CkEditor
        ClassicEditor
            .create(document.querySelector('.ckeditor'), {
                toolbar: {
                    items: [
                        'heading',
                        'bold',
                        'italic',
                        'link',
                        'bulletedList',
                        'numberedList',
                        '|',
                        'indent',
                        'outdent',
                        '|',
                        'imageUpload',
                        'blockQuote',
                        'insertTable',
                        'mediaEmbed',
                        'undo',
                        'redo',
                        'CKFinder'
                    ]
                },
                language: 'en',
                image: {
                    toolbar: [
                        'imageTextAlternative',
                        'imageStyle:full',
                        'imageStyle:side'
                    ]
                },
                table: {
                    contentToolbar: [
                        'tableColumn',
                        'tableRow',
                        'mergeTableCells'
                    ]
                },
                licenseKey: '',

            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error(
                    'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                );
                console.warn('Build id: k2i30chx32nf-46e9y3p1okw0');
                console.error(error);
            });
    }


    const img = document.querySelector('#img');
    if (img) {
        img.addEventListener('change', function () {
            let imgPreview = document.querySelector('.img-preview');
            const labelImg = document.querySelector('.custom-file-label');
            labelImg.textContent = img.files[0].name;
            const fileImg = new FileReader();
            fileImg.readAsDataURL(img.files[0]);

            fileImg.onload = function (e) {
                imgPreview.src = e.target.result;
            }
        });
    }
});