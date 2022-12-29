<html>
    <head>
        <title>Pemrosesan File</title>
    </head>
    <body>
    <h2> Penulisan Data</h2>
    <?php
    $file='D:\\salwa.txt';
    $fo=fopen($file, 'w');
    $data='Tes fwrite OK in'.$file.' !';
    fwrite($fo,$data);
    fclose($fo);
    echo("Cek isi file di <b> $file <b/> !");
    ?>
</body>
</html>