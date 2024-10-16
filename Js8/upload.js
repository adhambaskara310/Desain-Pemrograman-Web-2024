$(document).ready(function() {
    // Ketika dokumen HTML sudah siap (setelah semua elemen dimuat)
    $('#file').change(function() {
        // Ketika ada perubahan pada elemen dengan ID 'file' (input file)
        if (this.files.length > 0) {
            // Jika ada file yang dipilih
            $('#upload-button').prop('disabled', false).css('opacity', 1);
            // Aktifkan tombol unggah dan ubah opacity menjadi 1 (tampil normal)
        } else {
            // Jika tidak ada file yang dipilih
            $('#upload-button').prop('disabled', true).css('opacity', 0.5);
            // Nonaktifkan tombol unggah dan kurangi opacity menjadi 0.5 (tampil redup)
        }
    });

    $('#upload-form').submit(function(e) {
        // Ketika formulir dengan ID 'upload-form' disubmit
        e.preventDefault(); // Cegah pengiriman formulir secara default

        var formData = new FormData(this);
        // Buat objek FormData untuk menyimpan data formulir (termasuk file)

        $.ajax({
            type: 'POST',
            url: 'upload_ajax.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#status').html(response);
                // Jika pengiriman data berhasil, tampilkan respons di elemen dengan ID 'status'
            },
            error: function() {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
                // Jika terjadi kesalahan, tampilkan pesan error di elemen dengan ID 'status'
            }
        });
    });
});