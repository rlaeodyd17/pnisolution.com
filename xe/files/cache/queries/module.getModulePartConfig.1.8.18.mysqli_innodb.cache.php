<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("getModulePartConfig");
$query->setAction("select");
$query->setPriority("");

${'module13_argument'} = new ConditionArgument('module', $args->module, 'equal');
${'module13_argument'}->checkNotNull();
${'module13_argument'}->createConditionValue();
if(!${'module13_argument'}->isValid()) return ${'module13_argument'}->getErrorMessage();
if(${'module13_argument'} !== null) ${'module13_argument'}->setColumnType('varchar');

${'module_srl14_argument'} = new ConditionArgument('module_srl', $args->module_srl, 'equal');
${'module_srl14_argument'}->checkNotNull();
${'module_srl14_argument'}->createConditionValue();
if(!${'module_srl14_argument'}->isValid()) return ${'module_srl14_argument'}->getErrorMessage();
if(${'module_srl14_argument'} !== null) ${'module_srl14_argument'}->setColumnType('number');

$query->setColumns(array(
new SelectExpression('`config`')
));
$query->setTables(array(
new Table('`xe_module_part_config`', '`module_part_config`')
));
$query->setConditions(array(
new ConditionGroup(array(
new ConditionWithArgument('`module`',$module13_argument,"equal")
,new ConditionWithArgument('`module_srl`',$module_srl14_argument,"equal", 'and')))
));
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>