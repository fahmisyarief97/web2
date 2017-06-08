<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Penulis</th>
		</tr>
	</thead>
	<tbody>
 <?php foreach ($isi_buku as $ib) { ?>
		<tr>
			<td>1</td>
			<td><?= $ib['No'] ?></td>
			<td><?= $ib['Judul'] ?></td>
			<td><?= $ib['Penulis'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>