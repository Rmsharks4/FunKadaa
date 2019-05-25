<?php

class Profile extends Controller 
{

	public function index($userid=328)
	{
		if(isset($_GET['delete'])) {

			$this->deleteitem($_GET['delete']);
		} else if(isset($_GET['update'])) {
			$args = array();
			$args = explode(",", $_GET['like']);
			$this->updateitem($args[0],$args[1],$args[2],$args[3],$args[4]);
		} else {
		$this->model('Item');
		$this->model('User');
		$this->model('ItemImage');
		$this->model('Save');
		$this->model('Cart');
		$this->model('Order');
		$this->model('OrderItem');
		$this->model('UserFollow');
		$profiler = User::where('userid',$userid)->first();
		if($profiler) {
			$posts = Item::where('userid',$userid)->orderBy('itemid', 'DESC')->get();
			$upimages = array();
			$saveimgs = array();
			$user = User::where('userid',328)->first();
			$saves = Save::where('userid',$userid)->orderBy('itemid', 'DESC')->get();
			$orders = Order::where('userid',$userid)->orderBy('orderid', 'DESC')->get();
			$orderitems = array();
			$cart = Cart::where('userid',$user->getOriginal('userid'))->get();
			$cart = count($cart);
			$following = UserFollow::where('userfollowerid',$userid)->first();
			if(!$following) $following = 0;
			$followers = UserFollow::where('userfollowingid',$userid)->first();
			if(!$followers) $followers = 0;
			
			for($i=0;$i<count($posts);$i++) {
				$upimages[$i] = ItemImage::where('itemid',$posts[$i]->getOriginal('itemid'))->first();
			}
			for($i=0;$i<count($saves);$i++) {
				$saveimgs[$i] = ItemImage::where('itemid',$posts[$i]->getOriginal('itemid'))->first();
			}
			for($i=0;$i<count($orders);$i++) {
				$orderitems = OrderItem::where('orderid',$orders[$i]->getOriginal('orderid'))->get();
			}
			$this->view('profile/index',['fullname' => $profiler->getOriginal('fullname'), 'username' => $user->getOriginal('username'), 
				'followers' => $followers, 'following' => $following, 'posts' => $posts, 
				'saves' => $saves, 'cart' => $cart, 'upimages' => $upimages, 'saveimages' => $saveimgs, 'orders' => $orders, 
				'orderitems' => $orderitems]);
			}
		}
	}

	public function update($itemid='',$title='',$quantity='',$description='',$price='') {
		$this->model('Item');
		$post = Item::where('itemid',$itemid)->update(
			[ "title" => $title,
				"quantity" => $quantity,
				"description" => $description,
				"price" => $price
			]);
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

	public function deleteitem($itemid='') {
		$this->model('Item');
		$post = Item::where('itemid',$itemid)->delete();
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

}

?>