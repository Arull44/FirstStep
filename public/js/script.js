$(function() {

    $('.tombolTambahDataLayanan').on('click', function() {
        $('#myModalLabel').html('Tambah Data Layanan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama_layanan').val('');
        $('#deskripsi').val('');
        $('#harga').val('');
        $('#id_layanan').val('');
    });


    $('.tombolUbahDataLayanan').on('click', function() {
        
        $('#myModalLabel').html('Ubah Data Layanan');
        $('.modal-footer button[type=submit]').html('Simpan');
        $('.modal-body form').attr('action', 'http://localhost/websiteB/firstStep/public/admin/layanan/ubah');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/websiteB/firstStep/public/admin/layanan/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama_layanan').val(data.nama_layanan);
                $('#deskripsi').val(data.deskripsi);
                $('#harga').val(data.harga);
                $('#id_layanan').val(data.id_layanan);
                // console.log(data);
            }
        });
        
    });

});