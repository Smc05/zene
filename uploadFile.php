<?php
$FileName="media/musics/" . basename($_FILES['FileInput']['name']);
move_uploaded_file($_FILES['FileInput']['tmp_name'],$FileName);
<<<<<<< HEAD
?>
<html><body><h1 style="font-size:5rem">A Feltöltés sikeres<h1></body></html>
<style>
    body {
        background-image: url('media/background.jpg');
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 100%;
        display:flex;
        align-items:center;
        text-align:center;
    }
    h1{
        text-align:center;
    }
</style>
<script>window.location.href='https://smcmusicwebsite.000webhostapp.com/index.html'</script>
=======
echo("siker");
header("Location: https://github.com/Smc05/musicapp");
exit();

?>
>>>>>>> 950afcb800fbc1a827d7a740908adecba42f0193
