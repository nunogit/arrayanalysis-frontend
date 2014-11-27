<h1>Step 2 / 3</h1>

<h3>The information recognized on the chip was <span class="label label-default"><?php echo $aType ?></span>, <span class="label label-default"><?php echo $chipName ?></span> of <span class="label label-default"><?php echo $species ?></span></h3>
<p>Decribe your dataset for analysing and coloring the arrays perexperimental groups: complete the table below or load a descriptionfile.</p>

<form class="form-horizontal" role="form" action="<?php troute("affyqc/step3")?>" method="post">
<input type="hidden" name="handler" value="<?php echo $handler;  ?>">

<div class="form-group">
<div class="col-sm-4">
<ul id="sortable1" class="connectedSortable">
<?php
	for($i=0; $i < count($sampleNameList); $i++){
		echo "<li value='".$sampleNameList[$i]."'>".$sampleNameList[$i] ."</li>";
	}
?>
</ul>
<textarea id="sample" name="sample" rows="<?php echo $nrRows ?>" class="form-control" >
<?php
	for($i=0; $i < count($sampleNameList); $i++){
		echo $sampleNameList[$i];
		echo $i < count($sampleNameList)-1 ? "\n":"";
	}
?>
</textarea>
</div>
<div class="col-sm-4">
<ul id="sortable2" class="connectedSortable">
<?php
	for($i=0; $i < count($sampleNameList); $i++){
		echo "<li id='Array".$i."' data-type='text' value='Array".$i."'><a href='#' class='group'>Array".$i ."</a></li>";
	}
?>
</ul>
<textarea id="samplename" name="samplename" rows="<?php echo $nrRows ?>" class="form-control" >
<?php
	for($i=0; $i < count($sampleNameList); $i++){
		echo "Array " . $i;
		echo $i < count($sampleNameList)-1 ? "\n":"";
	}

?>
</textarea>
</div>
<div class="col-sm-4">
<ul id="sortable3" class="connectedSortable">
<?php
	for($i=0; $i < count($sampleNameList); $i++){
		echo "<li data-type='text' value='group A'><a href='#' class='group'>Group A</a></li>";
	}
?>
</ul>
<textarea id="group" name="group" rows="<?php echo $nrRows ?>" class="form-control" >
<?php
	for($i=0; $i < count($sampleNameList); $i++){
		echo "Group A";
		echo $i < count($sampleNameList)-1 ? "\n":"";
	}

?>
</textarea>
</div>
</div>
<p>or provide a file with the description</p>

<input type="checkbox" name="reorder"> Reorder

<input type="submit" value="submit description">
</form>

<small><br/><br/>handler: <?php echo $handler;?></small>


<script language="javascript">

  $( document ).ready(function() {

    $("#sample").hide();
    $("#samplename").hide();
    $("#group").hide();

    $( "#sortable1, #sortable2, #sortable3" ).sortable({
         update: function(event, ui) {
		setTextFields();
            }
    }).disableSelection();

    $.fn.editable.defaults.mode = 'inline';
    $('.group').editable();

    $('.group').on('save', function(e, params) {
    	//alert('Saved value: ' + params.newValue);
	$(this).parent().attr("value",params.newValue);
	setTextFields();
    });


  });

  function setTextFields(){
                var sample = $("#sortable1").sortable("toArray", {attribute: 'value'});
                var samplename = $("#sortable2").sortable("toArray", {attribute: 'value'});
                var group = $("#sortable3").sortable("toArray", {attribute: 'value'});

                $('#sample').val(sample.join("\n"));
                $('#samplename').val(samplename.join("\n"));
                $('#group').val(group.join("\n"));

		alert( $('#sample').val());
		alert( $('#samplename').val());
		alert( $('#group').val());
  }

</script>
