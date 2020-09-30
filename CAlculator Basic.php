<!DOCTYPE html>
<html>
<head>
	<title>Simple Calculator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Calculator Style.css">
	<script src="Base_Cal.js"></script>
</head>
<body>
	<h1>Simple Calculator</h1>
		
		<div id="calculator" class="calculator">

  		<button id="clear" class="clear">C</button>

  		<div id="viewer" class="viewer">0</div>

  			<section>
  			<button class="num" data-num="7">7</button>
  			<
  			</section>
  			<button class="num" data-num="8">8</button>
			<button class="num" data-num="9">9</button>
  			<button data-ops="plus" class="ops">+</button>

  			<button class="num" data-num="4">4</button>
  			<button class="num" data-num="5">5</button>
  			<button class="num" data-num="6">6</button>
  			<button data-ops="minus" class="ops">-</button>

  			<button class="num" data-num="1">1</button>
  			<button class="num" data-num="2">2</button>
  			<button class="num" data-num="3">3</button>
 			<button data-ops="times" class="ops">*</button>

  			<button class="num" data-num="0">0</button>
  			<button class="num" data-num=".">.</button>
  			<button id="equals" class="equals" data-result="">=</button>
  			<button data-ops="divided by" class="ops">/</button>
		</div>

		<button id="reset" class="reset">Reset</button>
</body>
</html>