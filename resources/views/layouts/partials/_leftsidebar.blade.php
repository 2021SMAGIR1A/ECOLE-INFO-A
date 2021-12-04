<div class="left-side-menu left-side-menu-detached mb-4">
    <div class="leftbar-user">
        <a href="javascript: void(0);">
            <img src="{{ Voyager::image(\Auth::user()->avatar) }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
            <span class="leftbar-user-name">{{ \Auth::user()->name }} / {{ \Auth::user()->role->display_name }}</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="metismenu side-nav">

        <li class="side-nav-title side-nav-item">Administration</li>

        <li class="side-nav-item">
            <a href="{{ route('FieldGetIndex') }}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Filières </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('ClasseGetIndex') }}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Classes </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('StudentGetIndex') }}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Elèves </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('TeacherGetIndex') }}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Enseignants </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('CourseGetIndex') }}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Cours </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('TestGetIndex') }}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Evaluations </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('RoomGetIndex') }}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Salles </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('ComplaintGetIndex') }}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Reclamations </span>
            </a>
        </li>
        <li class="side-nav-item">
            <a href="{{ route('MarkGetIndex') }}" class="side-nav-link">
                <i class="uil-calender"></i>
                <span> Notes </span>
            </a>
        </li>
    </ul>
    <!-- End Sidebar -->

    <div class="clearfix"></div>
    <!-- Sidebar -left -->

</div>