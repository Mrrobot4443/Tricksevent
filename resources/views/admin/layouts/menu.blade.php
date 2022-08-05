
     <!-- Sidebar -->
     <div>
        <!-- Sidebar backdrop (mobile only) -->
        <div class="m w bg-slate-900 pu tb tex ted bz wr" :class="sidebarOpen ? 'ba' : 'opacity-0 pointer-events-none'" aria-hidden="true" x-cloak=""></div>

        <!-- Sidebar -->
        <div id="sidebar" class="flex ak g tb x k tea tec teh tts ss lp tth l or tej ttz 2xl:!w-64 ub hs dw we wr wu" :class="sidebarOpen ? 'translate-x-0' : '-translate-x-64'" @click.outside="sidebarOpen = false" @keydown.escape.window="sidebarOpen = false" x-cloak="lg">

            <!-- Sidebar header -->
            <div class="flex fe nx vq j_">
                <!-- Close button -->
                <button class="tex text-slate-500 xl" @click.stop="sidebarOpen = !sidebarOpen" aria-controls="sidebar" :aria-expanded="sidebarOpen">
                    <span class="d">Close sidebar</span>
                    <svg class="oi so du" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
                    </svg>
                </button>
                <!-- Logo -->
                <a class="block" href="index.html">
                    <svg width="32" height="32" viewBox="0 0 32 32">
                        <defs>
                            <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                                <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                                <stop stop-color="#A5B4FC" offset="100%"></stop>
                            </linearGradient>
                            <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                                <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                                <stop stop-color="#38BDF8" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                        <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                        <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
                        <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
                    </svg>
                </a>
            </div>

            <!-- Links -->
            <div class="ff">
                <!-- Pages group -->
                <div>
                    <h3 class="go gv text-slate-500 gh vz">
                        <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                        <span class="tex ttj 2xl:block">Pages</span>
                    </h3>
                    <ul class="nk">
                        <!-- Dashboard -->
                        <li class="vn vr rounded-sm n_ ww bg-slate-900" x-data="{ open: true }">
                            <a class="block gj ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du text-indigo-500" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                                            <path class="du text-indigo-600" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                                            <path class="du text-indigo-200" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Dashboard</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block text-indigo-500 wt wi ld" href="index.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Main</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="analytics.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Analytics</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="fintech.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Fintech</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- E-Commerce -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du gq" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                            <path class="du gz" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                            <path class="du g_" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">E-Commerce</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="customers.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Customers</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="orders.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Orders</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="invoices.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Invoices</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="shop.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Shop</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="shop-2.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Shop 2</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="product.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Single Product</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="cart.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cart</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="cart-2.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cart 2</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="cart-3.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cart 3</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="pay.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Pay</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Community -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                                            <path class="du gq" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Community</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="users-tabs.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Users - Tabs</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="users-tiles.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Users - Tiles</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="profile.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Profile</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="feed.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Feed</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="forum.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Forum</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="forum-post.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Forum - Post</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="meetups.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Meetups</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="meetups-post.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Meetups - Post</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Finance -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du gq" d="M13 6.068a6.035 6.035 0 0 1 4.932 4.933H24c-.486-5.846-5.154-10.515-11-11v6.067Z"></path>
                                            <path class="du gz" d="M18.007 13c-.474 2.833-2.919 5-5.864 5a5.888 5.888 0 0 1-3.694-1.304L4 20.731C6.131 22.752 8.992 24 12.143 24c6.232 0 11.35-4.851 11.857-11h-5.993Z"></path>
                                            <path class="du g_" d="M6.939 15.007A5.861 5.861 0 0 1 6 11.829c0-2.937 2.167-5.376 5-5.85V0C4.85.507 0 5.614 0 11.83c0 2.695.922 5.174 2.456 7.17l4.483-3.993Z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Finance</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="credit-cards.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Cards</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="transactions.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Transactions</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="transaction-details.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Transaction Details</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Job Board -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du gz" d="M4.418 19.612A9.092 9.092 0 0 1 2.59 17.03L.475 19.14c-.848.85-.536 2.395.743 3.673a4.413 4.413 0 0 0 1.677 1.082c.253.086.519.131.787.135.45.011.886-.16 1.208-.474L7 21.44a8.962 8.962 0 0 1-2.582-1.828Z"></path>
                                            <path class="du g_" d="M10.034 13.997a11.011 11.011 0 0 1-2.551-3.862L4.595 13.02a2.513 2.513 0 0 0-.4 2.645 6.668 6.668 0 0 0 1.64 2.532 5.525 5.525 0 0 0 3.643 1.824 2.1 2.1 0 0 0 1.534-.587l2.883-2.882a11.156 11.156 0 0 1-3.861-2.556Z"></path>
                                            <path class="du gq" d="M21.554 2.471A8.958 8.958 0 0 0 18.167.276a3.105 3.105 0 0 0-3.295.467L9.715 5.888c-1.41 1.408-.665 4.275 1.733 6.668a8.958 8.958 0 0 0 3.387 2.196c.459.157.94.24 1.425.246a2.559 2.559 0 0 0 1.87-.715l5.156-5.146c1.415-1.406.666-4.273-1.732-6.666Zm.318 5.257c-.148.147-.594.2-1.256-.018A7.037 7.037 0 0 1 18.016 6c-1.73-1.728-2.104-3.475-1.73-3.845a.671.671 0 0 1 .465-.129c.27.008.536.057.79.146a7.07 7.07 0 0 1 2.6 1.711c1.73 1.73 2.105 3.472 1.73 3.846Z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Job Board</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="job-listing.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Listing</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="job-post.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Job Post</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="company-profile.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Company Profile</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Tasks -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
                                            <path class="du g_" d="M1 1h22v23H1z"></path>
                                            <path class="du gq" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Tasks</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="tasks-kanban.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Kanban</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="tasks-list.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Messages -->
                        <li class="vn vr rounded-sm n_ ww">
                            <a class="block gj xc ld wt wi" href="messages.html">
                                <div class="flex items-center fe">
                                    <div class="uw flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z"></path>
                                            <path class="du gq" d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Messages</span>
                                    </div>
                                    <!-- Badge -->
                                    <div class="flex uy nq">
                                        <span class="inline-flex items-center justify-center su go gp ye ho vi rounded">4</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <!-- Inbox -->
                        <li class="vn vr rounded-sm n_ ww">
                            <a class="block gj xc ld wt wi" href="inbox.html">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du g_" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z"></path>
                                        <path class="du gq" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Inbox</span>
                                </div>
                            </a>
                        </li>
                        <!-- Calendar -->
                        <li class="vn vr rounded-sm n_ ww">
                            <a class="block gj xc ld wt wi" href="calendar.html">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du g_" d="M1 3h22v20H1z"></path>
                                        <path class="du gq" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Calendar</span>
                                </div>
                            </a>
                        </li>
                        <!-- Campaigns -->
                        <li class="vn vr rounded-sm n_ ww">
                            <a class="block gj xc ld wt wi" href="campaigns.html">
                                <div class="flex items-center">
                                    <svg class="ub so oi" viewBox="0 0 24 24">
                                        <path class="du g_" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z"></path>
                                        <path class="du gq" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path>
                                    </svg>
                                    <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Campaigns</span>
                                </div>
                            </a>
                        </li>
                        <!-- Settings -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
                                            <path class="du gq" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
                                            <path class="du g_" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
                                            <path class="du gq" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Settings</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="settings.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">My Account</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="notifications.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">My Notifications</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="connected-apps.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Connected Apps</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="plans.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Plans</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="billing.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Billing &amp; Invoices</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="feedback.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Give Feedback</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Utility -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc ld wt wi" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <circle class="du gq" cx="18.5" cy="5.5" r="4.5"></circle>
                                            <circle class="du g_" cx="5.5" cy="5.5" r="4.5"></circle>
                                            <circle class="du g_" cx="18.5" cy="18.5" r="4.5"></circle>
                                            <circle class="du gq" cx="5.5" cy="18.5" r="4.5"></circle>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Utility</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="changelog.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Changelog</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="roadmap.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Roadmap</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="faqs.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">FAQs</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="empty-state.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Empty State</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="404.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">404</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="knowledge-base.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Knowledge Base</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- More group -->
                <div>
                    <h3 class="go gv text-slate-500 gh vz">
                        <span class="hidden tey ttq 2xl:hidden gn oi" aria-hidden="true">•••</span>
                        <span class="tex ttj 2xl:block">More</span>
                    </h3>
                    <ul class="nk">
                        <!-- Authentication -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc wt wi" :class="open &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M8.07 16H10V8H8.07a8 8 0 110 8z"></path>
                                            <path class="du gq" d="M15 12L8 6v5H0v2h8v5z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Authentication</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="signin.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Sign In</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="signup.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Sign up</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="reset-password.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Reset Password</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Onboarding -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc wt wi" :class="open &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <path class="du g_" d="M19 5h1v14h-2V7.414L5.707 19.707 5 19H4V5h2v11.586L18.293 4.293 19 5Z"></path>
                                            <path class="du gq" d="M5 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8ZM5 23a4 4 0 1 1 0-8 4 4 0 0 1 0 8Zm14 0a4 4 0 1 1 0-8 4 4 0 0 1 0 8Z"></path>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Onboarding</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="onboarding-01.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Step 1</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="onboarding-02.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Step 2</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="onboarding-03.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Step 3</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="onboarding-04.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Step 4</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- Components -->
                        <li class="vn vr rounded-sm n_ ww" x-data="{ open: false }">
                            <a class="block gj xc wt wi" :class="open &amp;&amp; 'hover--text-slate-200'" href="#0" @click.prevent="sidebarExpanded ? open = !open : sidebarExpanded = true">
                                <div class="flex items-center fe">
                                    <div class="flex items-center">
                                        <svg class="ub so oi" viewBox="0 0 24 24">
                                            <circle class="du g_" cx="16" cy="8" r="8"></circle>
                                            <circle class="du gq" cx="8" cy="16" r="8"></circle>
                                        </svg>
                                        <span class="text-sm gp ml-3 ttw tnn 2xl:opacity--100 wr">Components</span>
                                    </div>
                                    <!-- Icon -->
                                    <div class="flex ub nq ttw tnn 2xl:opacity--100 wr">
                                        <svg class="w-3 h-3 ub nz du gq" :class="open ? 'as' : 'ao'" viewBox="0 0 12 12">
                                            <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                            <div class="tex ttj 2xl:block">
                                <ul class="me re hidden" :class="open ? '!block' : 'hidden'">
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-button.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Button</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-form.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Input Form</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-dropdown.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Dropdown</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-alert.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Alert &amp; Banner</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-modal.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Modal</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-pagination.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Pagination</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-tabs.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Tabs</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-breadcrumb.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Breadcrumb</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-badge.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Badge</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-avatar.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Avatar</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-tooltip.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Tooltip</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-accordion.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Accordion</span>
                                        </a>
                                    </li>
                                    <li class="rt ww">
                                        <a class="block gq hover--text-slate-200 wt wi ld" href="component-icons.html">
                                            <span class="text-sm gp ttw tnn 2xl:opacity--100 wr">Icons</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


