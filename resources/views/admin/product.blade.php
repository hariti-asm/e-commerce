<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.head')

<style type="text/css">

/* .title{
color: white;
padding-top: 25px;
font-size:25px;


} */
label{


    display: inline-block;
    width:200px;
}

</style>
</head>
  <body>
    <div class="container-scroller">

     @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper">
       <div class=" container" align="center">
        <h1 class="text-white pt-6 text-2xl"> Add Products</h1>

@if(session()->has('message'))

<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">x</button>
{{session()->get('message')}}
</div>


@endif
        <form   action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="p-2">
<label  > Product title</label>
<input class="text-black" type="text" name="title" placeholder="Give a product title" required="">

    </div>
    <div class="p-2">

        <label > Price</label>
        <input class="text-black" type="number" name="price" placeholder="enter a price" required="">

            </div>
            <div class="p-2">

                <label  > Description</label>
                <input class="text-black" type="text" name="des" placeholder="Give a description" required="">

                    </div>
    <div class="p-2">

        <label  > Quantity</label>
        <input class="text-black" type="text" name="quantity" placeholder="Product quantity" required="">

            </div>
            <div class="p-2">
                <input class="text-black" type="file" name="file" >

                    </div>
                    <div class="p-2">

                        <input class="text-black" class="btn btn-success" type="submit"  placeholder="Give a product title" required="">

                            </div>
                        </form>
    </div>
    </div>

      </div>

    </div>

   @include('admin.scripts')
  </body>
</html>
