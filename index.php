<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>#unHACK 2023 -- Bible Crossword Generator</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	
	<select class="btn" name="data" id="data">
		<?php
			require_once('./data.php');
			foreach ($data_sources as $val) {
				echo "<option value='{$val['ksource']}'>{$val['vsource']}</option>";
			}
		?>
		<option value="gpt">Generate Lainnya</option>
	</select> 
	
	  <button class="btn" id="btnCreate">Create</button>
	  <button class="btn" id="btnPlay">Play</button>

  <br/><br/>  

  <div class="center crossword" id="crossword"></div><br/>

  
  <div class="">
  		<div style="padding: 10px;">
			<button class="btn" id="btnShowAnswer">Show Answer</button>
			<button class="btn" id="btnHideAnswer">Hide Answer</button>
		</div>
		<div id="clue">
		<?php
		/*
		$jenis_data = (isset($_GET['data'])?$_GET['data']:1);
		$data = json_decode( file_get_contents("data/data{$jenis_data}.json"), true );

		foreach ($data as $item) {
			$word = $item['word'];
			$clue = $item['clue'];
			
			echo "<div class='line'>";
	    echo "  <input class='word' type='text' value='{$word}' />";
	    echo "  <input class='clue' value='{$clue}' />";
	    echo "</div>";

		}
		*/
		?>
		</div>
  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
