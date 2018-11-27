<?php 
$addonq = ''; 
if(get("q")!=""){ $addonq = " WHERE nama LIKE '%".get('q')."%'"; } 
$hasil = $koneksi->prepare("SELECT * FROM artikel ".$addonq. " ORDER BY id DESC");
 $hasil->execute(); 
 $data = $hasil->fetchAll();
 ?> 
 <a class="btn pull-right" href="index.php?p=sekolah&m=add">Tambah Baru Artikel</a> 
 <h2>Bl0g</h2> 
 <div style="clear:both;width:200px;margin-right:12px;" class="pull-right"> 
 	<form action="index.php?p=sekolah&m=search"> 
 		<input autocomplete="off" type="hidden" name="p" value="sekolah"> 
 		<input autocomplete="off" type="text" name="q" placeHolder="Type and enter to search" value="<?php echo (get("q"));?>"> 
	</form> 
</div> 
<div><?php echo get('q')!=""?"hasil pencarian untuk '".(get('q'))."'": "";?></div>  
<div style="clear:both">&nbsp;</div>
 <table class="data"> 
 	<thead> 
 		<tr> 
 			<th>NO</th>
 			<th>Judul</th> 
 			<th>Konten Text</th> 
 			<th>Nama Penulis</th> 
 			<th colspan="4">Action</th>
		</tr> 
	</thead> 
	<tbody> 
		<?php $i = 1; 
		foreach ($data as $key) { 
			?> 
			<tr>
				 	<td><?php echo $i;?></td> 
				 	<td><?php echo $key['judul'];?></td>
				 	<td><?php echo $key['konten'];?></td>
				 	<td><?php echo $key['penulis'];?></td>
				 	<td><a href="index.php?p=sekolah&m=edit&id=
				 	<?php echo $key['id'];?>"Ubah"</a></td>
				 	<td><a onclick="return confirm('Hapus Data <?php echo $key['jududl'];?>')"
				 		href="proses/sekolah/hapus.php?id=
				 	<?php echo $key['id'];?>">Hapus</a></td>
			</tr>
		<?php
		$i++;
		}
		?>
	</tbody>
</table>			 	
