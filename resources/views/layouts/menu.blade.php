{{--<div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--    <div class="image">--}}
{{--        <img src=" {{ Auth::user()->voters->profileImage() }} " class="img-circle elevation-2" alt="User Image">--}}
{{--    </div>--}}
{{--    <div class="info">--}}
{{--        <a href="#" class="d-block">{{Auth::user()->username }}</a>--}}
{{--    </div>--}}
{{--</div>--}}
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ isActiveRoute('home') }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('voters') }}" class="nav-link {{ isActiveRoute('voters') }}">
        <i class="nav-icon fas fa-vote-yea"></i>
        <p>Voters</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('candidate') }}" class="nav-link {{ isActiveRoute('candidate') }}">
        <i class="nav-icon fas fa-users"></i>
        <p>Candidate</p>
    </a>
</li>
