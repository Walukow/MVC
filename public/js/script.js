$(function() {
    $('.tmblTambah').on('click', function() {
        $('#judulModal').html('Tambah Data Siswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalEdit').on('click', function() {
        $('#judulModal').html('Edit Data Siswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/edit')
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/phpmvc/public/siswa/getedit',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#nama').val(data.nama);
                $('#umur').val(data.umur);
                $('#jurusan').val(data.jurusan);
            }
        });
    });
});

