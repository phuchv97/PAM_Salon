<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
        <div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

            <!-- BEGIN: Aside Menu -->
            <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
                <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
                    <li class="m-menu__item  m-menu__item--active" aria-haspopup="true"><a href="{{route('dashboard')}}" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Dashboard</span>
											<span class="m-menu__link-badge"><span class="m-badge m-badge--danger">2</span></span> </span></span></a></li>
                    <li class="m-menu__section ">
                        <h4 class="m-menu__section-text text-white">Components</h4>
                        <i class="m-menu__section-icon flaticon-more-v2"></i>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon "></i><span class="m-menu__link-text text-white">Payment management</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('list_reservation')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white" >List Reservation</span></a></li> 
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('revenue_management')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">Total Revenue</span></a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon "></i><span class="m-menu__link-text text-white">Post</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('list_post')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">List Post</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('add_post')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">New Post</span></a></li>

                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon "></i><span class="m-menu__link-text text-white">Service</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('list_services')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">List Services</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('add_service')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">New Service</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon "></i><span class="m-menu__link-text text-white">Product</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('list_product')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">List Product</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">New Product</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon "></i><span class="m-menu__link-text text-white">Hair Stylist</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('list_hair_stylist')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">Hair Stylist</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">New hair stylist</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon "></i><span class="m-menu__link-text text-white">Gallery Image</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('list_gallery')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">Gallery Image</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="#" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">New Image</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon "></i><span class="m-menu__link-text text-white">User list</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('list_user')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">User list</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('add_user')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">New User</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon "></i><span class="m-menu__link-text text-white">Comment List</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item " aria-haspopup="true"><a href="{{route('list_comment')}}" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text text-white">Comment List</span></a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <!-- <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-web"></i><span class="m-menu__link-text">Products</span><i
                                    class="m-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                            <ul class="m-menu__subnav">
                                <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"><span class="m-menu__link"><span class="m-menu__link-text">Buttons</span></span></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Button Base</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/base/default.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Default Style</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/base/square.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Square Style</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/base/pill.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Pill Style</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/base/air.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Air Style</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/group.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Group</span></a></li>
                                <li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/dropdown.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Button Dropdown</span></a></li>
                                <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span
                                                class="m-menu__link-text">Button Icon</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                                    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/icon/lineawesome.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Lineawesome
																Icons</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/icon/fontawesome.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Fontawesome
																Icons</span></a></li>
                                            <li class="m-menu__item " aria-haspopup="true"><a href="components/buttons/icon/flaticon.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Flaticon Icons</span></a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li> -->
                    
                </ul>
            </div>

            <!-- END: Aside Menu -->
        </div>

        <!-- END: Left Aside -->
        