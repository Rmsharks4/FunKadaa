<?php

class Newsfeed extends Controller 
{

	public function index()
	{
		if(isset($_GET['like'])) {
			$args = array();
			$args = explode(",", $_GET['like']);
			$this->insertlike($args[0],$args[1]);
		} else if(isset($_GET['save'])) {
			$args = array();
			$args = explode(",", $_GET['save']);
			$this->insertsave($args[0],$args[1]);
		} else if(isset($_GET['cart'])) {
			$args = array();
			$args = explode(",", $_GET['cart']);
			$this->insertcart($args[0],$args[1]);
		} else if(isset($_GET['comment'])) {
			$args = array();
			$args = explode("/", $_GET['comment']);
			$this->insertcomment($args[0],$args[1],$args[2]);
		} else {
			$this->load(0);
		}
	}

	public function load($id='')
	{
		$this->model('Item');
		$this->model('User');
		$this->model('ItemImage');
		$this->model('Like');
		$this->model('Save');
		$this->model('Cart');
		$this->model('Comment');
		$posts = Item::where('itemid','>',$id)->orderBy('itemid', 'DESC')->limit(5)->get();
		$totals = Item::get();
		$totals = $totals->count();
		if($posts) {
		$posters = array();
		$images = array();
		$likes = array();
		$saves = array();
		$cartitems = array();
		$user = User::where('userid',328)->first();
		$cart = 0;
		for($i=0;$i<count($posts);$i++) {
				$posters[$i] = User::where('userid',$posts[$i]->getOriginal('userid'))->first();
				$images[$i] = ItemImage::where('itemid',$posts[$i]->getOriginal('itemid'))->get();
				$likes[$i] = Like::where('itemid',$posts[$i]->getOriginal('itemid'))->where('userid',$user->getOriginal('userid'))->first();
				if(!$likes[$i]) {
					$likes[$i] = 0;
				} else {
					$likes[$i] = 1;
				}
				$saves[$i] = Save::where('itemid',$posts[$i]->getOriginal('itemid'))->where('userid',$user->getOriginal('userid'))->first();
				if(!$saves[$i]) {
					$saves[$i] = 0;
				} else {
					$saves[$i] = 1;
				}
				$cartitems[$i] = Cart::where('itemid',$posts[$i]->getOriginal('itemid'))->where('userid',$user->getOriginal('userid'))->first();
				if(!$cartitems[$i]) {
					$cartitems[$i] = 0;
				} else {
					$cart += $cartitems[$i]->getOriginal('quantity');
					$cartitems[$i] = 1;
				}
			}
				$this->view('newsfeed/index',['fullname' => $user->getOriginal('fullname'), 'role' => $user->getOriginal('role'), 'posts' => $posts, 
					'users' => $posters, 'images' => $images, 'likes' => $likes, 'saves' => $saves, 'cartitems' => $cartitems, 'cart' => $cart, 
					'totals' => $totals]);
		}
	}

	public function loadmore($id='')
	{
		$this->model('Item');
		$this->model('User');
		$this->model('ItemImage');
		$this->model('Like');
		$this->model('Save');
		$this->model('Cart');
		$this->model('Comment');
		$posts = Item::where('itemid','<',$id)->orderBy('itemid', 'DESC')->limit(5)->get();
		if($posts) {
		$posters = array();
		$images = array();
		$likes = array();
		$saves = array();
		$cartitems = array();
		$user = User::where('userid',328)->first();
		$cart = 0;
		for($i=0;$i<count($posts);$i++) {
				$posters[$i] = User::where('userid',$posts[$i]->getOriginal('userid'))->first();
				$images[$i] = ItemImage::where('itemid',$posts[$i]->getOriginal('itemid'))->get();
				$likes[$i] = Like::where('itemid',$posts[$i]->getOriginal('itemid'))->where('userid',$user->getOriginal('userid'))->first();
				if(!$likes[$i]) {
					$likes[$i] = 0;
				} else {
					$likes[$i] = 1;
				}
				$saves[$i] = Save::where('itemid',$posts[$i]->getOriginal('itemid'))->where('userid',$user->getOriginal('userid'))->first();
				if(!$saves[$i]) {
					$saves[$i] = 0;
				} else {
					$saves[$i] = 1;
				}
				$cartitems[$i] = Cart::where('itemid',$posts[$i]->getOriginal('itemid'))->where('userid',$user->getOriginal('userid'))->first();
				if(!$cartitems[$i]) {
					$cartitems[$i] = 0;
				} else {
					$cart += $cartitems[$i]->getOriginal('quantity');
					$cartitems[$i] = 1;
				}
			}
				$this->view('newsfeed/post',['fullname' => $user->getOriginal('fullname'), 'role' => $user->getOriginal('role'), 'posts' => $posts, 
					'users' => $posters, 'images' => $images, 'likes' => $likes, 'saves' => $saves, 'cartitems' => $cartitems, 'cart' => $cart]);
		}
	}

	public function insertlike($userid='',$itemid='')
	{
		$this->model('Like');
		$like = Like::where('userid',$userid)->where('itemid',$itemid)->first();
		if($like) {
			$like = Like::where('userid',$userid)->where('itemid',$itemid)->delete();
		} else {
			$like = Like::create([
				'userid' => $userid,
				'itemid' => $itemid
			]);
		}
	}

	public function insertsave($userid='',$itemid='')
	{
		$this->model('Save');
		$save = Save::where('userid',$userid)->where('itemid',$itemid)->first();
		if($save) {
			$save = Save::where('userid',$userid)->where('itemid',$itemid)->delete();
		} else {
			$save = Save::create([
				'userid' => $userid,
				'itemid' => $itemid
			]);
		}	
	}

	public function insertcart($userid='',$itemid='')
	{
		$this->model('Cart');
		$cart = Cart::where('userid',$userid)->where('itemid',$itemid)->first();
		if($cart) {
			$quantity = $cart->getOriginal('quantity') + 1;
			$cart = Cart::where('userid',$userid)->where('itemid',$itemid)->update(['quantity' => $quantity]);
		} else {
			$cart = Cart::create([
				'userid' => $userid,
				'itemid' => $itemid,
				'quantity' => 1
			]);
		}
	}	

	public function insertcomment($userid='',$itemid='',$comment='')
	{
		$this->model('Comment');
		$comment = Comment::create([
			'comment' => $comment,
			'userid' => $userid,
			'itemid' => $itemid
		]);
	}

	public function search($query='')
	{
		session_start();
			$_SESSION['query'] = $query;
			if(isset($_SESSION['query'])) {
				$url = 'http://' . $_SERVER['HTTP_HOST'];
				$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$url .= '/searchresults';
				header('Location: ' . $url, true, 302);
				exit();
   			}
	}

	public function profile($userid='')
	{
		session_start();
			$_SESSION['profile'] = $userid;
			if(isset($_SESSION['profile'])) {
				$url = 'http://' . $_SERVER['HTTP_HOST'];
				$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$url .= '/profile';
				header('Location: ' . $url, true, 302);
				exit();
   			}
	}

	public function listing($itemid='')
	{
		session_start();
			$_SESSION['item'] = $itemid;
			if(isset($_SESSION['item'])) {
				$url = 'http://' . $_SERVER['HTTP_HOST'];
				$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$url .= '/listing';
				header('Location: ' . $url, true, 302);
				exit();
   			}
	}

}

?>