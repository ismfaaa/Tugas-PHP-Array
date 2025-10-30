<!-- Perintah : 
Tampilkan daftar 5 nama buah menggunakan perulangan for.  
Output :  
Daftar Buah :  
1. Apel 
2. Jeruk 
3. Mangga 
4. Pisang 
5. Anggur -->

<?php 

    $buah = [
        "Apel",
        "Jeruk",
        "Mangga",
        "Pisang",
        "Anggur"
    ];
?>

    <?php for($i=0; $i<count($buah); $i++){ ?>
        <?php echo $buah[$i] . "<br>"; ?>
    <?php } ?>