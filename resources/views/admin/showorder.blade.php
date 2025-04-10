

<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
   
      <!-- partial -->
      
      @include('admin.sidebar')

      @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div class="container" align="center">
    <table>
    <tr style="background-color: grey;">
        <td style="padding:20px;">Customer name</td>
        <td style="padding:20px;">Phone</td>
        <td style="padding:20px;">Address</td>
        <td style="padding:20px;">Product</td>
        <td style="padding:20px;">Price</td>
        <td style="padding:20px;">Quantity</td>
        <td style="padding:20px;">Status</td>
        <td style="padding:20px;">action</td>


    </tr>
    @foreach($order as $orders)
    <tr align="center"style="background-color:black">
        <td style="padding:20px;">{{$orders->name}}</td>
        <td style="padding:20px;">{{$orders->phone}}</td>
        <td style="padding:20px;">{{$orders->address}}</td>
        <td style="padding:20px;">{{$orders->product_name}}</td>
        <td style="padding:20px;">{{$orders->price}}</td>
        <td style="padding:20px;">{{$orders->quantity}}</td>
        <td style="padding:20px;">{{$orders->status}}</td>
        <td style="padding:20px;"><a class="btn btn-success"href="{{url('updatestatus',$orders->id)}}">
            delivered

        </a></td>
       





    </tr>
    @endforeach


    </table>



</div>
</div>

        

          <!-- partial -->
       @include('admin.script')
  </body>
</html>