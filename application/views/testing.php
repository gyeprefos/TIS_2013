<?php
include("header.php");
?>
	<div class="page-header">
		<h3>Unit testing</h3>
	</div>
	
<div class="row-fluid">
<div class="span8">
	<span class="testList">
		
	<p><strong>Blok 1 - 10 bodov</strong></p>
	<p draggable="true" class="testingSetup">
	OBJEKT o = OBJEKT(5,10);<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p draggable="true" class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p draggable="true" class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testingSetup">
	OBJEKT o = OBJEKT(10,20);<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.scitaj(),30);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.odcitaj(),-10);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<!--
	
	<p class="testingSetup">
	OBJEKT o = OBJEKT(5,10);
	<span class="btn-group pull-right"><a class="btn btn-mini" href="#">
		<a class="btn btn-mini" href="#"><i class="icon icon-arrow-down"></i></a>
		<a class="btn btn-mini" href="#"><i class="icon icon-arrow-up"></i></a>
		<a class="btn btn-mini" href="#"><i class="icon icon-trash"></i></a>
		<a class="btn btn-mini" href="#"><i class="icon icon-off"></i></a>
		
		</span>
	</p>
	<p class="testCase">
	testEqual(o.getSth(),5);
	<span class="btn-group pull-right"><a class="btn btn-mini" href="#">
		<a class="btn btn-mini" href="#"><i class="icon icon-arrow-down"></i></a>
		<a class="btn btn-mini" href="#"><i class="icon icon-arrow-up"></i></a>
		<a class="btn btn-mini" href="#"><i class="icon icon-trash"></i></a>
		<a class="btn btn-mini" href="#"><i class="icon icon-off"></i></a>
		
		</span>
	</p>-->
	
	<p class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testingSetup">
	OBJEKT o = OBJEKT(10,20);<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.scitaj(),30);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.odcitaj(),-10);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p></p>
	<p><strong>Blok 2 - 10 bodov</strong></p>
	<p class="testingSetup">
	OBJEKT o = OBJEKT(5,10);<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testingSetup">
	OBJEKT o = OBJEKT(10,20);<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.scitaj(),30);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.odcitaj(),-10);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>

	<p></p>
	<p><strong>Moj blok</strong></p>
	<p class="testingSetup">
	OBJEKT o = OBJEKT(5,10);<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.getSth(),5);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testingSetup">
	OBJEKT o = OBJEKT(10,20);<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.scitaj(),30);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p class="testCase">
	testEqual(o.odcitaj(),-10);
	<i class="icon icon-arrow-up pull-right"></i><i class="icon icon-arrow-down pull-right"></i><i class="icon icon-trash pull-right"></i><input type="checkbox" checked="checked" class="pull-right">
	</p>
	<p></p>
	
	</span>
	<a class="btn btn-warning" href="#">Ulozit test case</a>
	<div class="btn-group">
  <button class="btn btn-success">Spustit test case</button>
  <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li class=""><a href="#"><strong>na poslednom ulozenom subore</strong></a></li>
    <li class=""><a href="#">verzia 10-11-2013</a></li>
    <li class=""><a href="#">verzia 10-11-2013</a></li>
    <li class=""><a href="#">verzia 10-11-2013</a></li>
    <li class=""><a href="#">verzia 10-11-2013</a></li>
  </ul>
</div>
</div>
<div class="span4">
	<form>
		<label for="zadanieSelect">Unit testing pre zadanie:</label>
		<select id="zadanieSelect">
			<option>
				Zadanie 1 - Operatory
			</option>
			<option>
				Zadanie 2 - Premenne
			</option>
		</select><br>
	<label for="blockChoice">Pridat test to bloku:</label>
	<select id="blockChoice">
		<option disabled="disabled">Blok 1 - 10bodov</option>
		<option disabled="disabled">Blok 2 - 10bodov</option>
		<option selected="selected">Moj blok</option>
	</select>

	<label for="preTestCode">Kod spusteny pred testovanim</label>
	<textarea name="preTestCode" id="preTestCode" class="span12">
		//programovy kod pred testom
	</textarea>
	
	<div class="row-fluid">
		<div class="span6">
			
	<label for="testType">Druh testu</label>
	<select id="testType" class="span12">
		<option>rovnost</option>
		<option>nerovnost</option>
		<option>pravdivost</option>
		<option>nepravdivost</option>
	</select>
		</div>
		<div class="span6">
			
	<label for="returnType">Datovy typ</label>
	<select id="returnType" class="span12">
		<option>bool</option>
		<option>double</option>
		<option>int</option>
		<option>string</option>
	</select>
		</div>
	</div>
	<label for="expectedValue">Ocakavana hodnota</label>
	<input type="text" id="expectedValue" class="span12">
	<label for="testCode">Testovany kod</label>
	<input type="text" id="testCode" class="span12">
	<a class="btn btn-success" href="#"><i class="icon-white icon-plus"></i> Pridat test</a>
	</form>
	<img src="assets/img/trash.png" alt="trash"/>
</div>
</div>
<?php
include("footer.php");
?>