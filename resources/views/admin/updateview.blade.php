<x-app-layout>
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>


    <base href="/public">
@include('admin.head')
  </head>
  <body>
    <div class="container-scroller">

     @include('admin.sidebar')
      <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')

      </div>

    </div>

   @include('admin.scripts')
  </body>
</html>
