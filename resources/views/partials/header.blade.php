<nav class="navbar navbar-inverse">
 <div class="container-fluid">
   <div class="navbar-header">
     <a class="navbar-brand" href="#">BLOG</a>
   </div>
   <ul class="nav navbar-nav">
     <li class="active"><a href="/posts">Home</a></li>
     @if(Auth::check())
      <li><a href="/posts/create">Create Post</a></li>
     @endif
   </ul>
   <ul class="nav navbar-nav navbar-right">
      @if(!Auth::check())
     <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
     <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
     @endif
     @if(Auth::check())
     <li>
       <a href="#">{{Auth::user()->name}}</a>
     </li>
     <li>
       <a href="/logout">logout</a>
     </li>
     @endif
   </ul>
 </div>
</nav>
