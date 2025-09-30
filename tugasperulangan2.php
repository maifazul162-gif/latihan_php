<?php
// daftar nilai beberapa orang
$data = [
    "maifa"   => 90,
    "Beril"   => 75,
    "Aidil"  => 55,
    "Azril"   => 45,
    "Talita"    => 30
];

echo "<h2>Contoh IF ELSE</h2>";

foreach($data as $nama => $nilai){
    echo $nama . " (Nilai: $nilai) = ";
    
    if($nilai >= 0 && $nilai <= 40){
        echo "Grade: E <br>";
    }
    elseif($nilai >= 41 && $nilai <= 50){
        echo "Grade: D <br>";
    }
    elseif($nilai >= 51 && $nilai <= 60){
        echo "Grade: C <br>";
    }
    elseif($nilai >= 61 && $nilai <= 79){
        echo "Grade: B <br>";
    }
    elseif($nilai >= 80 && $nilai <= 100){
        echo "Grade: A <br>";
    }
    else{
        echo "Nilai tidak valid <br>";
    }
}

echo "<h2>Contoh SWITCH</h2>";

// contoh nilai dipilih secara spesifik
$contohNilai = [100, 90, 80, 75, 60, 40];

foreach($contohNilai as $n){
    echo "Nilai yang dipilih $n = ";
    switch(true){
        case ($n >= 0 && $n <= 40):  echo "Grade E <br>"; break;
        case ($n >= 41 && $n <= 50): echo "Grade D <br>"; break;
        case ($n >= 51 && $n <= 60): echo "Grade C <br>"; break;
        case ($n >= 61 && $n <= 79): echo "Grade B <br>"; break;
        case ($n >= 80 && $n <= 100):echo "Grade A <br>"; break;
        default: echo "Nilai tidak valid <br>"; break;
    }
}
?>