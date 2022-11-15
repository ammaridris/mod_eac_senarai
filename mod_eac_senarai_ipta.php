<?php
defined('_JEXEC') or die('Restricted access');
$sqls = "SELECT nama FROM ipta ORDER BY nama";
$results = $conn->query($sqls);
$i=1;
?>
<table id="dtables" class="uk-table uk-table-hover uk-table-striped uk-table-bordered">
	<thead>
	<tr>
		<th>#</th>
		<th><?php echo JText::_( 'NAMAIPTA' ); ?></th>
	</tr>
	</thead>
	<?php while($rows = $results->fetch_assoc()) { ?>
	<tr>
		<td><?php echo $i?>.</td>
		<td><?php echo $rows['nama']; ?></td>
	</tr>
	<?php $i++; } ?>
</table>