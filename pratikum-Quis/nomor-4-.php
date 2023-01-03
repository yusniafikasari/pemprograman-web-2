<?php
$mahasiswa = array

(

array("nim"=>"123", "nama"=>"Andi"),

array("nim"=>"456", "nama"=>"Budi"),

array("nim"=>"789", "nama"=>"Wati")

);

            /* Tulis Code Anda di sini */
            foreach ($mahasiswa as $data_mahasiswa)
            {
                echo "<li> Nim ".$data_mahasiswa['nim']." Nama ".$data_mahasiswa['nama']."</li>";  
               
            }


?>