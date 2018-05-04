<h1>your cart</h1>
@if (sizeof(Cart::content()) > 0)
	<h3>You have items in cart</h3>
	@ $cartitems = Cart::content();
	@foreach($cartitems as $cart)
		@endforeach 
@else
	<h3>no item</h3>
@endif