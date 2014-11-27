<h1 style="color:#3F5A9A">STEP 3/3</h1>



<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>f1</legend>

<div class="well" style="border: solid 1px #80FF80; background: #D9FFD9">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Sample quality">Sample quality</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Sample quality-0">
      <input type="checkbox" name="samplequality[]" id="Sample quality-0" value="sampleprep">
      Sample prep controls
    </label>
    <label class="checkbox-inline" for="Sample quality-1">
      <input type="checkbox" name="samplequality[]" id="Sample quality-1" value="ratio">
      3'/5' ratio
    </label>
    <label class="checkbox-inline" for="Sample quality-2">
      <input type="checkbox" name="samplequality[]" id="Sample quality-2" value="degplot">
      RNA degradation
    </label>
  </div>
</div>
</div>

<div style="border: solid 1px #FFCC80; background: #FFE6BF">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Hybridization and overall signal quality">Hybridization and overall signal quality</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Hybridization and overall signal quality-0">
      <input type="checkbox" name="samplequality[]" id="Hybridization and overall signal quality-0" value="hybrid">
      Hybridization controls
    </label>
    <label class="checkbox-inline" for="Hybridization and overall signal quality-1">
      <input type="checkbox" name="samplequality[]" id="Hybridization and overall signal quality-1" value="percpres">
      Percent present
    </label>
    <label class="checkbox-inline" for="Hybridization and overall signal quality-2">
      <input type="checkbox" name="samplequality[]" id="Hybridization and overall signal quality-2" value="posnegdistrib">
      Pos/Neg controls
    </label>
    <label class="checkbox-inline" for="Hybridization and overall signal quality-3">
      <input type="checkbox" name="samplequality[]" id="Hybridization and overall signal quality-3" value="bgplot">
      Background intensity
    </label>
    <label class="checkbox-inline" for="Hybridization and overall signal quality-4">
      <input type="checkbox" name="samplequality[]" id="Hybridization and overall signal quality-4" value="pmacalls">
      Present/Marginal/Absent calls
    </label>
    <label class="checkbox-inline" for="Hybridization and overall signal quality-5">
      <input type="checkbox" name="samplequality[]" id="Hybridization and overall signal quality-5" value="boxplot">
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
  <div class="col-md-4">
    <label class="checkbox-inline" for="Signal distribution-0">
      <input type="checkbox" name="Signal distribution" id="Signal distribution-0" value="1">
      Scale Factors
    </label>
    <label class="checkbox-inline" for="Signal distribution-1">
      <input type="checkbox" name="Signal distribution" id="Signal distribution-1" value="2">
      Boxplot
    </label>
    <label class="checkbox-inline" for="Signal distribution-2">
      <input type="checkbox" name="Signal distribution" id="Signal distribution-2" value="3">
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
      <input type="checkbox" name="Intensity-dependent bias" id="Intensity-dependent bias-0" value="">
      MA-plot
    </label>
	</div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="mapplot">MA-plot per experimental group or using all arrays </label>
  <div class="col-md-4">
    <select id="mapplot" name="mapplot" class="form-control">
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
  <div class="col-md-4">
  <div class="checkbox">
    <label for="Spatial bias-0">
      <input type="checkbox" name="Spatial bias" id="Spatial bias-0" value="Array reference layout">
      Array reference layout
    </label>
	</div>
  <div class="checkbox">
    <label for="Spatial bias-1">
      <input type="checkbox" name="Spatial bias" id="Spatial bias-1" value="2D images">
      2D images
    </label>
	</div>
  <div class="checkbox">
    <label for="Spatial bias-2">
      <input type="checkbox" name="Spatial bias" id="Spatial bias-2" value="Pos/Neg Center of Intensity">
      Pos/Neg Center of Intensity
    </label>
	</div>
  <div class="checkbox">
    <label for="Spatial bias-3">
      <input type="checkbox" name="Spatial bias" id="Spatial bias-3" value="All PLM-based images">
      All PLM-based images
    </label>
	</div>
  </div>
</div>
</div>

