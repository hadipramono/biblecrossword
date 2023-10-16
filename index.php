<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Crossword Generator</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
	<form action="." method="GET">
		<select name="data" id="data">
		  <option value="1">TTS 1</option>
		  <option value="2">TTS 2</option>
		  <option value="3">TTS 3</option>
		  <option value="gpt">Generate dg ChatGPT on the fly</option>
		</select> 
	
	  <button class="btn" id="btnCreate" type="submit">Create</button>
	  <button class="btn" id="btnPlay">Play</button>
	</form>
  <br/><br/>  

  <div class="center crossword" id="crossword"></div><br/>

  <div class="center">
		<?php
		
		$jenis_data = $_GET['data'];
		$data = json_decode( file_get_contents("data/data{$jenis_data}.json"), true );

		foreach ($data as $item) {
			$word = $item['word'];
			$clue = $item['clue'];
			
			echo "<div class='line'>";
	    echo "  <input class='word' type='text' value='{$word}' />";
	    echo "  <input class='clue' value='{$clue}' />";
	    echo "</div>";

		}
		?>
    

  </div>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
