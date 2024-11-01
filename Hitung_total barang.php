<?php 
    function totalbelanja($totalhargabarang) {
        if ($totalhargabarang > 100) {
            $hasil = $totalhargabarang - ($totalhargabarang * 0.1);
            echo "Jadi, jika memenuhi syarat totalnya akan mendapatkan 10% adalah $hasil ";
        }
        elseif ($totalhargabarang <= 100) {
            echo "Jadi totalnya adalah $totalhargabarang ";
        }
        else {
            echo "coba cek lagi yaa";
        }
    };
    totalbelanja(120);
    echo "<br>";
    echo "<br>";
    totalbelanja(100);
?>