<div class="board-view-right" >
  
  <?php if($data["ad"]["ads_price"]){ ?>
    <p class="board-view-price price-currency" >
      <?php echo $Main->price($data["ad"]["ads_price"],$data["ad"]["ads_currency"]); ?>
      <?php echo $Main->adOutCurrency($data["ad"]["ads_price"], $data["ad"]["ads_currency"]); ?>
    </p>
  <?php }else{ ?>
  	<p class="board-view-price" ><?php echo $ULang->t("Бесплатно"); ?></p>
  <?php } ?>

  <?php
    echo $Ads->adAuctionSidebar( $data );
    echo $Ads->adSidebar( $data ); 
  ?>

  <?php echo $Banners->out( ["position_name"=>"ad_view_sidebar", "current_id_cat"=>$data["ad"]["category_board_id"], "categories"=>$getCategoryBoard] ); ?>

</div>