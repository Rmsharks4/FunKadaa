<?php
       $posts = $data['posts'];
       $images = $data['images'];
     $i = 0;
    while($i<count($posts)){
     $post = $posts[$i];
     $image = $images[$i];?>
          <div class="row">
            <?php if($i % 3 == 0) { ?>
  		<div class="col-4">
  	<div class="shopping item one">
  		<a  onclick="ItemClick(<?php echo $post["itemid"];?>)"><div class="polaroid">
  			<?php echo '<img class="slides" src="data:image/jpeg;base64,' . base64_encode($image["image"]) . '"/>'; ?>
        <button class="side-btn btn-down" id="btn-left" style="background-image: url('../css/unlove.png');"></button>
  			<button class="side-btn btn-down" id="btn-right" style="background-image: url('../css/uncart.png');"></button>
  			<div class="shopshow showcasing">Showcasing</div>
  			<div class="shopcap caption">&nbsp;<?php echo substr($post["title"],0,6) . '...'; ?>&nbsp;</div>
  		</div></a>
  	</div>
    <div class="shopping item two">
      <div class="polaroid">
      </div>
    </div>
  	 </div>
    <?php } else if($i % 3 == 1) { ?>
  <div class="col-4">
  	<div class="shopping item two">
  		<a  onclick="ItemClick(<?php echo $post["itemid"];?>)"><div class="polaroid">
  			<?php echo '<img class="slides" src="data:image/jpeg;base64,' . base64_encode($image["image"]) . '"/>'; ?>
  			<button class="side-btn btn-down" id="btn-left" style="background-image: url('../css/unlove.png');"></button>
  			<button class="side-btn btn-down" id="btn-right" style="background-image: url('../css/uncart.png');"></button>
  			<div class="shopshow showcasing">Showcasing</div>
  			<div class="shopcap caption">&nbsp;<?php echo substr($post["title"],0,6) . '...'; ?>&nbsp;</div>
  		</div></a>
  	</div>
  	<div class="shopping item two">
  		<div class="polaroid">
  		</div>
  	</div>
  </div>
<?php } else { ?>
  <div class="col-4">
  	<div class="shopping item one">
  		<a  onclick="ItemClick(<?php echo $post["itemid"];?>)"><div class="polaroid">
  			<?php echo '<img class="slides" src="data:image/jpeg;base64,' . base64_encode($image["image"]) . '"/>'; ?>
        <button class="side-btn btn-down" id="btn-left" style="background-image: url('../css/unlove.png');"></button>
  			<button class="side-btn btn-down" id="btn-right" style="background-image: url('../css/uncart.png');"></button>
  			<div class="shopshow showcasing">Showcasing</div>
  			<div class="shopcap caption">&nbsp;<?php echo substr($post["title"],0,6) . '...'; ?>&nbsp;</div>
  		</div></a>
  	</div>
  	<div class="shopping item one">
  		<div class="polaroid">
  		</div>
  	</div>
  	</div>
  <?php } $i++; } ?>
  </div>