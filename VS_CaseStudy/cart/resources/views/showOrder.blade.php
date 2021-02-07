@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>       
@endif 
    

<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		    <thead>
		        <tr class="thead-dark">
				    <th>Customer ID</th>  
                    <th>Receiver Name</th>                  
		            <th>Name</th>
                    <th>Address</th>
		            <th>Post Code</th>
		            <th>Courier ID</th>
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($products as $product)
		            <tr>
					    <td>{{$order->customerID}}</td>
                        <td>{{$order->receiverName}}</td>
		                <td>{{$order->address}}</td>
                        <td>{{$order->postCode}}</td>
                        <td>{{$order->courierID}}</td>

						<td>
		                    <a href="{{route('editOrder', ['id' => $order->id])}}" class="btn btn-warning">
							<i class="fas fa-edit">Edit</i></a> | 
		                
		                
		                    <a href="{{ route('deleteOrder', ['id' => $order->id]) }}" 
                            class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
		                </td>							 
		            </tr> 
                    @endforeach

				
		        </tbody>
		    </table>
		<div class="text-center">
		<a href="{{ route('pdfReport') }}" class="btn btn-info">Download Product List</a>
         </div>
		 <div class="text-center">
			{{ $orders->links() }}
         </div>

	    </div>
</div>

@endsection