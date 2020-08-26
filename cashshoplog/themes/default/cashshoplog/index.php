<?php if (!defined('FLUX_ROOT')) exit;
/**
 * THIS WORK IS COPYRIGHTED
 * Cashshop Log
 * --------------------------------------------------------------------
 * Contact: 
 * Discord: єℓƒιη#9444
 */
?>

<h2>Cashshop Log</h2>
<?php foreach ($cashlogtotal as $_itemtotal): ?>
<?php endforeach; ?>

<div class="adjust">
<table class="horizontal-table">
	<tr>
		<th align="center"></th>
		<th>Item ID</th>
		<th>Nome do Item</th>
		<th>Quantidade</th>
		<th>Comprador</th>
		<th>Mapa</th>
		<th>Data</th>
	</tr>
	<?php if(!empty($cashlog)): foreach ($cashlog as $_item): ?>
	<tr>
		<td align="right">#<?php echo $_item->id; ?></td>
		<td><strong><a href="<?php echo $this->Path('/?module=item&action=view&id=') ?><?php echo $_item->nameid;?>">(<?php echo $_item->nameid;?>)</a></strong> </td>
		<td><?php echo $_item->name_japanese;?> </td>
		<td align="center"><?php echo $_item->qnt; ?></td>
		<td><strong><a href="<?php echo $this->Path('/?module=account&action=view&id=') ?><?php echo $_item->account_id; ?>"><?php echo $_item->account_id; ?></a> <strong>(<?php echo $_item->name; ?>)</strong></strong></td>
		<td><strong><?php echo $_item->map; ?></strong></td>
		<td><?php echo $_item->date; ?></td>
		
	</tr>
	<?php endforeach; endif; ?>
</table>
</div>
