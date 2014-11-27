<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<div class="well"  style="border: solid 1px #80FF80; background: #D9FFD9">
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="normalizationtype">Normalization type</label>
  <div class="col-md-4">
    <select id="normalizationtype" name="normType" class="form-control">
      <option value="lumi">lumi</option>
      <option value="neqc">neqc</option>
    </select>
  </div>
</div>

<div id="lumioptions">
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="backgroundcorrection">Background correction</label>
  <div class="col-md-4">
    <select id="backgroundcorrection" name="bgCorrect" class="form-control">
      <option value="none">none</option>
      <option value="bgAdjust">bgAdjust</option>
      <option value="forcePositive">forcePositive</option>
      <option value="bgAdjust.Affy">bgAdjust.Affy</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="variancestabilization">Variance stabilization</label>
  <div class="col-md-4">
    <select id="variancestabilization" name="variancestabilization" class="form-control">
      <option value="none">none</option>
      <option value="vst">vst</option>
      <option value="log2">log2</option>
      <option value="cubicRoot">cubicRoot</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="normalization">Normalization</label>
  <div class="col-md-4">
    <select id="normalization" name="normalization" class="form-control">
      <option value="none">none</option>
      <option value="quantitie">quantitie</option>
      <option value="rsn">rsn</option>
      <option value="ssn">ssn</option>
      <option value="loess">loess</option>
      <option value="vsn">vsn</option>
      <option value="rankInvariant">rankInvariant</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="detectionthreshold">Detection threshold</label>  
  <div class="col-md-2">
  <input id="detectionthreshold" name="detectionthreshold" type="text" placeholder="" value="0.01" class="form-control input-md">
  <span class="help-block"></span>  
  </div>
</div>
</div>
</div>

<div class="well" style="border: solid 1px #FFCC80; background: #FFE6BF">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="performfiltering ">Perform filtering </label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="performfiltering -0">
      <input type="checkbox" name="performfiltering " id="performfiltering -0" value="1"> To speed up the processing and reduce false positives, remove the unexpressed probes.
    </label>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="morethan"></label>  
  <div class="col-md-2">More than <i>n</i> probes
  <input id="morethan" name="morethan" type="text" placeholder="nr of probes" value="0" class="form-control input-md">
  <span class="help-block"></span>
  </div>
  <div class="col-md-2">with P-value less than <input id="lesthan" name="lesthan" type="text" value="0.01" placeholder="p-value" class="form-control input-md"></div>
</div>
</div>


<div class="well" style="border: solid 1px #BDBDBD;background: #F2F2F2">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Annotation">Create annotation file</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Annotation-0">
      <input type="checkbox" name="Annotation" id="Annotation-0" value="createannotationfile">
    </label>
  </div>
</div>
</div>

<div class="well" style="border: solid 1px #80D9FF; background: #BFECFF">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="rawdataplots">Raw data plots</label>
  <div class="col-md-8">
    <label class="checkbox-inline" for="rawdataplots-0">
      <input type="checkbox" name="rawdataplots" id="rawdataplots-0" value="1">
      Density plot
    </label>
    <label class="checkbox-inline" for="rawdataplots-1">
      <input type="checkbox" name="rawdataplots" id="rawdataplots-1" value="2">
      PCA plot
    </label>
    <label class="checkbox-inline" for="rawdataplots-2">
      <input type="checkbox" name="rawdataplots" id="rawdataplots-2" value="3">
      CV plot
    </label>
    <label class="checkbox-inline" for="rawdataplots-3">
      <input type="checkbox" name="rawdataplots" id="rawdataplots-3" value="4">
      Boxplot
    </label>
    <label class="checkbox-inline" for="rawdataplots-4">
      <input type="checkbox" name="rawdataplots" id="rawdataplots-4" value="5">
      Sample relation plot
    </label>
    <label class="checkbox-inline" for="rawdataplots-5">
      <input type="checkbox" name="rawdataplots" id="rawdataplots-5" value="6">
      Correlation plot
    </label>
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Normalized data plots">Normalized data plots</label>
  <div class="col-md-8">
    <label class="checkbox-inline" for="Normalized data plots-0">
      <input type="checkbox" name="Normalized data plots" id="Normalized data plots-0" value="1">
      Density plot
    </label>
    <label class="checkbox-inline" for="Normalized data plots-1">
      <input type="checkbox" name="Normalized data plots" id="Normalized data plots-1" value="2">
      CV plot
    </label>
    <label class="checkbox-inline" for="Normalized data plots-2">
      <input type="checkbox" name="Normalized data plots" id="Normalized data plots-2" value="3">
      Sample relation plot
    </label>
    <label class="checkbox-inline" for="Normalized data plots-3">
      <input type="checkbox" name="Normalized data plots" id="Normalized data plots-3" value="4">
      PCA plot
    </label>
    <label class="checkbox-inline" for="Normalized data plots-4">
      <input type="checkbox" name="Normalized data plots" id="Normalized data plots-4" value="5">
      Boxplot
    </label>
    <label class="checkbox-inline" for="Normalized data plots-5">
      <input type="checkbox" name="Normalized data plots" id="Normalized data plots-5" value="6">
      Correlation plot
    </label>
  </div>
</div>
</div>

<div class="well" style="border: solid 1px #9F8FBF; background: #cccde0">
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="distancecalculationmethod">Distance calculation method</label>
  <div class="col-md-4">
    <select id="distancecalculationmethod" name="distancecalculationmethod" class="form-control">
      <option value="1">Pearson</option>
      <option value="2">Spearman</option>
      <option value="">Euclidean</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="clustering method">Clustering Method</label>
  <div class="col-md-4">
    <select id="clustering method" name="clustering method" class="form-control">
      <option value="Ward">Ward</option>
      <option value="Mcquitty">Mcquitty</option>
      <option value="average">average</option>
      <option value="median">median</option>
      <option value="single">single</option>
      <option value="complete">complete</option>
      <option value="centroid">centroid</option>
    </select>
  </div>
</div>
</div>

</fieldset>
</form>

<script language="javascript">
	$( "#normalizationtype" ).change(function() {
		//alert($("#normalizationtype").val());
	   if( $("#normalizationtype").val()!='lumi' )
		$("#lumioptions").slideUp();
			else
				 $("#lumioptions").slideDown();
	});
</script>
