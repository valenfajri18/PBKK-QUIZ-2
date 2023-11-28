<!DOCTYPE html>
<html>
    <body>

        <h2>Tambah Film</h2>

        <form action="<?= base_url('/add');?>" method="post" enctype="multipart/form-data">

            <label for="namafilm">Nama Film:</label><br>
            <input type="text" id="namafilm" name="namafilm" ><br>

            <label for="poster">Poster:</label><br>
            <input type="text" id="poster" name="poster"><br>

            <!-- <label for="poster">Poster:</label><br>
            <input type="file" id="poster" name="poster"><br> -->

            <label for="deskripsi">Deskripsi:</label><br>
            <input type="text" id="deskripsi" name="deskripsi" ><br>

            <label for="genre">Genre:</label><br>
            <input type="text" id="genre" name="genre" ><br>

            <label for="durasi">Durasi:</label><br>
            <input type="text" id="genre" name="durasi" ><br>
            
            <input type="submit" value="Tambah Film">
        </form> 

    </body>
</html>