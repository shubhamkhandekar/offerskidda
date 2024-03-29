<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128559426-1"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-128559426-1');
</script>
<style type="text/css">
	.notification{
		margin-top: 25px;
		width: 25px;
	}
</style>

<div class="container-fluid hedr">
<div class="col-md-1 col-xs-1 no-mob-pad">
<div id="sidebarCollapse" class="menu-btn"  >
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
  </div>
</div>
<div class="col-md-2 col-xs-4 no-mob-pad"><a href=""><img src="" class="img-responsive logo pull-left"/></a></div>

<div class="col-md-8 col-xs-5 no-mob-pad">
  <div class="col-md-3">
<div class="notification"> 
  <div class="dropdown">
  <!--   <button onclick="getnotification()" class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">My Alerts<span id="divcnt"></span>
    <span class="caret"></button></span> -->
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1" id="notify" style="width: 300px; height: 200px; overflow: auto">     
         
    </ul>
  </div>
</div>
</div>
<div class="pull-right log-txt">
<p><span class="hidden-xs">Welcome :</span><b>  @if($username= Session::get('username')) {{ucfirst($username)}}  @endif</b></p>
<p><span class="hidden-xs">Last login :</span> <b>@if($last_login= Session::get('last_login')) <?php $date = date_create($last_login); ?> {{date_format($date, 'd/m/y : g:i A')}}  @endif</b></p>
</div>
</div>
<div class="col-md-1 col-xs-2 no-mob-pad">
	<a href="{{url('log-out')}}" class="pull-right log-btn"><span class="logout-btn"><img src="{{url('images/icon/exit.png')}}"></span></a>
</div>
<span class="search-btn hidden-md hidden-lg pull-right"><img src="{{url('images/icon/search.png')}}"></span>
</div>