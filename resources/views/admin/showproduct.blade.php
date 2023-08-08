<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.head')
  </head>
  <body>
    <div class="container-scroller">

     @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">
            <div class=" container" align="center">

                <table>

                    <tr class="bg-gray-100">



                        <td style="padding:10x;">Title</td>
                        <td style="padding:10px;">Description</td>
                        <td style="padding:10px;">Quntity</td>
                        <td style="padding:10px;">Price</td>
                        <td style="padding:10px;">Image</td>
                    </tr>
                    @foreach ($data as $product)


                    <tr class="bg-black items-center">



                        <td >{{$product->title}}</td>
                        <td >{{$product->description}}</td>
                        <td >{{$product->quantity}}</td>
                        <td >{{$product->price}}</td>
                        <td ></td>




                    </tr>
                    @endforeach
                </table>
      </div>

    </div>

   @include('admin.scripts')
  </body>
</html>
