<?php require "../layout/header.php";  ?>
<?php require "../layout/head.php";  ?>
<!-- Body Start Here --> 
<div class="container">
  <ol class="breadcrumb">
    <li><a href="<?php echo $base_url; ?>">Home</a></li>
    <li><a href="<?php echo $base_url; ?>/view/category.php">Category</a></li>
    <li class="active">software</li>
  </ol>
  <div class="row">
    <div class="col-md-2">
      <?php require "category_table.php";  ?>
      <!--Sidebar content-->              
    </div><!--Span2-->
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-4">
          <div class="container">
            <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
              <img class="text-center" src="../images/fangirl_big.jpg">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <h2>Fangirl (Paperback)</h2>
          by <span class="text-danger">Rainbow Rowell</span><br/>
          <hr>
          <b>Usually despatched within 24 hours</b>
          <h4>$43.10</h4>
          <button type="button" class="btn btn-success">Buy it now</button>

        </div>
      </div>
      <hr/>
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#moreinfo">Description</a></li>
        <li><a href="#Revuews">Moreinfo</a></li>
      </ul>

      <div class="tab-content">
        <div class="tab-pane active" id="moreinfo">
          <p class="text-primary custom-padding">Cath and Wren are identical twins, and until recently they did absolutely everything together. Now they're off to university and Wren's decided she doesn't want to be one half of a pair any more - she wants to dance, meet boys, go to parties and let loose. It's not so easy for Cath. She's horribly shy and has always buried herself in the fan fiction she writes, where she always knows exactly what to say and can write a romance far more intense than anything she's experienced in real life. Without Wren Cath is completely on her own and totally outside her comfort zone. She's got a surly room-mate with a charming, always-around boyfriend, a fiction-writing professor who thinks fan fiction is the end of the civilized world, a handsome classmate who only wants to talk about words ...And she can't stop worrying about her dad, who's loving and fragile and has never really been alone. Now Cath has to decide whether she's ready to open her heart to new people and new experiences, and she's realizing that there's more to learn about love than she ever thought possible ...</p>
        </div>
        <div class="tab-pane" id="Revuews">
          <h3>More Info</h3>
        </div>
      </div>


    </div>
  </div>
</div>
<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
    <div class="modal-content">
      <div class="modal-body">
        <img src="" alt="" />
      </div>
    </div>
  </div>
</div>
<?php require "../layout/footer.php";  ?>