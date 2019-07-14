<!DOCTYPE html>
<html>

         @include('include.head')
<body>
 
 
             @include('include.header')

             <div class="wrapper">
             @include('include.sidebars')
             <div id="content">
              @yield('content')
             </div>
             </div>
 
  

   <div id="loading" style="position: absolute;z-index: 1000;left: 44%;top: 40%; ">
   <img src="{{url('loading.gif')}}" width="100" />

  </div>  
</body>
 @include('include.footer')
 @include('include.script') 
 @include('include.menujs') 
</html>
 