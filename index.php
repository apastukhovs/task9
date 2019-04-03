<?
include_once 'libs/Helper.php';

$checkBoxName = 'Type of Sport';
$checkBoxList = ['Football', 'Basketball', 'Hockey'];
$checkBox = (new Helper())->getCheckBox($checkBoxName, $checkBoxList);

$list = ['Jack', 'Mike', 'Lopez', 'Riki', 'Tavi'];
$orderList = (new Helper())->getOrderedList($list);
$unOrderList = (new Helper())->getUnOrderedList($list);

$col = 3;
$row = 3;
$item = ['#', 'Name', 'Telephone'];
$table = (new Helper())->getTable($col, $row, $item);

$radioName = 'language';
$radioItems = ['English', 'French', 'Deutch', 'Ukrainian'];
$radioGroup = (new Helper())->getRadioButton($radioName, $radioItems);

$selectName = 'football team';
$selectList = ['Internazionale', 'West Ham', 'Atletico', 'Lazio'];
$dropDown = (new Helper())->getDropDown($selectName, $selectList);

$term = ['Coffee'=>'Black hot drink', 'Milk'=>'White cold drink'];
$dTerms = (new Helper())->getTermList($term);

include_once 'template/index.php';