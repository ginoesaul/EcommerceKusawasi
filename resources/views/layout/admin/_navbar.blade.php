<div id="navbar" class="navbar navbar-default ace-save-state">
   <div class="navbar-container ace-save-state" id="navbar-container">
      <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
         <span class="sr-only">Alternar barra lateral</span>

         <span class="icon-bar"></span>

         <span class="icon-bar"></span>

         <span class="icon-bar"></span>
      </button>

      <div class="navbar-header pull-left">
         <a href="{{ route('home') }}" class="navbar-brand">
            <small>
               <i class="fa fa-leaf"></i>
               {{ env('APP_NAME') }}
            </small>
         </a>
      </div>

      <div class="navbar-buttons navbar-header pull-right" role="navigation">
         <ul class="nav ace-nav">
           {{-- <li class="grey dropdown-modal">
               <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <i class="ace-icon fa fa-tasks"></i>
                  <span class="badge badge-grey">4</span>
               </a>

               <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                  <li class="dropdown-header">
                     <i class="ace-icon fa fa-check"></i>
                     4 tareas para completar
                  </li>

                  <li class="dropdown-content">
                     <ul class="dropdown-menu dropdown-navbar">
                        <li>
                           <a href="#">
                              <div class="clearfix">
                                 <span class="pull-left">Software actualizado</span>
                                 <span class="pull-right">65%</span>
                              </div>

                              <div class="progress progress-mini">
                                 <div style="width:65%" class="progress-bar"></div>
                              </div>
                           </a>
                        </li>

                        <li>
                           <a href="#">
                              <div class="clearfix">
                                 <span class="pull-left">Hardware potenciado</span>
                                 <span class="pull-right">35%</span>
                              </div>

                              <div class="progress progress-mini">
                                 <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                              </div>
                           </a>
                        </li>

                        <li>
                           <a href="#">
                              <div class="clearfix">
                                 <span class="pull-left">Examen de la Unidad</span>
                                 <span class="pull-right">15%</span>
                              </div>

                              <div class="progress progress-mini">
                                 <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                              </div>
                           </a>
                        </li>

                        <li>
                           <a href="#">
                              <div class="clearfix">
                                 <span class="pull-left">Corrección de errores</span>
                                 <span class="pull-right">90%</span>
                              </div>

                              <div class="progress progress-mini progress-striped active">
                                 <div style="width:90%" class="progress-bar progress-bar-success"></div>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </li>

                  <li class="dropdown-footer">
                     <a href="#">
                        Ver tareas con detalles
                        <i class="ace-icon fa fa-arrow-right"></i>
                     </a>
                  </li>
               </ul>
            </li>

            <li class="purple dropdown-modal">
               <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                  <span class="badge badge-important">8</span>
               </a>

               <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                  <li class="dropdown-header">
                     <i class="ace-icon fa fa-exclamation-triangle"></i>
                     8 Notificaciones
                  </li>

                  <li class="dropdown-content">
                     <ul class="dropdown-menu dropdown-navbar navbar-pink">
                        <li>
                           <a href="#">
                              <div class="clearfix">
                                 <span class="pull-left">
                                    <i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
                                    Nuevos comentarios
                                 </span>
                                 <span class="pull-right badge badge-info">+12</span>
                              </div>
                           </a>
                        </li>

                        <li>
                           <a href="#">
                              <i class="btn btn-xs btn-primary fa fa-user"></i>
                              Bob acaba de registrarse como editor.
                           </a>
                        </li>

                        <li>
                           <a href="#">
                              <div class="clearfix">
                                 <span class="pull-left">
                                    <i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
                                    Nuevas órdenes
                                 </span>
                                 <span class="pull-right badge badge-success">+8</span>
                              </div>
                           </a>
                        </li>

                        <li>
                           <a href="#">
                              <div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Seguidores
													</span>
                                 <span class="pull-right badge badge-info">+11</span>
                              </div>
                           </a>
                        </li>
                     </ul>
                  </li>

                  <li class="dropdown-footer">
                     <a href="#">
                        Ver todas las notificaciones
                        <i class="ace-icon fa fa-arrow-right"></i>
                     </a>
                  </li>
               </ul>
            </li>

            <li class="green dropdown-modal">
               <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
                  <span class="badge badge-success">5</span>
               </a>

               <ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                  <li class="dropdown-header">
                     <i class="ace-icon fa fa-envelope-o"></i>
                     5 Mensajes
                  </li>

                  <li class="dropdown-content">
                     <ul class="dropdown-menu dropdown-navbar">
                        <li>
                           <a href="#" class="clearfix">
                              <img src="" class="msg-photo" alt="Alex's Avatar"/>
                              <span class="msg-body">
                                 <span class="msg-title">
                                    <span class="blue">Alex:</span>
                                    Ciao sociis natoque penatibus et auctor ...
                                 </span>

                                 <span class="msg-time">
                                    <i class="ace-icon fa fa-clock-o"></i>
                                    <span>Hace un momento</span>
                                 </span>
                              </span>
                           </a>
                        </li>
                     </ul>
                  </li>

                  <li class="dropdown-footer">
                     <a href="inbox.html">
                        Ver todos los mensajes
                        <i class="ace-icon fa fa-arrow-right"></i>
                     </a>
                  </li>
               </ul>
            </li>--}}

            <li class="light-blue dropdown-modal">
               <a data-toggle="dropdown" href="#" class="dropdown-toggle">
{{--                  <img class="nav-user-photo" src="assets/images/avatars/user.jpg" alt="Jason's Photo"/>--}}
                  <span class="user-info">
                     <small>Bienvenido,</small>
                     {{ auth()->user()->name }}
                  </span>

                  <i class="ace-icon fa fa-caret-down"></i>
               </a>

               <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

                  <li>
                     <a href="{{ route("user.show",auth()->id()) }}">
                        <i class="ace-icon fa fa-user"></i>
                        Perfil
                     </a>
                  </li>

                  <li class="divider"></li>

                  <li>
                     <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                        <span class="glyphicon glyphicon-log-out"></span>{{ __('Cerrar sesión') }}
                     </a>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                     </form>
                  </li>
               </ul>
            </li>
         </ul>
      </div>
   </div><!-- /.navbar-container -->
</div>