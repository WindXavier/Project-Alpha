<?php
    $organisasi = array(
        "keagamaan" => array(
            "ketua" => "rafat",
            "wakil" => "kokombit",
            "anggota" => "amin"
        ),
        "kebersihan" => array(
            "ketua" => "nadhij",
            "wakil" => "humam",
            "anggota" => "hakim"
        ),
        "kemanusiaan" => array(
            "ketua" => "bambang",
            "wakil" => "ikhsan"
        )
    );
    // print_r($organisasi);
            foreach ($organisasi as $key => $value) {
                $index = 1;
                $divisi = $key;
                foreach ($value as $key => $value) {
                    if(empty($value)){
                        echo $index.". "."Divisi ".$divisi." tidak mempunyai ".$key."<br>";                        
                    } else {
                        echo $index.". "."Divisi ".$divisi." mempunyai ".$key." dengan nama ".$value."<br>";
                    }
                    $index++;
                }
                echo "<br>";
            }
    
?>