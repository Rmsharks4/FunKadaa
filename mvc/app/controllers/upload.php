<?php

class Upload extends Controller 
{
	public function index()
	{
		if(isset($_POST['uploaditem']))
		{
			/*$user = $_SESSION['user'];*/
			$categories = $_POST["category1"] . ',' . $_POST["category2"] . ',' . $_POST["category3"];
			$this->uploaditem(328,$_POST["title"],$_POST["description"],$_POST["price"],$_POST["quantity"],$categories, $_FILES["images"]);
   		} else {
			$this->view('upload/index');
		}
	}

	public function uploaditem($userid='',$title='',$description='',$price='',$quantity='',$category='',$images=[])
	{ 
		$this->model('Item');
		$item = Item::create([
			'userid' => $userid,
			'title' => $title,
			'description' => $description,
			'price' => $price,
			'quantity' => $quantity,
			'category' => $category
		]);

		$files = array();
    	$file_key = array_keys($images);
    	
    	for($i=0;$i<count($images['name']);$i++)
    	{
    	    foreach($file_key as $val)
    	    {
    	        $files[$i][$val] = $images[$val][$i];
    	    }
    	}

		$this->model('ItemImage');
		if($item) 
		{
			$i = 0;
			$size = count($files);
			while ($i < $size) {
				$blob = file_get_contents($files[$i]['tmp_name']);
				$itemimage = ItemImage::create([
					'itemid' => $item->id,
					'image' => $blob
				]);
				$i++;
			}

			session_start();
			$url = 'http://' . $_SERVER['HTTP_HOST'];
			$url .= rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
			$url .= '/newsfeed';
			header('Location: ' . $url, true, 302);
			exit();

		}
	}
}

?>