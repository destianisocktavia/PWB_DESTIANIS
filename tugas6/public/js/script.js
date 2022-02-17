
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
     $('#judulModal').html('Ubah Data Mahasiswa');
     $('.modal-footer button[type=submit]').html('Ubah Data');
     $('.modal-body form').attr('action', 'http://localhost/pertemuan_1/tugas6/public/mahasiswa/ubah');
     const id = $(this).data('id');
     $.ajax({
     url: 'http://localhost/pertemuan_1/tugas6/public/mahasiswa/getubah', 
     data: { id: id },
     method: 'post',
     datatype: 'json',

         success: function (data) {
            var dataJson = JSON.parse(data);
         $('#nama').val(dataJson.nama);
         $('#nim').val(dataJson.nim);
         $('#email').val(dataJson.email);
         $('#jurusan').val(dataJson.jurusan);
         $('#id').val(dataJson.id);
         }
     });
    });
});