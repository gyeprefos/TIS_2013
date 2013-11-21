<?php
include("header.php");
?>
<div class="page-header">
	<h3>Prednasky - C++</h3>
</div>

<div class="row-fluid">
	<?php
  if(!isset($_GET["pridat"])){
    ?>
   <a href="#" class="btn btn-success" onclick="formPrednasky()"><i class="icon-white icon-plus"></i> Pridat prednasku</a>
	<hr>
  <?php 
  }
  if(isset($_GET['pridat'])){
?>
  <form class="well">
    <fieldset>
      <legend>Pridat prednasku</legend>
      <label for"porCis">poradove cislo</label>
      <input class="input-xxsmall" id="porCis" type="text">
       <label for"nazov">nazov prednasky</label>
      <input class="input" id="nazov" type="text">
       <label for"subor">Subor</label>
      <input class="input-xsmall" id="subor" type="file">
    <a href="prednasky.php" class="btn btn-primary"><i class="icon-white icon-plus"></i> Pridat prednasku</a>
    </fieldset>
  </form>


    <?php
  }
  ?>


<?php 
$c = 1;
 ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $c; ?>. tyzden - xxx</h3>
  </div>
  <div class="panel-body row-fluid">
   <div class="weekCalendar-box span6"><time datetime="2009-11-13"></time>


  <p class="prednaska-popis"></p>
  <div class="btn-group">
    <a href="#" class="btn btn-primary">
      <i class="icon-white icon-chevron-down"></i>
      Zobrazit
    </a>
    <a href="#" class="btn btn-primary">
    <i class="icon-white icon-download-alt"></i>
     Ulozit PDF
     </a>
  </div></div>
  <div class="weekCalendar-box span5"><time datetime="2009-11-13"></time>
  <p class="prednaska-popis">popis</p>
  <div class="progress progress-info">
  <div class="bar" style="width: 20%"></div>
</div>



  </div>
  
  </div>
<hr>

<div class="panel-body row-fluid">

<div class="weekCalendar-box span6"><time datetime="2009-11-13"></time>
 
<p class="prednaska-popis"></p>
  <div class="btn-group">
    <a href="#" class="btn btn-primary">
      <i class="icon-white icon-chevron-down"></i>
      Zobrazit
    </a>
    <a href="#" class="btn btn-primary">
    <i class="icon-white icon-download-alt"></i>
     Ulozit PDF
     </a>
  </div></div>
  <div class="weekCalendar-box span5"><time datetime="2009-11-13"></time>
  <p class="prednaska-popis">popis</p>
  <div class="progress progress-info">
  <div class="bar" style="width: 20%"></div>
</div>



  </div>
  
  </div>

</div>




<?php $c++; ?>

<!--<script type="text/javascript">

$(function(){

	$(".prednaska").equalHeights();

});

(function($) {

    $.fn.equalHeights = function() {
        var maxHeight = 0,
            $this = $(this);

        $this.each( function() {
            var height = $(this).innerHeight();

            if ( height > maxHeight ) { maxHeight = height; }
        });

        return $this.css('height', maxHeight);
    };

    // auto-initialize plugin
    $('[data-equal]').each(function(){
        var $this = $(this),
            target = $this.data('equal');
        $this.find(target).equalHeights();
    });

})(jQuery);

</script>-->

</div>

<!--
<div class="hero-unit prednaska">
	<h3>2. prednaska - PREMENNE</h3>
	
		<time datetime="2009-11-21">21.11.2013</time>

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<div class="btn-group">
		<a href="#" class="btn btn-primary">
			<i class="icon-white icon-chevron-down"></i>
		 	Zobrazit
		</a>
		<a href="#" class="btn btn-primary">
		<i class="icon-white icon-download-alt"></i>
		 Ulozit PDF
		 </a>
	</div>
</div>

-->

<?php
include("footer.php");

?>