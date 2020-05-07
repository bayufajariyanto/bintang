<form method="post" action="">
    <input type="number" name="tinggi" placeholder="Masukkan tinggi segitiga">
    <button type="submit">Gas!</button>
</form>

<?php
if(isset($_POST['tinggi'])){
    $tinggi = $_POST['tinggi'];
}else{
    $tinggi = 0;
}

$angka = 1;
for($i=$tinggi;$i>=1;$i--){
    for ($j=$i; $j<=$tinggi; $j++){
        echo "x";
    }
    
    for ($j=$angka; $j<$tinggi; $j++){
        echo "&nbsp;&nbsp;";
    }
    
    for ($j=$angka; $j<$tinggi-1; $j++){
        echo "&nbsp;&nbsp;";
    }

    for ($j=$i; $j<=$tinggi; $j++){
        if($i==1 && $j==$tinggi){
            break;
        }
        echo "x";
    }
    $angka++;
    echo "<br>";
}