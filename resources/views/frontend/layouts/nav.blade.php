<nav class="navbar navbar-default ct-nav bg-ct-grey" >
  <div class="container-fluid padding-50">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header row">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand ct-navbar-brand no-padding" href="#" ><span style="display: inline-block"><i class="material-icons" style="font-size:48px;">local_library</i><small class="hidden-xs">Save the Library</small><small class="visible-xs" style="font-size:12px;">Save the Library</small></span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    {{--  <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form> --}}
      <ul class="nav navbar-nav navbar-right">
        <li class="{{ Request::is('/') ? 'active':'' }}"><a href="/">HOME<span class="sr-only">(current)</span></a></li>
        <li class="{{ Request::is('library') ? 'active':'' }}"><a href="library">LIBRARY</a></li>
        <li class="{{ Request::is('news') ? 'active':'' }}"><a href="news">NEWS</a></li>
        <li class="{{ Request::is('review') ? 'active':'' }}"><a href="review">BOOK REVIEWS</a></li>
        <li class="{{ Request::is('resourcecenter') ? 'active':'' }}"><a href="resourcecenter">RESOURCE CENTER</a></li>
        {{-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li> --}}
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>