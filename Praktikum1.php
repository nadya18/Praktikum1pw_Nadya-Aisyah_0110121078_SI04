<?php
 $ns1 = ['id'=>1,'nim'=>'0110121078','uts'=>86,'uas'=>95,'tugas'=>90];
 $ns2 = ['id'=>2,'nim'=>'0110121079','uts'=>80,'uas'=>75,'tugas'=>90];
 $ns3 = ['id'=>3,'nim'=>'0110121080','uts'=>70,'uas'=>85,'tugas'=>70];
 $ns4 = ['id'=>4,'nim'=>'0110121081','uts'=>60,'uas'=>88,'tugas'=>80];

 $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

 ?>

 <h3>Daftar Nilai Siswa</h3>
 <table border="1" width="100%">
 <thead>
 <tr bgcolor="purple">
 <th>No</th><th>NIM</th><th>UTS</th>
 <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor = 1;
 foreach($ar_nilai as $ns){
 echo '<tr align="center" bgcolor="pink"><td>'.$nomor.'</td>';
 echo '<td>'.$ns['nim'].'</td>';
 echo '<td>'.$ns['uts'].'</td>';
 echo '<td>'.$ns['uas'].'</td>';
 echo '<td>'.$ns['tugas'].'</td>';
 $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
 echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
 echo '<tr/>';
 $nomor++;
 }
 ?>
 </tbody>
 </table>