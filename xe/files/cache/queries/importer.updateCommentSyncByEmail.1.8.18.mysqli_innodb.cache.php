<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("updateCommentSyncByEmail");
$query->setAction("update");
$query->setPriority("");

$query->setColumns(array(
new UpdateExpressionWithoutArgument('`comments`.`member_srl`', '`member`.`member_srl`')
));
$query->setTables(array(
new Table('`xe_comments`', '`comments`')
,new Table('`xe_member`', '`member`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithoutArgument('`comments`.`email_address`','`member`.`email_address`',"equal")))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>