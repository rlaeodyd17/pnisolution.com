<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateDocumentSyncByEmail");
$query->setAction("update");
$query->setPriority("");

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`documents`.`member_srl`', '`member`.`member_srl`')
));
$query->setTables(array(
new Table('`xe_documents`', '`documents`')
,new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`documents`.`email_address`','`member`.`email_address`',"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>