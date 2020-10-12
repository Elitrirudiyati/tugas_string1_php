<?php
echo "Tugas membuat string dengan nama masing-masing, buat kode user dengan kombinasi nama depan+nilai acak + nama belakang, nialai acak di bawah 100 <br>";
$nama="Eli Tri Rudiyati";
$kata=explode(" ", $nama);
echo "<br> <u>Jawaban : </u>";
echo "<br> Nama : ",$nama;
echo "<br> Kode user : ",strtolower ($kata[0].rand(1,100). $kata[2]);

?>