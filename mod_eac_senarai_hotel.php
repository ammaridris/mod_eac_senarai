<?php
defined('_JEXEC') or die('Restricted access');
$sqls = "SELECT UPPER(nama)nama,negeri,bintang FROM Hotel ORDER BY negeri, bintang DESC, nama";
$results = $conn->query($sqls);
$i=1;
?>
<table id="dtables" class="uk-table uk-table-hover uk-table-striped uk-table-bordered">
	<thead>
	<tr>
		<th>#</th>
		<th><?php echo JText::_( 'NAMAHOTEL' ); ?></th>
		<th><?php echo JText::_( 'BINTANG' ); ?></th>
	</tr>
	</thead>
	<?php while($rows = $results->fetch_assoc()) { ?>
	<tr>
		<td><?php echo $i?>.</td>
		<td><?php echo $rows['nama']; ?><br /><small><?php echo $rows['negeri']; ?></small></td>
		<td><?php echo $rows['bintang']; ?></td>
	</tr>
	<?php $i++; } ?>
</table>