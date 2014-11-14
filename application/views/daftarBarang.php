<p> jadi nanti semua yang ada hubungannnya dengan front end, berada di view, tidak ada aturan untuk memberinamanya</p>

<h2> ini daftar barang </h2>
<table>
	<th>id</th>
	<th>Nama</th>
	<th>keterangan</th>
	<?php
			//karena yang diakses $data['barang'] cuma namanya
	foreach ($barang as $item) {
		echo "<tr>
					<td> $item[0] </td>
					<td> $item[1] </td>
					<td> $item[2] </td>
		</tr>";
	}
	?>
</table>