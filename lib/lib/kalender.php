<style>
.kal
{
	background:#FF0;
}
.head
{
	color:#6C0;
	background: #B1E401;
}
.iss
{
	color: #000;
	font-weight:bold;
	background: #9CDE01;
}
.nw
{
	color: #FFF;
	font-weight:bold;
	background: #FF0080;
}

</style>
<?php 
//untuk ngambil tanggal hari ini, pake fungsi ini
$date =time () ; 
//Selanjutnya, memisahkan hari, bulan, dan tahun
$day = date('d', $date) ; 
$month = date('m', $date) ; 
$year = date('Y', $date) ;
//disini bakalan lahir tanggal pertama diawal bulan
$first_day = mktime(0,0,0,$month, 1, $year) ; 
$title = date('F', $first_day) ; 
//fungsinya ngeliat hari pertama apakah dia hari minggu ato bukan
$day_of_week = date('D', $first_day) ; 
//klo kode diatas hari minggu, nanti ada space di depan tanggal 1
switch($day_of_week){ 
case "Sun": $blank = 0; break; 
case "Mon": $blank = 1; break; 
case "Tue": $blank = 2; break; 
case "Wed": $blank = 3; break; 
case "Thu": $blank = 4; break; 
case "Fri": $blank = 5; break; 
case "Sat": $blank = 6; break; 
}
//nyari berapa hari dalam sebulan
$days_in_month = cal_days_in_month(0, $month, $year) ; 
//ini heading tanggal
echo "<table class=kal border=0 width=220>";
echo "<tr class=head><th colspan=7> $title $year </th></tr>";
echo "<tr class=head><td width=42>Mig</td><td width=42>Sen</td><td 
width=42>Sel</td><td width=42>Rab</td><td width=42>Kam</td><td 
width=42>Jum</td><td width=42>Sab</td></tr>"; 
//ini ngitung berapa hari dalam seminggu (7...) -,- 
$tgl=date('d');
$day_count = 1; 
echo "<tr class=iss>"; 
//kan diatas ada fungsi blank days nah disini diolah lagi 
while ( $blank > 0 ) 
{ echo "<td></td>"; 
$blank = $blank-1; 
$day_count++; 
} //huft ini buat nge-set hari pertama jadi angka (tanggal) 1 
$day_num = 1; 
//ngitung hari 
while ( $day_num <= $days_in_month ) 
{ 
	if ($day_num==$tgl) {
	echo "<td class=nw> $day_num </td>"; } else {
	echo "<td class=iss> $day_num </td>"; } 
$day_num++; 
$day_count++; 
//buat baris baru setiap minggun habis 
if ($day_count > 7) 
{ 
echo "</tr><tr class=iss>"; 
$day_count = 1; 
} 
} 
//selesai :D 
while ( $day_count >1 && $day_count <=7 ) 
{ 
echo "<td> </td>"; 
$day_count++; 
} 
echo "</tr></table>"; 
?>