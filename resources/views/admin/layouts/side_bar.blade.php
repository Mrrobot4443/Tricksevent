<div class="quixnav">

    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label text-white">Navigation</li>
            <li>

                <a href="{{ route('dashboard_admin') }}"><i class="mdi mdi-home"></i><span
                        class="nav-text">Dashboard</span></a>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="mdi mdi-guitar-acoustic"></i><span class="nav-text">Categories</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('category.create') }}">Ajouter une catégorie</a></li>
                    <li><a href="{{ route('category.index') }}">Listes des catégories</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="mdi mdi-airballoon"></i><span class="nav-text">Villes</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('ville.create') }}">Ajouter une ville</a></li>
                    <li><a href="{{ route('ville.index') }}">Listes des villes</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-map"></i><span
                        class="nav-text">events</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('event.create') }}">Ajouter un event</a></li>
                    <li><a href="{{ route('event.index') }}">Listes des des evenements</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-map"></i><span
                        class="nav-text">Tickets</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('ticket.create') }}">Ajouter une ticket</a></li>
                    <li><a href="{{ route('ticket.index') }}">Listes des tickets</a></li>
                </ul>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="mdi mdi-map"></i><span
                        class="nav-text">Users</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('guests') }}">Users Liste</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
<!--**********************************
    Sidebar end
***********************************-->
