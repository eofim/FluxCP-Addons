<?php if (!defined('FLUX_ROOT')) exit;
/**
 * THIS WORK IS COPYRIGHTED
 * Cashshop Log
 * --------------------------------------------------------------------
 * Contact: 
 * Discord: єℓƒιη#9444
 * Edit by Orce (17/05/2023)
 */
?>

<h2>Cashshop Log</h2>
<?php foreach ($cashlogtotal as $_itemtotal): ?>
<?php endforeach; ?>

<div class="adjust">
	<table class="horizontal-table">
		<tr align="center">
			<th></th>
			<th>Item ID</th>
			<th>Nome do Item</th>
			<th>Quantidade</th>
			<th>Comprador</th>
			<th>Mapa</th>
			<th>Data</th>
		</tr>
		<?php if(!empty($cashlog)): foreach ($cashlog as $_item): ?>
		<tr align="center">
			<td>#<?php echo $_item->id; ?></td>
			<td><strong>(<?php echo $this->linkToItem($_item->nameid, $_item->nameid); ?>)</strong></td>
			<td><?php echo $_item->name_japanese;?> </td>
			<td><?php echo $_item->qnt; ?></td>
			<td><strong><?php echo $this->linkToAccount($_item->account_id, $_item->account_id) ?><strong> (<?php echo $_item->name; ?>)</strong></strong></td>
			<td><strong><?php echo $_item->map; ?></strong></td>
			<td><?php echo $_item->date; ?></td>
		</tr>
		<?php endforeach; endif; ?>
	</table>
</div>
