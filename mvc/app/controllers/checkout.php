<?php

class CheckOut extends Controller 
{

	public function index()
	{
		$this->model('Cart');
		$this->model('Item');
		$carts = Cart::where('userid',328)->get();
		$itemids = array();
		$titles = array();
		$quantities = array();
		$prices = array();
		$cart = 0;
		$total = 0;
		for($i=0;$i<count($carts);$i++) {
			$itemids[$i] = $carts[$i]->getOriginal('itemid');
			$item = Item::where('itemid',$itemids[$i])->first();
			$quantities[$i] = $carts[$i]->getOriginal('quantity');
			$titles[$i] = $item->getOriginal('title');
			$prices[$i] = $item->getOriginal('price');
			$cart += $quantities[$i];
			$total += $quantities[$i] * $item->getOriginal('price');
		}

		if(isset($_POST['checkoutorder']))
		{
			$this->checkoutorder(328,1,$itemids,$quantities,$_POST["firstName"] . $_POST["lastName"],$_POST["phone"],$_POST["email"],$_POST["address"],
				$_POST["city"],$_POST["country"],$_POST["province"],$_POST["zip"],$_POST["save"],$_POST["bill"],$_POST["name"],$_POST["cardnum"],
				$_POST["expiration"],$_POST["cvv"]);
		} else {
			$this->view('checkout/index',["itemids" => $titles, "prices" => $prices, "quantities" => $quantities, "total" => $total, "cart" => $cart]);
		}
	}

	public function checkoutorder($userid='',$promoid='',$itemids=[],$quantities=[],$fullname='',$phone='',$email='',$address='',$city='',$country='',
		$province='',$zip='',$save='',$bill='',$name='',$cardnum='',$expiration='',$cvv='')
	{
		$this->model('Order');
		$order = Order::create([
			'userid' => $userid,
			'status' => 'Placed (Pending)',
			'promoid' => $promoid
		]);

		$this->model('OrderItem');
		$this->model('OrderDetail');
		$this->model('OrderPayment');
		$this->model('UserLocation');
		$this->model('Cart');
		
		if($order)
		{
			$i = 0;
			$size = count($itemids);
			while ($i < $size) {
				$orderitem = OrderItem::create([
					'orderid' => $order->id,
					'itemid' => $itemids[$i],
					'quantity' => $quantities[$i]
				]);
				$i++;
			}

			$cart = Cart::where('userid',$userid)->delete();
		
			$orderdetail = OrderDetail::create([
				'orderid' => $order->id,
				'fullname' => $fullname,
				'phone' => $phone,
				'email' => $email,
				'address' => $address,
				'city' => $city,
				'$country' => $country,
				'province' => $province,
				'zip' => $zip,
				'bill' => $bill
			]);

			if($save=='Save this information for next time') {
				$userlocation = UserLocation::create([
					'userid' => $userid,
					'address' => $address,
					'city' => $city,
					'$country' => $country,
					'province' => $province,
					'zip' => $zip
				]);
			}

			if($bill=='Credit/Debit card') {
				$orderpayment = OrderPayment::create([
					'orderid' => $order->id,
					'name' => $name,
					'cardnum' => $cardnum,
					'expiration' => $expiration,
					'cvv' => $cvv
				]);
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