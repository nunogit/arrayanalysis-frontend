<div class="well">

<?php

echo "Don't forget your study handler: <h3>". $handler."</h3> <small><a href='".troute("documentation/privacy") ."'>Why do I need an handler?</a></small>";

?>
</div>


<script language="javascript">
		
	setTimeout(function() {
		setHappyMessage();
	}, 15000);

	var fmessages = new Array();
	fmessages[0] = "I know it's boring to be looking at this progress bar... but think of me, I spend all day computing your stuff and making the bar move :(";
	fmessages[1] = "Uuuuu... nice data you have here. Do you mind if I invite her for a drink tonight?";
	fmessages[2] = "Ah... your data looks promising...";
	fmessages[3] = "Sorry, just a second more. I had to go to the Toilet";
	fmessages[4] = "Yes... I am still here!";
	fmessages[5] = "I would invite you for a chess game while we wait... but I would win.";
	fmessages[6] = "If you're not happy with my work just file a complain. I could use a new CPU";
	fmessages[7] = "Today I am feeling lazy... Sorry for the wait...";
	fmessages[8] = "This is taking some time. I am going for a beer. Do you want one too while you wait?";
	fmessages[9] = "Relax and take a coffee. I am taking care of your data";

	function setHappyMessage(){
		//alert(fmessages.length);
		imes = Math.floor(Math.random()  * fmessages.length);
		$("#waitmessages").html(fmessages[imes] + " <img src='img/cursor.gif'/>");
	}

	$( document ).ready(function() {
		  // Handler for .ready() called.
// 		 function incrementLoader(){
//			static c = 0;
//			c++;
//		  }
//		alert('');

		$('.progress-bar').animate({ width: "100%" },30000);
		//$('.progress-bar').css("width", 40);
		  
//		setTimeout(incrementLoader, 100);
//		alert('');
		$.ajax({
		  url: "<?php troute("affyqc/step5") ?>",
		  method: "post",
//		  dataType : "json",
		  data : {
			 handler : '<?php echo $handler ?>',
			 correlqc : <?php echo $jCorrelqc ?>,
        		 signalqc : <?php echo $jSignalqc ?>,
		         sampleqc : <?php echo $jSampleqc ?>,
		         spatialqc : <?php echo $jSpatialqc ?>,
		         normalization : <?php echo $jNormalization ?>
		  },
		  success: function(data){
			//alert(data);
			$("#data").html(data);
			$("#waitmessages").html("<h4>OH YEAH!!! Just download the file and discover amazing new things!! (pst. Don't forget to mention my work - link to paper)</h4>");
		  },
		  error: function(data){
			alert("damn "+data);
			$("#data").html(data);
		  }
		});
	});
</script>

Computing your result. Hold on!	 this may take a while...
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width: 1%">
    <span class="sr-only">45%</span>
  </div>
</div>
<div id="waitmessages"></div>
<div id="data"></div>
