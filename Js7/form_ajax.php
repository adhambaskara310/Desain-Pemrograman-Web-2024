<!DOCTYPE html>
<html>
<head>
  <title>Contoh Form dengan PHP dan jQuery</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h2>Contoh Form</h2>
  <form id="myForm">
    <label for="buah">Pilih Buah: </label>
    <select name="buah" id="buah">
      <option value="apel">Apel</option>
      <option value="pisang">Pisang</option>
      <option value="mangga">Mangga</option>
      <option value="jeruk">Jeruk</option>
    </select>
    <input type="submit" value="Submit">
  </form>
  <div id="hasil"> </div>
</body>
<script>
  $(document).ready(function() {
  $("#myForm").submit(function(e) {
    e.preventDefault(); // Mencegah pengiriman form secara default

    var formData = $(this).serialize();

    $.ajax({
      url: "form_lanjut.php", // Ganti dengan nama file PHP yang sesuai
      type: "POST",
      data: formData,
      success: function(response) {
        $("#hasil").html(response); // Tampilkan hasil dari server di div "hasil"
      }
    });
  });
});
</script>
</html>