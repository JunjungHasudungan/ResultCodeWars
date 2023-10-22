<?php
    /* Aturan main:
        (buat menjadi 3 element)
        box -> {} =  1 box harus ada 10 buah
        pallet -> [] = 1 palet harus 5 box / 50 buah
        bag -> () = sisa dari nilai input

        1 rak harus memiliki ukuran yang sama, bila nilai dari ke-3 setiap element isi dengan -
        contoh: -> 63a21b
        '63a' : 50 * 1 + 10 * 1 + 3 -> '[a]{a}(aaa)' 
        '21b' : 50 * 0 + 10 * 2 + 1 -> '{b}{b}(b)' 

        $a = "-(aaa)(b)"; // jumlah karakter 9
        $b = "{a}{b}{b}"; // jumlah karakter 9
        $c = "------[a]"; // jumlah karakter 9

        hasil output:  [
            '-(aaa)(b)', 
            '{a}{b}{b}',
            '------[a]'
            ]
    */

    $arr = ['63a21b'];

    function fruit_pack($orders) {

        foreach ($orders as $value) {
            $rakKotak = '';
            $rakPalet = '';
            $rakTas = '';
            $patern = "/[0-9]+[a-z]?/"; // bahan pola untuk mencocokkan subjek bertipe string

            preg_match_all(
                "/[0-9]+[a-z]?/",  // meletakkan pola yang akan dicocokkan kedalam subject
                $value,  // menjadi sumber subjek yang akan dicocokkan karena telah dikeluarkan dari array
                $matches // nilai yang telah dicocokkan dari pola yang diberikan dan mengembalikan bertipe array
            ); 
            // mengeluarkan nilai array index 0 yang dari awal sudah dicocokkan 
            foreach ($matches[0] as $strVal) { // merubah nilai array kedalam sebuah string
                $castedInteger = (int) $strVal; // mengubah nilai string kedalam nilai int -> 63 - 21

                // merubah karakter 
                $newString = str_replace( // ab
                    $castedInteger, // sebuah nilai parameter yang akan dimodifikasi nanti
                     '',  // mengubah / menambahkan karakter koma didalam nilai yang akan diubah
                     $strVal // subjek yang akan diganti nilaina
                    );
                    // melakukan pembagian dari jumlah nilai $castedInteger dengan 50 kedalam 1 palet 
                    $jumlahPalet = ($valPallet = intdiv($castedInteger, 50)) ? // 50 merupakan jumlah buah dalam 1 palet -> [a]
                    // melakukan perulangan kata sebanyak nilai hasil bagi yang ada di valPallet
                    str_repeat('[' . $newString . ']', $valPallet) : 
                    ''; // kalau tidak dapat dengan 50 beri nilai kosong / empty
                
                    $jumlahBox = ($valBox = intdiv($castedInteger % 50, 10)) ? // melakukan pembagian dari sisa hasil pembagian $pallet -> {a}{b}{b}
                    str_repeat('{'. $newString.'}', $valBox) : // ulang kata / string sebanyak nilai hasil $valetBox
                    ''; // kalau tidak dapat dibagi beri nilai kosong / empty

                    $jumlahBag = ($valBag = $castedInteger % 10 ) ? // melakukan sisa bagi 10 untuk masuk tas -> (aaa)(b)
                   '(' . str_repeat($newString , $valBag) . ')' : // kalau bisa dibagi, ulang karaker sebanyak jumlah $valBag
                   ''; // kalau tidak dapat dibagi beri nilai kosong / empty

                   $rakPalet .= $jumlahPalet; // memasukkan jumlah palet kedalam rak palet
                   $rakKotak .= $jumlahBox; // memasukkan jumlah box kedalam rak Kotak 
                   $rakTas .= $jumlahBag; // memasukkan jumlah tas kedalam rak Tas
            }
              //    mengecek ukuran yang paling besar dan yang paling kecil dan mengembalikan (memberikan) nilai paling besar
                    $maxLen = max([strlen($rakPalet), strlen($rakKotak), strlen($rakTas)]); // 9

              /* menambahkan karakter berdasarkan jumlah panjang karakter yang dicapai, 
              pada subjek, karakter yang akan ditambahkan dan dimemposisikan karakter yang akan ditempel*/
                $result[] = [
                    str_pad($rakTas, $maxLen, '-', STR_PAD_LEFT), // -(aaa)(b)
                    str_pad($rakKotak, $maxLen, '-', STR_PAD_LEFT), // {a}{b}{b}
                    str_pad($rakPalet, $maxLen, '-', STR_PAD_LEFT), // ------[a]
                ];
        }

        return $result;
    }

      fruit_pack($arr);