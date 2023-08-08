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

        <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
            <div class=" container" align="center">
                @if(session()->has('message'))



                <div class="alert alert-info">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>

                    {{session()->get('message')}}

                </div>


                @endif
                <table>

                    <tr class="bg-gray-100">



                        <td style="padding:10x;">Title</td>
                        <td style="padding:10px;">Description</td>
                        <td style="padding:10px;">Quntity</td>
                        <td style="padding:10px;">Price</td>
                        <td style="padding:10px;">Image</td>
                        <td style="padding:10px;">Update</td>
                        <td style="padding:10px;">Delete</td>

                    </tr>
                    @foreach ($data as $product)


                    <tr class="bg-black items-center" align="center">



                        <td >{{$product->title}}</td>
                        <td >{{$product->description}}</td>
                        <td >{{$product->quantity}}</td>
                        <td >{{$product->price}}</td>
                        <td >
                            <img height="100" width="100" src="/productimage/{{$product->image}}"                            {{$product->image}}

                            alt="">


                        </td>

                        <td><a class="btn btn-primary" href="{{url('updateview',$product->id)}}">Update</a>

                        </td>



                        <td><a class="btn btn-error" href="{{url('deleteproduct',$product->id)}}"> Delete
                        </a>
                            </td>

                    </tr>
                    @endforeach
                </table>
      </div>

    </div>

   @include('admin.scripts')
  </body>
</html>
