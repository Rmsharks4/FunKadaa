<div class="row">
<?php
       $posts = $data['people'];
     $j = 0;
    while($j<count($posts)){
     $post = $posts[$j]; ?>
      <?php if($j % 3 == 0) { ?>
      <div class="col-4">
    <div class="shopping item one">
      <a onclick="UserClick(<?php echo $post["userid"];?>)"><div class="polaroid">
        <img class="slides" src="../css/images/profile.jpg" >
        <button class="side-btn btn-down" id="btn-left" style="background-image: url('../css/follow.png');"></button>
        <button class="side-btn btn-down" id="btn-right" style="background-image: url('../css/message.png');"></button>
        <div class="shopshow showcasing">Showcasing</div>
        <div class="shopcap caption">&nbsp;<?php echo substr($post["username"],0,6) . '...'; ?>&nbsp;</div>
      </div></a>
    </div>
    <div class="shopping item one">
      <div class="polaroid">
      </div>
    </div>
     </div>
    <?php } else if($j % 3 == 1) { ?>
  <div class="col-4">
    <div class="shopping item two">
      <a onclick="UserClick(<?php echo $post["userid"];?>)"><div class="polaroid">
        <img class="slides" src="../css/images/profile.jpg">
        <button class="side-btn btn-down" id="btn-left" style="background-image: url('../css/follow.png');"></button>
        <button class="side-btn btn-down" id="btn-right" style="background-image: url('../css/message.png');"></button>
        <div class="shopshow showcasing">Showcasing</div>
        <div class="shopcap caption">&nbsp;<?php echo substr($post["username"],0,6) . '...'; ?>&nbsp;</div>
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
      <a onclick="UserClick(<?php echo $post["userid"];?>)"><div class="polaroid">
        <img class="slides" src="../css/images/profile.jpg">
        <button class="side-btn btn-down" id="btn-left" style="background-image: url('../css/follow.png');"></button>
        <button class="side-btn btn-down" id="btn-right" style="background-image: url('../css/message.png');"></button>
        <div class="shopshow showcasing">Showcasing</div>
        <div class="shopcap caption">&nbsp;<?php echo $post["username"]; ?>&nbsp;</div>
      </div></a>
    </div>
    <div class="shopping item one">
      <div class="polaroid">
      </div>
    </div>
    </div>
  <?php } $j++; } ?>
  </div>