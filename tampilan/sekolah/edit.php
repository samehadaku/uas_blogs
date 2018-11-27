<?php 
$hasil = $koneksi->prepare("SELECT * FROM artikel WHERE `id` = '".get('id')."'"); 
$hasil->execute(); 
$data = $hasil->fetch(PDO::FETCH_ASSOC); 
?> 
<form method="POST" action="proses/sekolah/update.php"
 	enctype="multipart/form-data"> 
	<input type="hidden" name="id" value="<?php echo $data['id'];?>"> 
	<table>
		<tr>
			<td>Judul</td> 
			<td><input type="text" name="Jududl" value=" <?php echo $data['Jududl'];?>"></td> 
		</tr> 
		<tr> 
			<td>konten</td> <td><input type="text" name="konten" value=" <?php echo $data['konten'];?>"></td> 
		</tr>
		<tr> 
			<td></td>
			<td><button type="submit">Update</button></td> </tr> </table> </form>