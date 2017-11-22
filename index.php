<?php


If ($_SERVER['REQUEST_METHOD'] != 'POST')	{
$operand_1 = "";
$operator = "";
$operand_2 = "";

$calulator_form = "
<form method='post'>
<input type='text' name='operand_1' value=$operand_1></br>
<input type='text' name='operator' value=$operator></br>
<input type='text' name='operand_2' value=$operand_2></br>
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
</form>";
} else {
	
	
	
$operand_1 = "";
$operator = "";
$operand_2 = "";
$operand_1 = $_POST['n'];
$calulator_form = "
<form method='post'>
<input type='text' name='operand_1' value=$operand_1></br>
<input type='text' name='operator' value=$operator></br>
<input type='text' name='operand_2' value=$operand_2></br>
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
</form>";
}

echo $calulator_form;
