<?php if (!defined('FLUX_ROOT')) exit;
/**
 * THIS WORK IS COPYRIGHTED
 * Cashshop Log
 * --------------------------------------------------------------------
 * Contact: 
 * Discord: єℓƒιη#9444
 * Edit by Orce (17/05/2023)
 */

	$this->loginRequired();

	$sqlclog = "SELECT `cashshop_log`.`id`, `cashshop_log`.`nameid`, `cashshop_log`.`qnt`, `cashshop_log`.`account_id`, `cashshop_log`.`map`, `cashshop_log`.`date`, ";
	$sqlclog .= "`char`.`account_id`, `char`.`char_id`, `char`.`name`, `item_db`.`name_japanese` ";
	$sqlclog .= "FROM `cashshop_log` LEFT JOIN `item_db` ON `item_db`.`id` = `cashshop_log`.`nameid` LEFT JOIN `char` ON `char`.`char_id` = `cashshop_log`.`char_id` ORDER BY `cashshop_log`.`id` DESC"; 
	$sthclog = $server->connection->getStatement($sqlclog);
	$sthclog->execute();
	$cashlog = $sthclog->fetchAll();
?>
