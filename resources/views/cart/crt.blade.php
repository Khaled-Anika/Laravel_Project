<html>
<head>
	<link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
</head>
<table width="80%" height="50" cellspacing="0" cellpadding="10" border="1" align="center">
    <tr>
        <td colspan="2" valign="middle" height="30">
            <table width="100%">
                <tr>
                    <td>
                        <a href="/customer" target="contentFrame">
                            <img alt="SHEBA" width="130" height="70" src="images/Capture.png">
                        </a>
                    </td>
                    <td align="right">
                    	<font size="4">
                        Logged in as <a href="/customer_profile/{{session('user')->username}}" target="contentFrame">{{session('user')->username}}</a>&nbsp;|
                        <a href="/logout">Logout</a>
                    	</font>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    	<table width="80%" height = "85%" align="center" cellspacing="1" cellpadding="10" border="1" bgcolor="white">
		 <tr>
		    <td width="200" valign="top">
			<font size="4">
		    	<ul>
		    	<li><a href="/medicine" target="contentFrame"><label>Medicine List</label></a></li><br><br>
		        <li><a href="/cart" target="contentFrame"><label>cart</label></a></li><br><br>
		        <li><a href="/blacklisted" target="contentFrame"><label>Black Listed Drugs</label></a></li><br><br>
		    	</ul>
		    </font>
		    </td>
		    <td>
		    	<fieldset>
			    <legend><b>MY CART</b></legend>
				<!--<form >-->
		        <table width="90%" height="90%" border="1" cellspacing="0" cellpadding="5">
			        @if (session()->has('success_message'))
                	<div class="alert alert-success text-success">
                    	<label><b>{{ session()->get('success_message') }}</b></label> &nbsp;&nbsp; <a href="/medicine">Back</a>
                	</div>
           		 	@endif
			       	@if (sizeof(Cart::content()) == 0)
			       	<h3>There is no item in your cart</h3>
			       	@else
					<h3><i>You have {{ Cart::count()  }} item(s) in cart</i></h3>
					<tr>
			            <th>Med Id</th>
			            <th>Name</th>
			            <th>Price</th>
			            <th>Sub-total Price</th>
			            <th>Quantity</th>
			        </tr>
			        @foreach(Cart::content() as $cart)	
					
                    <input type="hidden" name="quantity" value="{{Cart::count()}}">
                    <input type="hidden" name="username" value="{{session('user')->username}}">
					<input type="hidden" name="id" value="{{$cart->id}}">		        
		            <tr>
		            	<td align="center">{{$cart->id}}</td>
		                <td align="center">{{$cart->name}}</td>
		                <td align="center">{{$cart->price}}</td>
		                <td align="center">{{$cart->subtotal}}/-</td>
		                <td align="center">
		                	<select name="quantity" class="quantity" data-id="{{$cart->rowId}}">
	                		@for ($i = 1; $i < 5 + 1 ; $i++)
                                <option {{ $cart->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                            @endfor
		                	</select>
		                </td>
		                <input type="hidden" name="qty" value="$cart->quantity">
	                <form action="{{ route('cart.destroy', $cart->rowId) }}" method="POST">
					{{ csrf_field() }}
                    {{ method_field('DELETE') }}
		                <!--<td><a href="/cart/{{$cart->id}}/delete" onclick="return confirm('Are you sure?')">Remove</a></td>-->
		                <td align="center"><button type="submit" onclick="return confirm('Are you sure?')">Remove</button></td>
		            </form>
		            </tr>
			        @endforeach
			        <table border="0" cellpadding="10">
			        	<tr><br>
			        		<td><i>Total Cost:</i></td>
			        		<td>{{Cart::subtotal()}}/-</td>
			        		<form method="post" action="{{ route('checkout.store') }}">
			        		<div align="right">
			        			<td><button type="submit">Check out</button></td>
			        		</div>
			        		</form>
			        	</tr>
		        	</table>
					@endif 
					<div><br></div>
		        </table>
		        <div class="cart-totals-subtotal">
		    	</div>
			</fieldset>
		    </td>
		</tr>
		</table>
	</tr>
	<tr>
		<table width="80%" height="7%" align="center" cellspacing="0" cellpadding="10" border="1" bgcolor="white">	
		<tr>
			<td align="center" height="30">
				Copyright &copy; 2018
			</td>
		</tr>
		</table>
	</tr>
</table>
</body>
</html>

<script src="{{ asset('js/app.js') }}"></script>
<script>
	(function(){
		const classname = document.querySelectorAll('.quantity')
		Array.from(classname).forEach(function(element){
			element.addEventListener('change', function(){
				const id = element.getAttribute('data-id')
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value
                    })
                    .then(function (response) {
                         //console.log(response);
                        window.location.href = '{{ route('cart.index') }}'
                    })
                    .catch(function (error) {
                         console.log(error);
                        //window.location.href = '{{ route('cart.index') }}'
                    }); 
			})
		})
	})();
</script>

<!-- <script>
$(document).ready(function(){
	@foreach(Cart::content() as $cart)	
	$("#upCart{{$cart->id}}").on('change keyup',function(){
		var newQuantity = $("#upCart{{$cart->id}}").val();	
		alert(newQuantity);
	});
	@endforeach
});
</script> -->