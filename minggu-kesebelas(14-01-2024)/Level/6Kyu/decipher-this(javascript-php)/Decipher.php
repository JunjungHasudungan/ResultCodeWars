<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6Kyu Soal Decipher this!</title>
</head>
<body>
    <?php
        function decipherThis($str) {
          // diawali dengan mengubah type string ke type array
          $baseArr = explode(' ', $str); // array(3) { [0]=> string(6) "72olle" [1]=> string(6) "103doo" [2]=> string(5) "100ya" } 
          
          foreach ($baseArr as $key => &$hasil) { // mengeluarkan seluruh value yang menjadi referensi atau sumber nilai 
          // memisahkan antara angka: 72 103 100, dengan string: olle doo ya 
            $angka = intval($hasil);
            $string =  str_replace($angka, '', $hasil); // string: olle doo ya 
            $strLeng =  strlen($string); // mengembalikan nilai jumlah item per-value: 4 3 2
            if ($strLeng >= 2) {
              $awal = substr($string, 0, 1); // mengambil 1 karakter dari string dari urutan awal: o d y 
              $akhir = substr($string,-1,1); // mengambil 1 karakter dari string dari urutan terakhir: e o a  
              $tengah = substr($string,1, $strLeng-2); // mengambil sisa karakter dari string dari tengah(2 1 0): l l o 
              $chr = chr($angka); // mengembalikan nilai Hgd  dari 72 103 100
              $hasil = $chr . $akhir . $tengah . $awal; // mengabungkan semau karaker berdasarkan urutan: Hellogoodday 
            }else{
              $hasil = chr($angka) . $string;
            }
          }
          // mengembalikan nilai 
          return implode(' ', $baseArr);
        }

        $str = '72olle 103doo 100ya';
        echo decipherThis($str);
    ?>

    <script src="string.js"></script>
</body>
</html>