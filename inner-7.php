<?php
  
  include 'navbar.php';

?>
<?php
    include("db.php");
?>



    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Wrogn
        <small></small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">
        <?php
                    $card_sql="select * from cloths where id='7'";
                    $card_query=mysqli_query($con,$card_sql);
                    $card_rs=mysqli_fetch_assoc($card_query);
                ?>


        <div class="col-md-8">
          <img class="img-fluid" src="img/wrogn.jpg" alt="">
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Price</h3>
          <p>Rs.800</p>
          <h3 class="my-3">Product Details</h3>
          <ul>
            <li>Size:<?php echo $card_rs['Size']; ?></li>
            <li>Color:<?php echo $card_rs['Color']; ?></li>
            <li>Material:<?php echo $card_rs['Material']; ?></li>
          </ul>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Products</h3>

     <div class="container">    
  <div class="row">
   <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><input type="button" name="button" onclick="my()" value="Buy"></div>
      </div>
    </div>


    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><input type="button" name="button" value="Buy"></div>
      </div>
    </div>
    
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"><input type="button" name="button" value="Buy"></div>
      </div>
    </div>
    
  </div>
</div><br>
   <?php include 'footer.php'; ?>