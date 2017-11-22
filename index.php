<?php

function showCalculatorForm($operand_1, $operator, $operand_2, $answer) {
	$calulator_form = "
<form method='post'>
<input type='text' name='operand_1' value=$operand_1>
<input type='text' name='operator' value=$operator>
<input type='text' name='operand_2' value=$operand_2></br>
<input type='text' name='answer' value=$answer></br>
<input type='submit' name='n' value=1>
<input type='submit' name='n' value=2>
<input type='submit' name='n' value=3></br>
<input type='submit' name='n' value=4>
<input type='submit' name='n' value=5>
<input type='submit' name='n' value=6></br>
<input type='submit' name='n' value=7>
<input type='submit' name='n' value=8>
<input type='submit' name='n' value=9></br>
<input type='submit' name='n' value=0></br>
<input type='submit' name='plus' value='+'></br>
<input type='submit' name='minus' value='-'></br>
<input type='submit' name='multiply' value='*'></br>
<input type='submit' name='divide' value='/'>
<input type='submit' name='equals' value='='>
<p><a href=''>Reset</a></p>
</form>";
	echo $calulator_form;
}

If ($_SERVER['REQUEST_METHOD'] != 'POST')	{
$operand_1 = "";
$operator = "";
$operand_2 = "";
$answer = "";

showCalculatorForm($operand_1, $operator, $operand_2, $answer);

} else {
	
$operand_1 = $_POST['operand_1'];
$operator = $_POST['operator'];
$operand_2 = $_POST['operand_2'];
$answer = $_POST['answer'];


//this needs sorting. I am trying to enable numbers > 9 in operand_1...
if($_POST['operator']=="") {
if (isset($_POST['n'])) {
$operand_1 = $_POST['n'];
}
}

if($_POST['operator']=="" AND $_POST['operand_1']!="") {
	if (isset($_POST['n'])) {
	$operand_1 = $operand_1 * 10 + $_POST['n'];
}
}

if($_POST['operand_1']!="") {
if (isset($_POST['plus'])) {
$operator = $_POST['plus'];
}
if (isset($_POST['minus'])) {
$operator = $_POST['minus'];
}
if (isset($_POST['multiply'])) {
$operator = $_POST['multiply'];
}
if (isset($_POST['divide'])) {
$operator = $_POST['divide'];
}
}

if($_POST['operator']!="") {
if (isset($_POST['n'])) {
$operand_2 = $_POST['n'];
}
}

if($_POST['operator']!="" AND $_POST['operand_2']!="") {
	if($operator=="+") {
		$answer = $_POST['operand_1'] + $_POST['operand_2'];
	}
	if($operator=="-") {
		$answer = $_POST['operand_1'] - $_POST['operand_2'];
	}
	if($operator=="*") {
		$answer = $_POST['operand_1'] * $_POST['operand_2'];
	}
	if($operator=="/") {
		$answer = $_POST['operand_1'] / $_POST['operand_2'];
	}
}

showCalculatorForm($operand_1, $operator, $operand_2, $answer);

}