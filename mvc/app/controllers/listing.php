<?php

class Listing extends Controller 
{

	public function index($itemid=41)
	{
		$this->model('Item');
		$this->model('User');
		$this->model('ItemImage');
		$this->model('Like');
		$this->model('Save');
		$this->model('Cart');
		$this->model('Comment');
		$post = Item::where('itemid',$itemid)->first();
		if($post) {
			$poster = User::where('userid',$post->getOriginal('userid'))->first();
			$images = ItemImage::where('itemid',$post->getOriginal('itemid'))->get();
			$user = User::where('userid',328)->first();
			$like = Like::where('itemid',$itemid)->where('userid',$user->getOriginal('userid'))->first();
			if(!$like) {
				$like = 0;
			} else {
				$like = 1;
			}
			$save = Save::where('itemid',$itemid)->where('userid',$user->getOriginal('userid'))->first();
			if(!$save) {
				$save = 0;
			} else {
				$save = 1;
			}
			$cart = Cart::where('userid',$user->getOriginal('userid'))->get();
			$cart = count($cart);
			$comments = Comment::where('itemid',$itemid)->get();
			$this->view('listing/index',['fullname' => $user->getOriginal('fullname'), 'role' => $user->getOriginal('role'), 'post' => $post, 'user' => $poster, 'images' => $images, 'like' => $like, 'save' => $save, 'cart' => $cart, 
			"comments" => $comments]);
		}
	}

}

?>