<?php
            $result = $data['posts'];
            $images = $data['images'];
            $users = $data['users'];
            $likes = $data['likes'];
            $saves = $data['saves'];
            $cartitems = $data['cartitems'];
            $cart = $data['cart'];
          $i = 0;
         while($i<count($result)){
          $post = $result[$i];
          $image = $images[$i];
          $user = $users[$i];
          $like = $likes[$i];
          $save = $saves[$i];
          $cartitem = $cartitems[$i];
          if($i % 2 == 0) { ?>
            <div class="row" value="<?php echo $post["itemid"] ?>">
              <div class="col-sm">
                <div class="item one">
                  <div class="polaroid">
                    <?php echo '<img class="slides" src="data:image/jpeg;base64,' . base64_encode($image[0]["image"]) . '"/>'; ?>
                    <button class="next-btn" id="btn-left" onclick="nextIndex(-1)">&#10094</button>
                    <button class="next-btn" id="btn-right" onclick="nextIndex(1)">&#10095</button>
                    <div class="showcasing">Showcasing</div>
                    <div class="caption" onclick="ItemPage()">&nbsp;<?php echo $post["title"]; ?>&nbsp;</div>
                  </div>
                </div>
                <?php $j = 0;
                    while($j < count($image)-1){ ?>
                    <div class="item one">      
                      <div class="polaroid">
                      </div>
                    </div>
                <?php $j++; } ?>
              </div>
              <div class="col-sm">
                <div class="description">
                  <div class="arrow straight"></div>
                  <div class="createdby">Created by</div>
                  <div class="artist" onclick="UserClick()"><?php echo $user["fullname"]; ?></div>
                  <p class="details"><?php echo $post['description'];?></p>
                  <div class="actions">
                    <button class="action-btn">
                      <img class="love" src="<?php if($like) echo '../css/love.png'; else echo '../css/unlove.png'; ?>" 
                      onclick="insertlike(<?php echo $user["userid"]. ',' . $post["itemid"];?>);
                      if(this.src.includes('unlove.png')) this.src = '../css/love.png'; else this.src = '../css/unlove.png';">
                    </button>
                    <button class="action-btn">
                      <img class="save" src="<?php if($save) echo '../css/book.png'; else echo '../css/unbook.png'; ?>" 
                      onclick="insertsave(<?php echo $user["userid"]. ',' . $post["itemid"];?>);
                      if(this.src.includes('unbook.png')) this.src = '../css/book.png'; else this.src = '../css/unbook.png';"> 
                    </button>
                    <button class="action-btn">
                      <img class="checkout" src="<?php if($cartitems) echo '../css/cart.png'; else echo '../css/uncart.png'; ?>" 
                      onclick="insertcart(<?php echo $user["userid"]. ',' . $post["itemid"];?>);">
                    </button>
                  </div>
                  <div class="price">PKR / <?php echo $post["price"];?> -</div>
                  <div class="ad-divide"></div>
                  <div class="sponsored">SPONSERED</div>
                  <div class="comment">
                    <input class="input-comment" type="text" id="<?php echo 'comment' . $post["itemid"];?>" placeholder="Leave a comment!..." 
                    onkeypress="clickPress(event)" name="<?php echo $user["userid"]. '/' . $post["itemid"]?>">
                  </div>
                </div>
              </div>
            </div>

  <?php } else { ?>

    <div class="row" id="<?php echo $post["itemid"] ?>">
    <div class="col-sm disappear-1">
      <div class="description">
      <div class="arrow opposite"></div>
      <div class="createdby cropp">Created by</div>
      <div class="artist" onclick="UserClick()"><?php echo $user["fullname"];?></div>
      <p class="details"><?php echo $post["description"];?></p>
      <div class="actions">
                    <button class="action-btn">
                      <img class="love" src="<?php if($like) echo '../css/love.png'; else echo '../css/unlove.png'; ?>" 
                      onclick="insertlike(<?php echo $user["userid"]. ',' . $post["itemid"];?>);
                      if(this.src.includes('unlove.png')) this.src = '../css/love.png'; else this.src = '../css/unlove.png';">
                    </button>
                    <button class="action-btn">
                      <img class="save" src="<?php if($save) echo '../css/book.png'; else echo '../css/unbook.png'; ?>" 
                      onclick="insertsave(<?php echo $user["userid"]. ',' . $post["itemid"];?>);
                      if(this.src.includes('unbook.png')) this.src = '../css/book.png'; else this.src = '../css/unbook.png';"> 
                    </button>
                    <button class="action-btn">
                        <img class="checkout" src="<?php if($cartitems) echo '../css/cart.png'; else echo '../css/uncart.png'; ?>" 
                      onclick="insertcart(<?php echo $user["userid"]. ',' . $post["itemid"];?>);">
                   </button>
                  </div>
      <div class="price">PKR / <?php echo $post["price"];?> -</div>
      <div class="ad-divide"></div>
      <div class="sponsored">SPONSERED</div>
      <div class="comment">
        <input class="input-comment" type="text" id="<?php echo 'comment' . $post["itemid"];?>" placeholder="Leave a comment!..." 
                    onkeypress="clickPress(event)" name="<?php echo $user["userid"]. '/' . $post["itemid"]?>">
      </div>
    </div>
    </div>
    <div class="col-sm">
    <div class="item two">
      <div class="polaroid">
        <?php echo '<img class="slides" src="data:image/jpeg;base64,' . base64_encode($image[0]["image"]) . '"/>'; ?>
        <button class="next-btn" id="btn-left" onclick="nextIndex(-1)">&#10094</button>
        <button class="next-btn" id="btn-right" onclick="nextIndex(1)">&#10095</button>
        <div class="showcasing">Showcasing</div>
        <div class="caption" onclick="ItemPage()">&nbsp;<?php echo $post["title"];?>&nbsp;</div>
      </div>
    </div>
    <?php $j = 0;
        while($j < count($image)-1){ ?>
        <div class="item two">      
          <div class="polaroid">
          </div>
        </div>
    <?php $j++; } ?>
  </div>
  <div class="col-sm disappear-2">
      <div class="description">
      <div class="arrow opposite"></div>
      <div class="createdby cropp">Created by</div>
      <div class="artist"  onclick="UserClick()"><?php echo $user["fullname"];?></div>
      <p class="details"><?php echo $post["description"];?></p>
      <div class="actions">
                    <button class="action-btn">
                      <img class="love" src="<?php if($like) echo '../css/love.png'; else echo '../css/unlove.png'; ?>" 
                      onclick="insertlike(<?php echo $user["userid"]. ',' . $post["itemid"];?>);
                      if(this.src.includes('unlove.png')) this.src = '../css/love.png'; else this.src = '../css/unlove.png';">
                    </button>
                    <button class="action-btn">
                      <img class="save" src="<?php if($save) echo '../css/book.png'; else echo '../css/unbook.png'; ?>" 
                      onclick="insertsave(<?php echo $user["userid"]. ',' . $post["itemid"];?>);
                      if(this.src.includes('unbook.png')) this.src = '../css/book.png'; else this.src = '../css/unbook.png';"> 
                    </button>
                    <button class="action-btn">
                       <img class="checkout" src="<?php if($cartitems) echo '../css/cart.png'; else echo '../css/uncart.png'; ?>" 
                      onclick="insertcart(<?php echo $user["userid"]. ',' . $post["itemid"];?>);">
                   </button>
                  </div>
      <div class="price">PKR / <?php echo $post["price"];?> -</div>
      <div class="ad-divide"></div>
      <div class="sponsored">SPONSERED</div>
      <div class="comment">
        <input class="input-comment" type="text" id="<?php echo 'comment' . $post["itemid"];?>" placeholder="Leave a comment!..." 
                    onkeypress="clickPress(event)" name="<?php echo $user["userid"]. '/' . $post["itemid"]?>">
      </div>
    </div>
    </div>
  </div>

  <?php } $i++; } ?>