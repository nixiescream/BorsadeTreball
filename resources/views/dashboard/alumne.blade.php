@extends('layouts.panel')

@section('header')
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#"><i class="icon-bell"></i><span class="badge badge-pill badge-danger">5</span></a>
        </li>
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="img/avatars/6.jpg" class="fa fa-user" alt="{{ Auth::user()->email }}">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span class="badge badge-info">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span class="badge badge-success">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span class="badge badge-danger">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span class="badge badge-warning">42</span></a>
                <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span class="badge badge-secondary">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         {{ csrf_field() }}
                     </form>
            </div>
        </li>
    </ul>
  </header>
@endsection


@section('sidebar')
<div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/alumne', $alumne->user_id) }}"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-primary">NEW</span></a>
          </li>

          <li class="nav-title">
            Perfil
          </li>
          <li class="nav-item">
            <a href="{{ url('/alumne/editarAlumne',$alumne->user_id) }}" class="nav-link" active><i class="icon-pencil"></i> Editar perfil</a>
          </li>
          <li class="nav-item">
            <a href="typography.html" class="nav-link"><i class="icon-pencil"></i> Configuració</a>
          </li>
          <li class="nav-title">
            Accions
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i>Ofertes</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="base/breadcrumb.html"><i class="icon-puzzle"></i> Breadcrumb</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/cards.html"><i class="icon-puzzle"></i> Cards</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/carousel.html"><i class="icon-puzzle"></i> Carousel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/collapse.html"><i class="icon-puzzle"></i> Collapse</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/forms.html"><i class="icon-puzzle"></i> Forms</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/jumbotron.html"><i class="icon-puzzle"></i> Jumbotron</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/list-group.html"><i class="icon-puzzle"></i> List group</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/navs.html"><i class="icon-puzzle"></i> Navs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/pagination.html"><i class="icon-puzzle"></i> Pagination</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/popovers.html"><i class="icon-puzzle"></i> Popovers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/progress.html"><i class="icon-puzzle"></i> Progress</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/switches.html"><i class="icon-puzzle"></i> Switches</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/tables.html"><i class="icon-puzzle"></i> Tables</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/tabs.html"><i class="icon-puzzle"></i> Tabs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="base/tooltips.html"><i class="icon-puzzle"></i> Tooltips</a>
              </li>
            </ul>
          </li>
          <li class="divider"></li>
          <li class="nav-title">
            Extras
          </li>
          <li class="nav-item nav-dropdown">
            <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i>Configuració</a>
            <ul class="nav-dropdown-items">
              <li class="nav-item">
                <a class="nav-link" href="views/pages/login.html" target="_top"><i class="icon-star"></i> Usuari</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="views/pages/register.html" target="_top"><i class="icon-star"></i> Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="views/pages/404.html" target="_top"><i class="icon-star"></i> Error 404</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="views/pages/500.html" target="_top"><i class="icon-star"></i> Error 500</a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
@endsection


@section('breadcrumb')
<ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>

        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
          </div>
        </li>
      </ol>
@endsection


@section('content')
<form method="post" action="{{ url('/alumne') }}">
    {{ csrf_field() }}
    <input type="hidden" value="{{ $alumne->user_id }}" name="id">
</form>
<div class="content container-fluid">
    <div class="card border-info mb-3 rounded">
        <div class="card-header bg-info">
            Perfil
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $alumne->alumne_nom }} {{ $alumne->alumne_cognom1 }} {{ $alumne->alumne_cognom2 }}</h5>
        </div>
    </div>
</div>
<div class="content container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Estudis
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Idiomes
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Idioma</th>
                                <th scope="col">Nivell</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Català</td>
                                <td>Natiu</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Castellà</td>
                                <td>Natiu</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Anglès</td>
                                <td>B2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-info mb-3 rounded">
                <div class="card-header bg-info">
                    Extras
                </div>
                <div class="card-body">
                    <h5 class="card-title">Extra 1</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                    <h5 class="card-title">Extra 2</h5>
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                    </ul>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
   </div>
</div>
@endsection


@section('aside')
<aside class="aside-menu">
      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="timeline" role="tabpanel">
          <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
            <small><b>Today</b></small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout callout-warning m-0 py-3">
            <div class="avatar float-right">
              <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
            </div>
            <div>Meeting with
              <strong>Lucas</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
            <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-info m-0 py-3">
            <div class="avatar float-right">
              <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
            </div>
            <div>Skype with
              <strong>Megan</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
            <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line </small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
            <small><b>Tomorrow</b></small>
          </div>
          <hr class="transparent mx-3 my-0">
          <div class="callout callout-danger m-0 py-3">
            <div>New UI Project -
              <strong>deadline</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
            <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
            <div class="avatars-stack mt-2">
              <div class="avatar avatar-xs">
                <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
            </div>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-success m-0 py-3">
            <div>
              <strong>#10 Startups.Garden</strong> Meetup</div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
            <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA </small>
          </div>
          <hr class="mx-3 my-0">
          <div class="callout callout-primary m-0 py-3">
            <div>
              <strong>Team meeting</strong>
            </div>
            <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
            <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ </small>
            <div class="avatars-stack mt-2">
              <div class="avatar avatar-xs">
                <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
              <div class="avatar avatar-xs">
                <img src="img/avatars/8.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
              </div>
            </div>
          </div>
          <hr class="mx-3 my-0">
        </div>
        <div class="tab-pane p-3" id="messages" role="tabpanel">
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
          <hr>
          <div class="message">
            <div class="py-3 pb-5 mr-3 float-left">
              <div class="avatar">
                <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="avatar-status badge-success"></span>
              </div>
            </div>
            <div>
              <small class="text-muted">Lukasz Holeczek</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</small>
          </div>
        </div>
        <div class="tab-pane p-3" id="settings" role="tabpanel">
          <h6>Settings</h6>

          <div class="aside-options">
            <div class="clearfix mt-4">
              <small><b>Option 1</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 2</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
            <div>
              <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 3</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input">
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
          </div>

          <div class="aside-options">
            <div class="clearfix mt-3">
              <small><b>Option 4</b></small>
              <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                <input type="checkbox" class="switch-input" checked>
                <span class="switch-label" data-on="On" data-off="Off"></span>
                <span class="switch-handle"></span>
              </label>
            </div>
          </div>

          <hr>
          <h6>System Utilization</h6>

          <div class="text-uppercase mb-1 mt-4">
            <small><b>CPU Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">348 Processes. 1/4 Cores.</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>Memory Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">11444GB/16384MB</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>SSD 1 Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">243GB/256GB</small>

          <div class="text-uppercase mb-1 mt-2">
            <small><b>SSD 2 Usage</b></small>
          </div>
          <div class="progress progress-xs">
            <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <small class="text-muted">25GB/256GB</small>
        </div>
      </div>
    </aside>
@endsection


@section('footer')
<footer class="app-footer">
    <span>Enborsa't &copy;.</span>
    <span class="ml-auto">Powered by <a href="#">Enborsa't</a></span>
  </footer>
@endsection
