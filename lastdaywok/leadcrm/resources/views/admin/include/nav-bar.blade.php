@php
$currentUrl = url()->current();
$siteSetting = DB::table('site_setting')->where('id', 1)->first();
@endphp



            {{-- Create Role → MENU ID = 0 --}}
            {{-- @if(canAccessMenu(0))
            <li class="{{ $currentUrl == route('admin/role/list') ? 'active' : '' }}">
                <a href="{{route('admin/role/list')}}">
                    <span class="nav-icon"><i class="fa fa-cog"></i></span>
                    <span class="nav-text">Create Role</span>
                </a>
            </li>
            @endif --}}

            {{-- Assign Role → MENU ID = 2 --}}
           {{--  @if(canAccessMenu(1))
            <li class="{{ $currentUrl == route('admin/tbl_admin/list') ? 'active' : '' }}">
                <a href="{{route('admin/tbl_admin/list')}}">
                    <span class="nav-icon"><i class="fa fa-cog"></i></span>
                    <span class="nav-text">Assign Role</span>
                </a>
            </li>
            @endif --}}


            {{-- Site Setting → MENU ID = 2 --}}
            @if(canAccessMenu(2))
            <li class="{{ $currentUrl == route('admin/site_setting/edit',['id'=>1]) ? 'active' : '' }}">
                <a href="{{ route('admin/site_setting/edit',['id'=>1]) }}">
                    <span class="nav-icon"><i class="fa fa-cog"></i></span>
                    <span class="nav-text">Site Setting</span>
                </a>
            </li>
            @endif


            {{-- Slider Menu → MENU ID = 3 --}}
            @if(canAccessMenu(3))
            <li class="{{ $currentUrl == route('admin/slider/list') ? 'active' : '' }}">
                <a href="{{ route('admin/slider/list') }}">
                    <span class="nav-icon"><i class="fa fa-cog"></i></span>
                    <span class="nav-text">Slider</span>
                </a>
            </li>
            @endif

            {{-- Testimonials Menu → MENU ID = 4 --}}
           {{--  @if(canAccessMenu(4))
            <li class="{{ $currentUrl == route('admin/testimonials/list') ? 'active' : '' }}">
                <a href="{{ route('admin/testimonials/list') }}">
                    <span class="nav-icon"><i class="fa fa-cog"></i></span>
                    <span class="nav-text">Testimonials</span>
                </a>
            </li>
            @endif --}}


            {{-- Contact → MENU ID = 5 --}}
            @if(canAccessMenu(5))
            <li class="{{ $currentUrl == route('admin/contact/list') ? 'active' : '' }}">
                <a href="{{ route('admin/contact/list') }}">
                    <span class="nav-icon"><i class="fa fa-cog"></i></span>
                    <span class="nav-text">Contact Enquiry</span>
                </a>
            </li>
            @endif

            {{-- SEO → MENU ID = 6 --}}
            {{-- @if(canAccessMenu(6))
            <li class="has-sub">
                <a href="#">
                <span class="nav-icon"><i class="fa fa-cog bg-gradient-orange text-white"></i></span>
                <span class="nav-text">SEO</span>
                <span class="nav-caret"><b class="caret"></b></span>
                </a>
                <ul class="nav-submenu">
                   <li class="active"><a href="{{ route('admin/meta_tags/edit',['id'=>1]) }}"><span class="nav-text">Home</span></a></li>
                   <li class="active"><a href="{{ route('admin/meta_tags/edit',['id'=>2]) }}"><span class="nav-text">About Us</span></a></li>
                   
                </ul>
             </li>
             @endif --}}

            {{-- Company Profile → MENU ID = 7 --}}
            {{-- @if(canAccessMenu(7))
            <li class="has-sub">
                <a href="#">
                <span class="nav-icon"><i class="fa fa-cog bg-gradient-orange text-white"></i></span>
                <span class="nav-text">Company Profile</span>
                <span class="nav-caret"><b class="caret"></b></span>
                </a>
                <ul class="nav-submenu">
                   <li class="active"><a href="{{ route('admin/content/edit',['id'=>1]) }}"><span class="nav-text">About Us</span></a></li>
                   <li class="active"><a href="{{ route('admin/content/edit',['id'=>2]) }}"><span class="nav-text">Privacy Policy</span></a></li>
                   <li class="active"><a href="{{ route('admin/content/edit',['id'=>2]) }}"><span class="nav-text">Terms & Conditions</span></a></li>
                </ul>
             </li>
             @endif --}}


