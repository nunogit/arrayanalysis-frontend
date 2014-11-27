<h1 style="color:#3F5A9A">STEP 3/3</h1>

<form class="form-horizontal" method="post" action="<?php troute("affyqc/step4") ?>">
<fieldset>

<!-- Form Name -->
<legend>f1</legend>

<!-- JQUERY CHECK ALL (interactive feature) -->
<script language="javascript">
jQuery( document ).ready(function() {
    $('#select_all').change(function() {
      var checkboxes = $(this).closest('form').find(':checkbox');
      if($(this).is(':checked')) {
        checkboxes.attr('checked', 'checked');
      } else {
        checkboxes.removeAttr('checked');
      }
    });
});
</script>


<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes"</label>
  <div class="col-md-8">
    <label class="checkbox-inline" for="select-all">
      <input type="checkbox" name="checkboxes" id="select_all" value="">
    </label>
  </div>
</div>

<input type="hidden" name="handler" value="<?php echo $handler ?>">

<div class="well" style="border: solid 1px #80FF80; background: #D9FFD9">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Sample quality">Sample quality</label>
  <div class="col-md-8">
    <label class="checkbox-inline" for="Sample quality-0">
      <input type="checkbox" name="sampleqc[]" id="Sample quality-0" value="sampleprep">
      Sample prep controls
    </label>
    <label class="checkbox-inline" for="Sample quality-1">
      <input type="checkbox" name="sampleqc[]" id="Sample quality-1" value="ratio">
      3'/5' ratio
    </label>
    <label class="checkbox-inline" for="Sample quality-2">
      <input type="checkbox" name="sampleqc[]" id="Sample quality-2" value="degplot">
      RNA degradation
    </label>
  </div>
</div>
</div>

<div class="well" style="border: solid 1px #FFCC80; background: #FFE6BF">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Hybridization and overall signal quality">Hybridization and overall signal quality</label>
  <div class="col-md-8">
    <label class="checkbox-inline" for="Hybridization and overall signal quality-0">
      <input type="checkbox" name="sampleqc[]" id="Hybridization and overall signal quality-0" value="hybrid">
      Hybridization controls
    </label>
    <label class="checkbox-inline" for="Hybridization and overall signal quality-1">
      <input type="checkbox" name="sampleqc[]" id="Hybridization and overall signal quality-1" value="percpres">
      Percent present
    </label>
    <label class="checkbox-inline" for="Hybridization and overall signal quality-2">
      <input type="checkbox" name="sampleqc[]" id="Hybridization and overall signal quality-2" value="posnegdistrib">
      Pos/Neg controls
    </label>
    <label class="checkbox-inline" for="Hybridization and overall signal quality-3">
      <input type="checkbox" name="sampleqc[]" id="Hybridization and overall signal quality-3" value="bgplot">
      Background intensity
    </label>
    <label class="checkbox-inline" for="Hybridization and overall signal quality-4">
      <input type="checkbox" name="sampleqc[]" id="Hybridization and overall signal quality-4" value="pmacalls">
      Present/Marginal/Absent calls
    </label>
    <label class="checkbox-inline" for="Hybridization and overall signal quality-5">
      <input type="checkbox" name="sampleqc[]" id="Hybridization and overall signal quality-5" value="boxplot">
      Profile &amp; boxplot of all controls
    </label>
  </div>
</div>
</div>

<div class="well" style="border: solid 1px #80D9FF; background: #BFECFF">
<div class="well" style="border-color:#80D9FF;background: #E6F7FF">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Signal distribution">Signal distribution</label>
  <div class="col-md-8">
    <label class="checkbox-inline" for="Signal distribution-0">
      <input type="checkbox" name="signalqc[]" id="Signal distribution-0" value="scalefact">
      Scale Factors
    </label>
    <label class="checkbox-inline" for="Signal distribution-1">
      <input type="checkbox" name="signalqc[]" id="Signal distribution-1" value="boxplotraw">
      Boxplot
    </label>
    <label class="checkbox-inline" for="Signal distribution-2">
      <input type="checkbox" name="signalqc[]" id="Signal distribution-2" value="densityraw">
      Density histogram
    </label>
  </div>
