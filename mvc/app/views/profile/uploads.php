<?php
       $posts = $data['posts'];
       $images = $data['upimages'];
     $i = 0;
     $score = count($posts)-1;
    while($i<count($posts)) {
      $score--;
     $post = $posts[$i];
     $image = $images[$i];?>
            <?php if($i % 3 == 0) { ?>
  		<div class="row">
      <div class="col-4">
  	<div class="shopping item one">
  		<div class="polaroid">
  			<?php echo '<img class="slides" src="data:image/jpeg;base64,' . base64_encode($image["image"]) . '"/>'; ?>
        <button class="side-btn btn-down" id="btn-left" style="background-image: url('../css/edit.png');"
        onclick="updateitem(<?php echo $post['itemid'] . ',' . $post['title'] . ',' . $post['quantity'] . ',' . $post['description'] . ',' . $post['price'];?>)"></button>
  			<button class="side-btn btn-down" id="btn-right" style="background-image: url('../css/trash.png');" 
        onclick="deleteitem(<?php echo $post['itemid'];?>)"></button>
  			<div class="shopshow showcasing">Showcasing</div>
  			<div class="shopcap caption">&nbsp;<?php echo substr($post["title"],0,6) . '...'; ?>&nbsp;</div>
  		</div>
  	</div>
    <div class="shopping item two">
      <div class="polaroid">
      </div>
    </div>
  	 </div>
    <?php if(!$score) { echo '</div>'; }} else if($i % 3 == 1) { ?>
  <div class="col-4">
  	<div class="shopping item two">
  		<div class="polaroid">
  			<?php echo '<img class="slides" src="data:image/jpeg;base64,' . base64_encode($image["image"]) . '"/>'; ?>
  			<button class="side-btn btn-down" id="btn-left" style="background-image: url('../css/edit.png');"
        onclick="updateitem(<?php echo $post['itemid'] . ',' . $post['title'] . ',' . $post['quantity'] . ',' . $post['description'] . ',' . $post['price'];?>)"></button>
        <button class="side-btn btn-down" id="btn-right" style="background-image: url('../css/trash.png');"
        onclick="deleteitem(<?php echo $post['itemid'];?>);"></button>
        <div class="shopshow showcasing">Showcasing</div>
  			<div class="shopcap caption">&nbsp;<?php echo substr($post["title"],0,6) . '...'; ?>&nbsp;</div>
  		</div>
  	</div>
  	<div class="shopping item two">
  		<div class="polaroid">
  		</div>
  	</div>
  </div>
<?php if(!$score) { echo '</div>'; }} else { ?>
  <div class="col-4">
  	<div class="shopping item one">
  		<div class="polaroid">
  			<?php echo '<img class="slides" src="data:image/jpeg;base64,' . base64_encode($image["image"]) . '"/>'; ?>
        <button class="side-btn btn-down" id="btn-left" style="background-image: url('../css/edit.png');"
        onclick="updateitem(<?php echo $post['itemid'] . ',' . $post['title'] . ',' . $post['quantity'] . ',' . $post['description'] . ',' . $post['price'];?>)"></button>
        <button class="side-btn btn-down" id="btn-right" style="background-image: url('../css/trash.png');"
        onclick="deleteitem(<?php echo $post["itemid"];?>);"></button>
        <div class="shopshow showcasing">Showcasing</div>
  			<div class="shopcap caption">&nbsp;<?php echo substr($post["title"],0,6) . '...'; ?>&nbsp;</div>
  		</div>
  	</div>
  	<div class="shopping item one">
  		<div class="polaroid">
  		</div>
  	</div>
  	</div>
  <?php if($i % 3 == 2) { echo '</div>'; }} $i++; } ?>