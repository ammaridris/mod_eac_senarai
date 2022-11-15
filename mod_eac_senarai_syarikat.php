<?php
defined('_JEXEC') or die('Restricted access');
$sqls = "SELECT UPPER(nama)nama,industri FROM Syarikat ORDER BY nama";
$results = $conn->query($sqls);
$i=1;
?>
<table id="dtables" class="uk-table uk-table-hover uk-table-striped uk-table-bordered">
	<thead>
	<tr>
		<th>#</th>
		<th><?php echo JText::_( 'NAMASYARIKAT' ); ?></th>
		<th><?php echo JText::_( 'INDUSTRI' ); ?></th>
	</tr>
	</thead>
	<?php while($rows = $results->fetch_assoc()) { ?>
	<tr>
		<td><?php echo $i?>.</td>
		<td><?php echo $rows['nama']; ?></td>
		<td><?php echo $rows['industri']; ?></td>
	</tr>
	<?php $i++; } ?>
</table>