</div>
</div>

<div class="well" style="border-color:#80D9FF;background: #E6F7FF">
<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Intensity-dependent bias">Intensity-dependent bias</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="Intensity-dependent bias-0">
      <input type="checkbox" name="signalqc[]" id="Intensity-dependent bias-0" value="maraw">
      MA-plot
    </label>
	</div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mapplot">MA-plot per experimental group or using all arrays </label>
  <div class="col-md-4">
    <select id="mapplot" name="maoption1" class="form-control">
      <option value="dataset">dataset</option>
      <option value="group">group</option>
    </select>
  </div>
</div>
</div>

<div class="well" style="border-color:#80D9FF;background: #E6F7FF">
<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Spatial bias">Spatial bias</label>
  <div class="col-md-8">
    <label class="checkbox-inline" for="Spatial bias-0">
      <input type="checkbox" name="spatialqc[]" id="Spatial bias-0" value="layoutplot">
      Array reference layout
    </label>
    <label class="checkbox-inline" for="Spatial bias-1">
      <input type="checkbox" name="spatialqc[]" id="Spatial bias-1" value="spatialimage">
      2D images
    </label>
    <label class="checkbox-inline" for="Spatial bias-2">
      <input type="checkbox" name="spatialqc[]" id="Spatial bias-2" value="posnegcoi">
      Pos/Neg Center of Intensity
    </label>
    <label class="checkbox-inline" for="Spatial bias-3">
      <input type="checkbox" name="spatialqc[]" id="Spatial bias-3" value="plmimage">
      All PLM-based images
    </label>
  </div>
</div>
</div>

<div class="well" style="border-color:#80D9FF;background: #E6F7FF">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Probe-set homogeneity">Probe-set homogeneity</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Probe-set homogeneity-0">
      <input type="checkbox" name="spatailqc[]" id="Probe-set homogeneity-0" value="nuse">
      NUSE plot
    </label>
    <label class="checkbox-inline" for="Probe-set homogeneity-1">
      <input type="checkbox" name="spatialqc[]" id="Probe-set homogeneity-1" value="rle">
      RLE plot
    </label>
  </div>
</div>
</div>
</div>

<div class="well" style="border: solid 1px #9F8FBF; background: #cccde0">
<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Array correlation"></label>
  <div class="col-md-8">
    <label for="Array correlation-0" class="checkbox-inline">
      <input type="checkbox" name="correlqc[]" id="Array correlation-0" value="correlraw">
      Correlation plot
    </label>
    <label for="Array correlation-1" class="checkbox-inline">
      <input type="checkbox" name="correlqc[]" id="Array correlation-1" value="pcaraw">
      PCA analysis
    </label>
    <label for="Array correlation-2" class="checkbox-inline">
      <input type="checkbox" name="correlqc[]" id="Array correlation-2" value="clusterraw">
      Hierarchical clustering
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Distance calculation method">Distance calculation method</label>
  <div class="col-md-5">
    <select id="Distance calculation method" name="clusteroption1" class="form-control">
      <option value="pearson">Pearson</option>
      <option value="spearman">Spearman</option>
      <option value="euclidean">Euclidean</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Clustering Method">Clustering Method</label>
  <div class="col-md-4">
    <select id="Clustering Method" name="clusteroption2" class="form-control">
      <option value="ward">Ward</option>
      <option value="mcquitty">Mcquitty</option>
      <option value="average">Average</option>
      <option value="median">Median</option>
      <option value="single">Single</option>
      <option value="complete">Complete</option>
      <option value="centroid">Centroid</option>
    </select>
  </div>
</div>
</div>

<div class="well" style="border: solid 1px #BDBDBD;background: #F2F2F2">
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Normalization method">Normalization method</label>
  <div class="col-md-4">
    <select id="Normalization method" name="normmeth" class="form-control">
      <option value="GCRMA">GC-RMA</option>
      <option value="RMA">RMA</option>
      <option value="MAS5">MAS5</option>
      <option value="plier">plier</option>
      <option value="none">none</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Normalization per experimental group or using all arrays">Normalization per experimental group or using all arrays</label>
  <div class="col-md-4">
    <select id="Normalization per experimental group or using all arrays" name="normoption1" class="form-control">
      <option value="dataset">dataset</option>
      <option value="group">group</option>
    </select>
  </div>
