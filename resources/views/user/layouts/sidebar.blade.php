<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label text-white">Navigation</li>
            <li>

                <a href="{{ route('dashboard_user') }}"><i class="mdi mdi-home"></i><span
                        class="nav-text">Dashboard</span></a>
            </li>
            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i
                        class="mdi mdi-guitar-acoustic"></i><span class="nav-text">Categories</span></a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('category.create') }}">Ajouter une catégorie</a></li>
                    <li><a href="{{ route('category.index') }}">Listes des catégories</a></li>
                </ul>
        </ul>
    </div>
</div>
