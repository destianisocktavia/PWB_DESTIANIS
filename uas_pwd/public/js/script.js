$(function () {
     $('.tombolTambahData').on('click', function () {
     $('#judulModal').html('Tambah Data Mahasiswa');
     $('.modal-footer button[type=submit]').html('Tambah Data');
     $('#id').val('');
     $('#nama').val('');
     $('#nim').val('');
     $('#email').val('');
     $('#jurusan').val('');
    });
 $('.tampilModalUbah').on('click', function () {
     $('#judulModal').html('Ubah Data Stock');
     $('.modal-footer button[type=submit]').html('Ubah Data');
     $('.modal-body form').attr('action', 'http://localhost/uas_lks/public/stock/ubah');
     const id = $(this).data('id');
     $.ajax({
     url: 'http://localhost/uas_lks/public/Stock/getubah', 
     data: { id: id },
     method: 'post',
     datatype: 'json',

         success: function (data) {
            var dataJson = JSON.parse(data);
         $('#kelas').val(dataJson.kelas);
         $('#jumlah').val(dataJson.jumlah);
         $('#harga').val(dataJson.harga);
         $('#id').val(dataJson.id);
         }
     });
    });
});