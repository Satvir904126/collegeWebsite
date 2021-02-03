@if (Auth::user()->role_id < 2)

    <ul id="myUL">
        <li>
            <p class="caret fa fa-angle-righ">General</p>
            <ul class="nested">
                <li class="nav-item">
                    <a href="{{ route('classes.index') }}"
                        class="nav-link {{ Request::is('classes*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Classes</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('classrooms.index') }}"
                        class="nav-link {{ Request::is('classrooms*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Classrooms</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('levels.index') }}" class="nav-link {{ Request::is('levels*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Levels</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('batches.index') }}"
                        class="nav-link {{ Request::is('batches*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Batches</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('shifts.index') }}" class="nav-link {{ Request::is('shifts*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Shifts</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('courses.index') }}"
                        class="nav-link {{ Request::is('courses*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Courses</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('faculties.index') }}"
                        class="nav-link {{ Request::is('faculties*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Faculties</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('times.index') }}" class="nav-link {{ Request::is('times*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Times</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('academics.index') }}"
                        class="nav-link {{ Request::is('academics*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Academics</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('days.index') }}" class="nav-link {{ Request::is('days*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Days</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('semesters.index') }}"
                        class="nav-link {{ Request::is('semesters*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Semesters</p>
                    </a>
                </li>

            </ul>
        </li>
    </ul>

    <ul id="myUL">
        <li><span class="caret fa fa-angle-left">Schedule</span>
            <ul class="nested">
                <li class="nav-item">
                    <a href="{{ route('classAssignings.index') }}"
                        class="nav-link {{ Request::is('classAssignings*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Class Assignings</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('classSchedulings.index') }}"
                        class="nav-link {{ Request::is('classSchedulings*') ? 'active' : '' }}">
                        <i class="fa fa-edit"></i>
                        <p>Class Schedulings</p>
                    </a>
                </li>

            </ul>
        </li>
    </ul>
@endif








<li class="nav-item">
    <a href="{{ route('admissions.index') }}" class="nav-link {{ Request::is('admissions*') ? 'active' : '' }}">
        <i class="fa fa-edit"></i>
        <p>Admissions</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('teachers.index') }}" class="nav-link {{ Request::is('teachers*') ? 'active' : '' }}">
        <i class="fa fa-edit"></i>
        <p>Teachers</p>
    </a>
</li>




@if (Auth::user()->role_id < 2)

    <li class="nav-item">
        <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
            <i class="fa fa-edit"></i>
            <p>Users</p>
        </a>
    </li>
@endif



@if (Auth::user()->role_id < 4)

    <li class="nav-item">
        <a href="{{ route('attendances.index') }}" class="nav-link {{ Request::is('attendances*') ? 'active' : '' }}">
            <i class="fa fa-edit"></i>
            <p>Attendances</p>
        </a>
    </li>
@endif
<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="fa fa-edit"></i>
        <p>Roles</p>
    </a>
</li>

@if (Auth::user()->role_id < 4)

    <li class="nav-item">
        <a href="{{ route('transactions.index') }}" class="nav-link {{ Request::is('transactions*') ? 'active' : '' }}">
            <i class="fa fa-edit"></i>
            <p>Transactions</p>
        </a>
    </li>
@endif



{{-- <div class="treeview w-20 border">
    <h6 class="pt-3 pl-3">Folders</h6>
    <hr>
    <ul class="mb-1 pl-3 pb-2">
        <li><i class="fas fa-angle-right rotate"></i>
            <span><i class="far fa-envelope-open ic-w mx-1"></i>Mail</span>
            <ul class="nested">
                <li><i class="far fa-bell ic-w mr-1"></i>Offers</li>
                <li><i class="far fa-address-book ic-w mr-1"></i>Contacts</li>
                <li><i class="fas fa-angle-right rotate"></i>
                    <span><i class="far fa-calendar-alt ic-w mx-1"></i>Calendar</span>
                    <ul class="nested">
                        <li><i class="far fa-clock ic-w mr-1"></i>Deadlines</li>
                        <li><i class="fas fa-users ic-w mr-1"></i>Meetings</li>
                        <li><i class="fas fa-basketball-ball ic-w mr-1"></i>Workouts</li>
                        <li><i class="fas fa-mug-hot ic-w mr-1"></i>Events</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><i class="fas fa-angle-right rotate"></i>
            <span><i class="far fa-folder-open ic-w mx-1"></i>Inbox</span>
            <ul class="nested">
                <li><i class="far fa-folder-open ic-w mr-1"></i>Admin</li>
                <li><i class="far fa-folder-open ic-w mr-1"></i>Corporate</li>
                <li><i class="far fa-folder-open ic-w mr-1"></i>Finance</li>
                <li><i class="far fa-folder-open ic-w mr-1"></i>Other</li>
            </ul>
        </li>
        <li><i class="fas fa-angle-right rotate"></i>
            <span><i class="far fa-gem ic-w mx-1"></i>Favourites</span>
            <ul class="nested">
                <li><i class="fas fa-pepper-hot ic-w mr-1"></i>Restaurants</li>
                <li><i class="far fa-eye ic-w mr-1"></i>Places</li>
                <li><i class="fas fa-gamepad ic-w mr-1"></i>Games</li>
                <li><i class="fas fa-cocktail ic-w mr-1"></i>Coctails</li>
                <li><i class="fas fa-pizza-slice ic-w mr-1"></i>Food</li>
            </ul>
        </li>
        <li><i class="far fa-comment ic-w mr-1"></i>Notes</li>
        <li><i class="fas fa-cogs ic-w mr-1"></i>Settings</li>
        <li><i class="fas fa-desktop ic-w mr-1"></i>Devices</li>
        <li><i class="fas fa-trash-alt ic-w mr-1"></i>Deleted Items</li>
    </ul>
</div> --}}

@push('page_scripts')
    <script>
        //   script for treeview sidebar
        var toggler = document.getElementsByClassName("caret");
        var i;

        for (i = 0; i < toggler.length; i++) {
            toggler[i].addEventListener("click", function() {
                this.parentElement.querySelector(".nested").classList.toggle("active");
                this.classList.toggle("caret-down");
            });
        }

    </script>
@endpush