<div class="well" style="border-color:#80D9FF;background: #E6F7FF">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Probe-set homogeneity">Probe-set homogeneity</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Probe-set homogeneity-0">
      <input type="checkbox" name="Probe-set homogeneity" id="Probe-set homogeneity-0" value="NUSE plot">
      NUSE plot
    </label>
    <label class="checkbox-inline" for="Probe-set homogeneity-1">
      <input type="checkbox" name="Probe-set homogeneity" id="Probe-set homogeneity-1" value="RLE plot">
      RLE plot
    </label>
  </div>
</div>
</div>
</div>

<div class="well" style="border: solid 1px #9F8FBF; background: #cccde0">
<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Array correlation">Multiple Checkboxes</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="Array correlation-0">
      <input type="checkbox" name="Array correlation" id="Array correlation-0" value="1">
      Correlation plot
    </label>
	</div>
  <div class="checkbox">
    <label for="Array correlation-1">
      <input type="checkbox" name="Array correlation" id="Array correlation-1" value="2">
      PCA analysis
    </label>
	</div>
  <div class="checkbox">
    <label for="Array correlation-2">
      <input type="checkbox" name="Array correlation" id="Array correlation-2" value="">
      Hierarchical clustering
    </label>
	</div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Distance calculation method">Distance calculation method</label>
  <div class="col-md-5">
    <select id="Distance calculation method" name="Distance calculation method" class="form-control">
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
    <select id="Clustering Method" name="Clustering Method" class="form-control">
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
    <select id="Normalization method" name="Normalization method" class="form-control">
      <option value="GC-RMA">GC-RMA</option>
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
    <select id="Normalization per experimental group or using all arrays" name="Normalization per experimental group or using all arrays" class="form-control">
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
      <input type="checkbox" name="Custom annotation (CDF) " id="Custom annotation (CDF) -0" value="Custom annotation (CDF)">
      Custom annotation (CDF)
    </label>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Annotation type  ">Annotation type  </label>
  <div class="col-md-4">
    <select id="Annotation type  " name="Annotation type  " class="form-control">
      <option value="1">Ensemble...</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Species">Species</label>
  <div class="col-md-4">
    <select id="Species" name="Species" class="form-control">
      <option value="1">Home sapiens</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<div class="well" style="border-color:#80D9FF;background: #BFECFF">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Signal comparability and bias of normalized intensities">Signal comparability and bias of normalized intensities</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Signal comparability and bias of normalized intensities-0">
      <input type="checkbox" name="Signal comparability and bias of normalized intensities" id="Signal comparability and bias of normalized intensities-0" value="Correlation plot">
      Boxplot
    </label>
    <label class="checkbox-inline" for="Signal comparability and bias of normalized intensities-1">
      <input type="checkbox" name="Signal comparability and bias of normalized intensities" id="Signal comparability and bias of normalized intensities-1" value="PCA analysis">
      Density histogram
    </label>
    <label class="checkbox-inline" for="Signal comparability and bias of normalized intensities-2">
      <input type="checkbox" name="Signal comparability and bias of normalized intensities" id="Signal comparability and bias of normalized intensities-2" value="Hierarchical clustering">
      MA-plot
    </label>
  </div>
</div>
</div>

<div class="well" style="border-color:#9F8FBF; background: #cccde0">
<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Normalized array correlation">Inline Checkboxes</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="Normalized array correlation-0">
      <input type="checkbox" name="Normalized array correlation" id="Normalized array correlation-0" value="Correlation plot">
      Correlation plot
    </label>
    <label class="checkbox-inline" for="Normalized array correlation-1">
      <input type="checkbox" name="Normalized array correlation" id="Normalized array correlation-1" value="PCA analysis">
      PCA analysis
    </label>
    <label class="checkbox-inline" for="Normalized array correlation-2">
      <input type="checkbox" name="Normalized array correlation" id="Normalized array correlation-2" value="Hierarchical clustering">
      Hierarchical clustering
    </label>
  </div>
</div>
</div>
</div>

</fieldset>
</form>


