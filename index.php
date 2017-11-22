<?php

$operand_1 = "";
$operator = "";
$operand_2 = "";

$calulator_form = "
<form method='post'>
<input type='text' name='operand_1' value=$operand_1></br>
<input type='text' name='operator' value=$operator></br>
<input type='text' name='operand_2' value=$operand_2></br>
<label value='1'><input type='text' name='1' value=1></label>
<label value='2'><input type='text' name='2' value=2></label>
<label value='3'><input type='text' name='3' value=3></label></br>
<label value='4'><input type='text' name='4' value=4></label>
<label value='5'><input type='text' name='5' value=5></label>
<label value='6'><input type='text' name='6' value=6></label></br>
<label value='7'><input type='text' name='7' value=7></label>
<label value='8'><input type='text' name='8' value=8></label>
<label value='9'><input type='text' name='9' value=9></label></br>
<label value='0'><input type='text' name='0' value=0></label></br>
<label value='+'><input type='text' name='plus' value='+'></label></br>
<label value='-'><input type='text' name='minus' value='-'></label></br>
<label value='*'><input type='text' name='multiply' value='*'></label></br>
<label value='/'><input type='text' name='divide' value='/'></label>
</form>";

echo $calulator_form;
