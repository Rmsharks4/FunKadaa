<?php

class SearchResults extends Controller 
{

	public function index($query='')
	{
		$this->model('Item');
		$this->model('User');
		$this->model('ItemImage');
		$this->model('Cart');
		$posts = Item::where('title', 'LIKE', '%'.$query.'%')->get();
		$people = User::where('fullname', 'LIKE', '%'.$query.'%')->get();
		$images = array();
		$user = User::where('userid',328)->first();
		for($i=0;$i<count($posts);$i++) {
			$images[$i] = ItemImage::where('itemid',$posts[$i]->getOriginal('itemid'))->first();
		}
		$this->view('searchresults/index',['fullname' => $user->getOriginal('fullname'), 'role' => $user->getOriginal('role'), 'posts' => $posts, 
			'people' => $people, 'images' => $images]);
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