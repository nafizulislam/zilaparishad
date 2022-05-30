<style>
    .dlabnav .metismenu ul a:hover, .dlabnav .metismenu ul a:focus, .dlabnav .metismenu ul a.mm-active {

    color: #bef703;
}
</style>

<div class="dlabnav">
            <div class="dlabnav-scroll">

				<ul class="metismenu" id="menu">

                    <li >
                    <img src="{{asset('vendor/images/zila.png')}}" alt="">

                    </li>
                    <li class=" {{ (request()->is('home')) ? 'active' : '' }}"><a href="{{ url('/home') }}" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">ড্যাশবোর্ড</span>
						</a>
                    </li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="far fa-folder"></i>
							<span class="nav-text">ক্লাইন্ট</span>
						</a>
                        <ul aria-expanded="false">
                            <li class=" {{ (request()->is('client')) ? 'active' : '' }}"><a href="{{route('client.index')}}"><i class="far fa-folder"></i> পি আই ছি হোল্ডার</a></li>
                            <li  class=" {{ (request()->is('thikadar')) ? 'active' : '' }}"><a href="{{route('thikadar.index')}}"><i class="far fa-folder"></i> ঠিকাদার</a></li>
                            <li class=" {{ (request()->is('varatia')) ? 'active' : '' }}"><a href="{{route('varatia.index')}}"><i class="far fa-folder"></i> ভাড়াটিয়া, ইজারাদার</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
						<i class="far fa-folder"></i>
							<span class="nav-text">প্রকল্প</span>
						</a>
                        <ul aria-expanded="false">
                            <li class=" {{ (request()->is('project')) ? 'active' : '' }}"><a href="{{ route('project.index') }}"><i class="far fa-folder"></i> পি আই সি প্রকল্প সমূহ</a></li>
							<li><a href="{{url('/project')}}"><i class="far fa-folder"></i> দরপত্ৰকৃত প্যাকেজ</a></li>
                            <li class=" {{ (request()->is('rate')) ? 'active' : '' }}"><a href="{{route('rate.index')}}"><i class="far fa-folder"></i> রেট নির্ধারণ</a></li>
                            <li class=" {{ (request()->is('rate')) ? 'active' : '' }}"><a href="{{route('sarok.index')}}"><i class="far fa-folder"></i>মন্ত্রনালয়ের স্মারক নম্বর</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="far fa-folder"></i>
							<span class="nav-text">আয় ব্যায়</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('earnlist')}}"><i class="far fa-folder"></i> সকল আয় সমূহ</a></li>
                            <li><a href="{{route('earnlist')}}"><i class="far fa-folder"></i> সকল ব্যায় সমূহ</a></li>
                            <li><a href="{{route('income.index')}}"><i class="far fa-folder"></i> আয়ের উৎস সমূহ</a></li>
                            <li><a href="{{route('cost.index')}}"><i class="far fa-folder"></i> ব্যায়ের উৎস সমূহ</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="far fa-folder"></i>
							<span class="nav-text">চেক/ব্যাংক </span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="#"><i class="far fa-folder"></i> ব্যাংক চেক</a></li>
                            <li><a href="#"><i class="far fa-folder"></i> ব্যাংক এ্যাকাউন্ট</a></li>

                        </ul>
                    </li>
                    <li><a href="#" class="" aria-expanded="false">
							<i class="fas fa-cog"></i>
							<span class="nav-text">রিপাের্ট</span>
						</a>
					</li>
					<li><a href="#" class="" aria-expanded="false">
							<i class="fas fa-cog"></i>
							<span class="nav-text">সেটিংস</span>
						</a>
					</li>
                </ul>
                <a class="nav-link " href="javascript:void(0);"  role="button" data-bs-toggle="dropdown">
                	<div class="header-info2 d-flex align-items-center">
                		<img style="border-radius: 50%;" src="{{asset('vendor/images/profile/1.png')}}" alt=""/>
                		<div class="d-flex align-items-center sidebar-info">
                			<div>
                				<span class="font-w400 d-block">আহমেদ উল্লাহ</span>
                				<small class="text-end font-w400">Active</small>
                			</div>

                		</div>

                	</div>
                </a>
			</div>
        </div>
