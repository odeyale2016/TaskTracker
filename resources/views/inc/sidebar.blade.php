<div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="{{'\dashboard'}}" class="waves-effect waves-primary">
                                    <i class="ti-home"></i><span> Dashboard </span>
                                </a>
                            </li>

                            @if (auth()->user()->role == 'admin')

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-user"></i><span> Setup User </span> 
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('users.create')}}">Add User</a></li>
                                    
                                    <li><a href="{{route('users.index')}}">View User</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-paint-bucket"></i> <span> Setup Projects </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('projects.create')}}">Add Project</a></li>
                                    <li><a href="{{route('projects.index')}}">View Projects</a></li>
                                    
                                </ul>
                            </li>

                          @endif

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary">
                                    <i class="ti-menu-alt"></i><span> Setup Tasks </span> 
                                    <span class="menu-arrow"></span> 
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('tasks.create')}}">Add Tasks</a></li>
                                    <li><a href="{{route('tasks.index')}}">View Tasks </a></li>
                                   
                                </ul>
                            </li>
                            
                           
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-key"></i><span>
                                        {{ __('Logout') }}</span>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        <div class="clearfix"></div>
                    </div>