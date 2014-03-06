<html>
    <form method='post' enctype='multipart/form-data'><br>
        <input type='file' name='foto' value='Cadastrar foto'>
        <input type='submit' name='submit'>
    </form>
    <?php
    include "upload.php";

    if ((isset($_POST["submit"])) && (!empty($_FILES['foto']))) {
        $upload = new Upload($_FILES['foto'], 1000, 800, "fotos/");
        echo $upload->salvar();
    }
    ?>
</body>
</html>