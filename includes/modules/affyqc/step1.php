<h1>Your array data</h1>

<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="javascript:setDataType('affy')">Affy</a></li>
  <li role="presentation"><a href="javascript:setDataType('illumina')">Illumina</a></li>
  <li role="presentation"><a href="javascript:setDataType('cleandata')">Clean data</a></li>
</ul>
<br/>
<input type="hidden" name="type" value="affy">
<div style="display:none" id="progress-container">
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 0%"><span id="loadMessage"></span>
    <span class="sr-only">45% Complete</span>
  </div>
</div>
</div>

<div style="border: 1px gray dashed; height: 100px;" id="dpza" class="dropzone">
<p>Drag and drop or click and pick your data file</p>
<form action="<?php troute("affyqc/step2") ?>" method="post" enctype="multipart/form-data" role="form" class="adropzone" id="dpz">
	<div class="form-inline fallback">
	  <label for="upload-file">Please choose a file:</label><input type="file" name="uploadFile" id="uploadFile" class="form-control"><input type="submit" value="Upload File" class="form-control">
	</div>
	<input type="hidden" id="handler" name="handler" value="">
</form>


</div>

<h3>Or insert your handler</h3>

<form class="form-horizontal" action="<?php troute("common/listResources") ?>" method="post">
<div class="row">
  <div class="col-lg-12">
    <div class="input-group">      
      <input type="text" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">Go!</button>
      </span>
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
</form>






<!--form>
  <div class="form-inline fallback">
          <label for="upload-file">Please choose a file:</label><input type="file" name="uploadFile" id="uploadFile" class="form-control"><input type="submit" value="Upload File" class="form-control">
  </div>
</form-->




<script language="javascript">
//  Dropzone.autoDiscover = false;
  fileSize = 0;

  Dropzone.options.dpza = {
  //paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 512, // MB
  maxFiles: 1,
  previewContainer: "#dpza",
  url: '<?php troute("affyqc/step1-upload"); ?>',
  acceptedFiles: "application/zip",
  totaluploadprogress: function(progress){
	console.log(Math.round(progress));
	iProgress = Math.round(progress/2);
	if(iProgress<50){
		$('#loadMessage').html('Uploading data file');
		$('.progress-bar').css('width', iProgress + '%');
	}
	else {
		$('.progress-bar').css('width', '50%');
		// we estimated 3 seconds per mb
		processingTime = fileSize / (1024*1024)  * 3000;
		$('#loadMessage').html('Processing your file');	
		//alert(processingTime);
		$('.progress-bar').animate({width: '100%'}, processingTime);
	}
  },
  success: function(file, response){
	        query = "handler="+response;
		$("#handler").val(response);
		$("#dpz").submit();
  },
  accept: function(file, done) {
    fileSize = file.size;
    $("#progress-container").slideDown("slow"); 
    if (file.name == "justinbieber.zip") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
 };


function askForTSV(){
	if( window.FormData === undefined ) return;

	
}


</script>



<script language="javascriptaa">
Dropzone.autoDiscover = false;

$(function() {
//	drpz = $("#dpz").dropzone({ url: "<?php troute("affyqc/step2") ?>" });
	nrfiles = 0;	

	drpz = new Dropzone("#dpz", { url: "<?php troute("affyqc/step1-upload") ?>", acceptedFiles: "image/*"});

	drpz.on("addedfile", function(file) {
	  // Hookup the start button
	  if(nrfiles==0){
		  drpz.enqueueFile(file);
		  //drpz.processQueue();
		  nrfiles++;
	  } else alert("Only one file is authorized");
	})
	
	drpz.on("totaluploadprogress", function(progress) {
		 alert('bb');
		 $('#fileprogressbar').css('width', progress+'%');
		 //document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
	});

});

</script>





<!--
-->