</div>

<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Custom annotation (CDF) "></label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Custom annotation (CDF) -0">
      <input type="checkbox" name="normalization[]" id="Custom annotation (CDF) -0" value="customcdf">
      Custom annotation (CDF)
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Annotation type">Annotation type</label>
  <div class="col-md-4">
    <select id="Annotation type" name="cdftype" class="form-control">
      <option value="ENGS">Ensembl Gene (ENSG)</option>
      <option value="ENTREZG">ENTREZ Gene</option>
      <option value="REFSEQ">RefSeq</option>
      <option value="UG">UniGene</option>
      <option value="ENST">Ensembl Transcript</option>
      <option value="VEGAG">Vega Gene</option>
      <option value="VEGAT">Vega Transcript</option>
      <option value="TAIRG">TAIR Gene</option>
      <option value="TAIRT">TAIR transcript</option>
      <option value="MIRBASEG">miRBase Gene</option>
      <option value="MIRBASEF">miRBase Function</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Species">Species</label>
  <div class="col-md-4">
    <select id="Species" name="species" class="form-control">
      <option value="Hs">Home sapiens</option>
      <option value="Ag">Anopheles gambiae</option>
      <option value="At">Arabidopsis thaliana</option>
      <option value="Bt">Bos taurus</option>
      <option value="Ce">Caenorhabditis elegans</option>
      <option value="Cf">Canis familiaris</option>
      <option value="Dr">Danio rerio</option>
      <option value="Dm">Drosophila melanogaster</option>
      <option value="Gg">Gallus gallus</option>
      <option value="Hs">Homo sapiens</option>
      <option value="Ml">Macaca mulatta</option>
      <option value="Mm">Mus musculus</option>
      <option value="Os">Oryza sativa</option>
      <option value="Rn">Rattus norvegicus</option>
      <option value="Sc">Saccharomyces cerevisiae</option>
      <option value="Sp">Schizosaccharomyces pombe</option>
      <option value="Ss">Sus scrofa</option>
    </select>
  </div>
</div>

<div class="well" style="border-color:#80D9FF;background: #BFECFF">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Signal comparability and bias of normalized intensities">Signal comparability and bias of normalized intensities</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Signal comparability and bias of normalized intensities-0">
      <input type="checkbox" name="normalization[]" id="Signal comparability and bias of normalized intensities-0" value="boxplotnorm">
      Boxplot
    </label>
    <label class="checkbox-inline" for="Signal comparability and bias of normalized intensities-1">
      <input type="checkbox" name="normalization[]" id="Signal comparability and bias of normalized intensities-1" value="densitynorm">
      Density histogram
    </label>
    <label class="checkbox-inline" for="Signal comparability and bias of normalized intensities-2">
      <input type="checkbox" name="normalization[]" id="Signal comparability and bias of normalized intensities-2" value="manorm">
      MA-plot
    </label>
  </div>
</div>
</div>

<div class="well" style="border-color:#9F8FBF; background: #cccde0">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Normalized array correlation">Inline Checkboxes</label>
  <div class="col-md-8">
    <label class="checkbox-inline" for="Normalized array correlation-0">
      <input type="checkbox" name="normalization[]" id="Normalized array correlation-0" value="correlnorm">
      Correlation plot
    </label>
    <label class="checkbox-inline" for="Normalized array correlation-1">
      <input type="checkbox" name="normalization[]" id="Normalized array correlation-1" value="pcanorm">
      PCA analysis
    </label>
    <label class="checkbox-inline" for="Normalized array correlation-2">
      <input type="checkbox" name="normalization[]" id="Normalized array correlation-2" value="clusternorm">
      Hierarchical clustering
    </label>
  </div>
</div>
</div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
 	   <button type="submit" class="btn btn-lg btn-success">Let's rock'n'roll</button>
  </div>
</div>

</fieldset>
</form>



<small><br/><br/>handler: <?php echo $handler;?></small>

