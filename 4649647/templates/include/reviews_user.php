<div class="user-review-item" >
	<div class="row" >
		<div class="col-lg-3 col-6 col-md-6 col-sm-6" >
			<div class="user-review-item-avatar" >
				<div class="user-review-item-avatar1" ><img src="<?php echo $Profile->userAvatar($value["clients_avatar"]); ?>"></div>
				<div class="user-review-item-avatar2" > <a href="<?php echo _link("user/".$value["clients_id_hash"]); ?>" ><?php echo $Profile->name($value); ?></a> <span><?php echo datetime_format($value["clients_reviews_date"]); ?></span> </div>
			</div>
		</div>
		<div class="col-lg-9 col-6 col-md-6 col-sm-6 text-right" >
			<div class="star-rating" >
			<?php echo $Profile->outRating( 0, $value["clients_reviews_rating"] ); ?>
			</div>
		</div>
	</div>
	<p class="mt15" ><?php echo nl2br($value["clients_reviews_text"]); ?></p>
	<?php if( $value["clients_reviews_from_id_user"] == intval($_SESSION["profile"]["id"]) || ($_SESSION['cp_auth'][ $config["private_hash"] ] && $_SESSION['cp_control_board']) ){ ?>
	<div class="text-right" >
		<span class="user-review-item-delete open-modal" data-id-modal="modal-confirm-delete-review" data-id="<?php echo $value["clients_reviews_id"]; ?>" ><i class="las la-trash"></i> <?php echo $ULang->t("Удалить"); ?></span>
	</div>
    <?php } ?>
</div>