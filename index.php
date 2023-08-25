<!-- start header section -->
<?php @include('common-layout/header.php') ?>
<!-- end header section -->

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <!-- start sidebar section -->
        <?php @include('common-layout/sidebar.php') ?>
        <!-- end sidebar section -->

        <div class="main-content flex flex-col min-h-screen">
            <!-- start header section -->
            <?php @include('common-layout/topbar.php') ?>
            <!-- end header section -->

            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->
                <div x-data="sales">
                    <ul class="flex space-x-2 rtl:space-x-reverse">
                        <li>
                            <a href="index.php" class="text-primary hover:underline">Dashboard</a>
                        </li>
                        <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                            <span>Overview</span>
                        </li>
                    </ul>

                    <div class="pt-4">
                        <div class="mb-6 grid grid-cols-1 gap-4 text-white sm:grid-cols-2 xl:grid-cols-5">
                            <!-- Properties -->
                            <div class="cards-color panel">
                                <div class="flex justify-between">
                                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">Properties</div>
                                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                        <a href="javascript:;" @click="toggle">
                                            <img src="assets/imagess/two-side-toggle.svg" alt="toggle-img">
                                        </a>
                                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">6,000</div>
                                </div>
                                <div class="mt-5 flex items-center font-semibold">
                                    <img class="eye" src="assets/imagess/eye.svg" width="20px" />
                                    View All
                                </div>
                            </div>

                            <!-- Users -->
                            <div class=" cards-color panel">
                                <div class="flex justify-between">
                                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">Users</div>
                                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                        <a href="javascript:;" @click="toggle">
                                            <img src="assets/imagess/two-side-toggle.svg" alt="toggle-img">
                                        </a>
                                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">5,000</div>
                                </div>
                                <div class="mt-5 flex items-center font-semibold">
                                    <img class="eye" src="assets/imagess/eye.svg" width="20px" />
                                    View All
                                </div>
                            </div>

                            <!-- Leads -->
                            <div class="cards-color panel ">
                                <div class="flex justify-between">
                                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">Leads</div>
                                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                        <a href="javascript:;" @click="toggle">
                                            <img src="assets/imagess/two-side-toggle.svg" alt="toggle-img">
                                        </a>
                                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">2,000</div>
                                </div>
                                <div class="mt-5 flex items-center font-semibold">
                                    <img class="eye" src="assets/imagess/eye.svg" width="20px" />
                                    View All
                                </div>
                            </div>

                            <!-- EOI's -->
                            <div class=" cards-color panel">
                                <div class="flex justify-between">
                                    <div class="text-md font-semibold ltr:mr-1 rtl:ml-1">EOI's</div>
                                    <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                        <a href="javascript:;" @click="toggle">
                                            <img src="assets/imagess/two-side-toggle.svg" alt="toggle-img">
                                        </a>
                                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="text-black ltr:right-0 rtl:left-0 dark:text-white-dark">
                                            <li><a href="javascript:;" @click="toggle">View Report</a></li>
                                            <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="mt-5 flex items-center">
                                    <div class="text-3xl font-bold ltr:mr-3 rtl:ml-3">3,000</div>
                                </div>
                                <div class="mt-5 flex items-center font-semibold">
                                    <img class="eye" src="assets/imagess/eye.svg" width="20px" />
                                    View All
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Properties -->
                    <div class="panel mb-5">
                        <div class="actions-list2 flex justify-between items-center p-4 space-x-4">
                            <div class="flex items-center space-x-4">
                                <h3><b>Recent Properties</b></h3>
                            </div>
                            <div class="view-all flex items-center space-x-4">
                                <a href="#">
                                    <u>
                                        <h3>View All</h3>
                                    </u>
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-auto grow overflow-x-auto">
                            <div class="table-auto">
                                <table class="table-auto" style="table-layout: auto;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Property Title</th>
                                            <th>Reserve Price</th>
                                            <th>Seller Institution</th>
                                            <th>Application End Date</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                37060
                                            </td>
                                            <td class="whitespace-nowrap">Residential Flat in Kumarapark, Seshadripuram, <br>Bengaluru, Karnataka</td>
                                            <td class="whitespace-nowrap">₹ 1,20,00,000</td>
                                            <td class="whitespace-nowrap">ICICI Bank</td>
                                            <td class="whitespace-nowrap">September 5, 2023</td>
                                            <td class="whitespace-nowrap">18/08/2023 at 12:17 PM
                                                <br>Modified - Published
                                            </td>

                                            <td class="whitespace-nowrap">
                                                <div class="icon gap-4 flex items-center">
                                                    <button class="btn-primary viewBtn">
                                                        <img src="assets/imagess/eye.svg" width="20px" />
                                                    </button>
                                                    <button class="btn-primary penBtn">
                                                        <img src="assets/images/pen.svg" width="20px" />
                                                    </button>
                                                    <button class="btn-primary menuBtn flex flex-col items-center">
                                                        <img src="assets/imagess/delete-icon.svg" />
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                37096
                                            </td>
                                            <td class="whitespace-nowrap">2,149 SFT Residential Flat in Kumarapark West, <br>Bengaluru, Karnataka</td>
                                            <td class="whitespace-nowrap">₹ 1,20,00,000</td>
                                            <td class="whitespace-nowrap">ICICI Bank</td>
                                            <td class="whitespace-nowrap">September 5, 2023</td>
                                            <td class="whitespace-nowrap">18/08/2023 at 12:17 PM
                                                <br>Modified - Published
                                            </td>

                                            <td class="whitespace-nowrap">
                                                <div class="icon gap-4 flex items-center">
                                                    <button class="btn-primary viewBtn">
                                                        <img src="assets/imagess/eye.svg" width="20px" />
                                                    </button>
                                                    <button class="btn-primary penBtn">
                                                        <img src="assets/images/pen.svg" width="20px" />
                                                    </button>
                                                    <button class="btn-primary menuBtn flex flex-col items-center">
                                                        <img src="assets/imagess/delete-icon.svg" />
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                37110
                                            </td>
                                            <td class="whitespace-nowrap">3 BHK Flat in Pinnacle Apartment Hirandahalli <br>Bengaluru, Karnataka</td>
                                            <td class="whitespace-nowrap">₹ 1,20,00,000</td>
                                            <td class="whitespace-nowrap">ICICI Bank</td>
                                            <td class="whitespace-nowrap">September 5, 2023</td>
                                            <td class="whitespace-nowrap">18/08/2023 at 12:17 PM
                                                <br>Modified - Published
                                            </td>

                                            <td class="whitespace-nowrap">
                                                <div class="icon gap-4 flex items-center">
                                                    <button class="btn-primary viewBtn">
                                                        <img src="assets/imagess/eye.svg" width="20px" />
                                                    </button>
                                                    <button class="btn-primary penBtn">
                                                        <img src="assets/images/pen.svg" width="20px" />
                                                    </button>
                                                    <button class="btn-primary menuBtn flex flex-col items-center">
                                                        <img src="assets/imagess/delete-icon.svg" />
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Recent Users -->
                    <div class="grid grid-cols-1 gap-6 xl:grid-cols-2 mb-3" x-data="form">
                        <div class="panel mb-4">
                            <div class="mb-5 flex items-center justify-between">
                                <h5 class="text-lg font-semibold dark:text-white-light">Recent Users</h5>
                                <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="#"><span class=" view-all flex items-center">
                                        <u>View All</u></span>
                                </a>
                            </div>
                            <div class="mb-5">
                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-2 whitespace-nowrap">Jane Smith</td>
                                                <td class="py-2 whitespace-nowrap">jane.smith@company.com
                                                </td>
                                                <td class="py-2 whitespace-nowrap">12345 67890
                                                </td>
                                                <td class="py-2 whitespace-nowrap">
                                                    <div class="flex space-x-4">
                                                        <button class="btn-view table2">View</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Recent Leads -->
                        <div class="panel mb-4">
                            <div class="mb-5 flex items-center justify-between">
                                <h5 class="text-lg font-semibold dark:text-white-light">Recent Leads</h5>
                                <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="#"><span class=" view-all flex items-center">
                                        <u>View All</u></span>
                                </a>
                            </div>
                            <div class="mb-5">
                                <div class="table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Property Title</th>
                                                <th>Reserve Price</th>
                                                <th>Seller Institution</th>
                                                <th>Name</th>
                                                <th>Email Address</th>
                                                <th>Phone</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>37065</td>
                                                <td>Residential Flat in Kumarapark, Seshadripuram,Bengaluru, Karnataka</td>
                                                <td>₹ 1,20,00,000</td>
                                                <td>Bank of Baroda</td>
                                                <td class="py-2">Jane Smith</td>
                                                <td class="py-2 whitespace-nowrap">jane.smith@company.com</td>
                                                <td class="py-2 whitespace-nowrap">12345 67890</td>
                                                <td class="py-2 whitespace-nowrap">
                                                    <button class="btn-primary viewBtn">
                                                        <img src="assets/imagess/eye.svg" width="20px" />
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Recent EOI's -->
                    <div class="panel mb-5">
                        <div class="actions-list2 flex justify-between items-center p-4 space-x-4">

                            <div class="flex items-center space-x-4">
                                <h3><b>Recent EOI's</b></h3>
                            </div>
                            <div class="view-all flex items-center space-x-4">
                                <a href="#">
                                    <u>
                                        <h3>View All</h3>
                                    </u>
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive table-auto grow overflow-x-auto">
                            <!-- Table 1 -->
                            <div class="table-auto">
                                <table class="table-auto" style="table-layout: auto;">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Property Title</th>
                                            <th>Reserve Price</th>
                                            <th class="py-2">Name</th>
                                            <th class="py-2">Email Address</th>
                                            <th class="py-2">Phone</th>
                                            <th class="py-2">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                37060
                                            </td>
                                            <td class="whitespace-nowrap">Residential Flat in Kumarapark, Seshadripuram, <br>Bengaluru, Karnataka</td>
                                            <td class="whitespace-nowrap">₹ 1,20,00,000</td>
                                            <td class="py-2">Jane Smith</td>
                                            <td class="py-2 whitespace-nowrap">jane.smith@company.com</td>
                                            <td class="py-2 whitespace-nowrap">12345 67890</td>
                                            <td class="whitespace-nowrap">
                                                <div class="icon gap-4 flex items-center">
                                                    <button class="btn-primary viewBtn">
                                                        <img src="assets/imagess/eye.svg" width="20px" />
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                37060
                                            </td>
                                            <td class="whitespace-nowrap">Residential Flat in Kumarapark, Seshadripuram, <br>Bengaluru, Karnataka</td>
                                            <td class="whitespace-nowrap">₹ 1,20,00,000</td>
                                            <td class="py-2">Jane Smith</td>
                                            <td class="py-2 whitespace-nowrap">jane.smith@company.com</td>
                                            <td class="py-2 whitespace-nowrap">12345 67890</td>
                                            <td class="whitespace-nowrap">
                                                <div class="icon gap-4 flex items-center">
                                                    <button class="btn-primary viewBtn">
                                                        <img src="assets/imagess/eye.svg" width="20px" />
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                37060
                                            </td>
                                            <td class="whitespace-nowrap">Residential Flat in Kumarapark, Seshadripuram, <br>Bengaluru, Karnataka</td>
                                            <td class="whitespace-nowrap">₹ 1,20,00,000</td>
                                            <td class="py-2">Jane Smith</td>
                                            <td class="py-2 whitespace-nowrap">jane.smith@company.com</td>
                                            <td class="py-2 whitespace-nowrap">12345 67890</td>
                                            <td class="whitespace-nowrap">
                                                <div class="icon gap-4 flex items-center">
                                                    <button class="btn-primary viewBtn">
                                                        <img src="assets/imagess/eye.svg" width="20px" />
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Recent Activities -->
                    <div class="panel mb-4">
                        <div class="mb-5 flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Recent Activities</h5>
                            <a class="font-semibold hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-600" href="#"><span class=" view-all flex items-center">
                                    <u>View All</u></span>
                            </a>
                        </div>
                        <div class="mb-5">
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Activity</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Uploaded Property ID 37075</td>
                                            <td>John Doe</td>
                                            <td>18/08/2023</td>
                                            <td>
                                                <div class="flex space-x-4">
                                                    <button class="btn-view table2">View</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-auto p-6 pt-0 text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
                © <span id="footer-year">2023</span>. Hecta All rights reserved.
            </div>
            <!-- end footer section -->
        </div>
    </div>

    <script src="assets/js/alpine-collaspe.min.js"></script>
    <script src="assets/js/alpine-persist.min.js"></script>
    <script defer src="assets/js/alpine-ui.min.js"></script>
    <script defer src="assets/js/alpine-focus.min.js"></script>
    <script defer src="assets/js/alpine.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script defer src="assets/js/apexcharts.js"></script>

    <script>
        document.addEventListener('alpine:init', () => {
            // main section
            Alpine.data('scrollToTop', () => ({
                showTopButton: false,
                init() {
                    window.onscroll = () => {
                        this.scrollFunction();
                    };
                },

                scrollFunction() {
                    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
                        this.showTopButton = true;
                    } else {
                        this.showTopButton = false;
                    }
                },

                goToTop() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                },
            }));

            // theme customization
            Alpine.data('customizer', () => ({
                showCustomizer: false,
            }));

            // sidebar section
            Alpine.data('sidebar', () => ({
                init() {
                    const selector = document.querySelector('.sidebar ul a[href="' + window.location.pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.click();
                                });
                            }
                        }
                    }
                },
            }));

            // header section
            Alpine.data('header', () => ({
                init() {
                    const selector = document.querySelector('ul.horizontal-menu a[href="' + window.location.pathname + '"]');
                    if (selector) {
                        selector.classList.add('active');
                        const ul = selector.closest('ul.sub-menu');
                        if (ul) {
                            let ele = ul.closest('li.menu').querySelectorAll('.nav-link');
                            if (ele) {
                                ele = ele[0];
                                setTimeout(() => {
                                    ele.classList.add('active');
                                });
                            }
                        }
                    }
                },

                notifications: [{
                        id: 1,
                        profile: 'user-profile.jpeg',
                        message: '<strong class="text-sm mr-1">John Doe</strong>invite you to <strong>Prototyping</strong>',
                        time: '45 min ago',
                    },
                    {
                        id: 2,
                        profile: 'profile-34.jpeg',
                        message: '<strong class="text-sm mr-1">Adam Nolan</strong>mentioned you to <strong>UX Basics</strong>',
                        time: '9h Ago',
                    },
                    {
                        id: 3,
                        profile: 'profile-16.jpeg',
                        message: '<strong class="text-sm mr-1">Anna Morgan</strong>Upload a file',
                        time: '9h Ago',
                    },
                ],

                messages: [{
                        id: 1,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-success-light dark:bg-success text-success dark:text-success-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></span>',
                        title: 'Congratulations!',
                        message: 'Your OS has been updated.',
                        time: '1hr',
                    },
                    {
                        id: 2,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-info-light dark:bg-info text-info dark:text-info-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></span>',
                        title: 'Did you know?',
                        message: 'You can switch between artboards.',
                        time: '2hr',
                    },
                    {
                        id: 3,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-danger-light dark:bg-danger text-danger dark:text-danger-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>',
                        title: 'Something went wrong!',
                        message: 'Send Reposrt',
                        time: '2days',
                    },
                    {
                        id: 4,
                        image: '<span class="grid place-content-center w-9 h-9 rounded-full bg-warning-light dark:bg-warning text-warning dark:text-warning-light"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">    <circle cx="12" cy="12" r="10"></circle>    <line x1="12" y1="8" x2="12" y2="12"></line>    <line x1="12" y1="16" x2="12.01" y2="16"></line></svg></span>',
                        title: 'Warning',
                        message: 'Your password strength is low.',
                        time: '5days',
                    },
                ],

                languages: [{
                        id: 1,
                        key: 'Chinese',
                        value: 'zh',
                    },
                    {
                        id: 2,
                        key: 'Danish',
                        value: 'da',
                    },
                    {
                        id: 3,
                        key: 'English',
                        value: 'en',
                    },
                    {
                        id: 4,
                        key: 'French',
                        value: 'fr',
                    },
                    {
                        id: 5,
                        key: 'German',
                        value: 'de',
                    },
                    {
                        id: 6,
                        key: 'Greek',
                        value: 'el',
                    },
                    {
                        id: 7,
                        key: 'Hungarian',
                        value: 'hu',
                    },
                    {
                        id: 8,
                        key: 'Italian',
                        value: 'it',
                    },
                    {
                        id: 9,
                        key: 'Japanese',
                        value: 'ja',
                    },
                    {
                        id: 10,
                        key: 'Polish',
                        value: 'pl',
                    },
                    {
                        id: 11,
                        key: 'Portuguese',
                        value: 'pt',
                    },
                    {
                        id: 12,
                        key: 'Russian',
                        value: 'ru',
                    },
                    {
                        id: 13,
                        key: 'Spanish',
                        value: 'es',
                    },
                    {
                        id: 14,
                        key: 'Swedish',
                        value: 'sv',
                    },
                    {
                        id: 15,
                        key: 'Turkish',
                        value: 'tr',
                    },
                    {
                        id: 16,
                        key: 'Arabic',
                        value: 'ae',
                    },
                ],

                removeNotification(value) {
                    this.notifications = this.notifications.filter((d) => d.id !== value);
                },

                removeMessage(value) {
                    this.messages = this.messages.filter((d) => d.id !== value);
                },
            }));

            // content section
            Alpine.data('sales', () => ({
                init() {
                    isDark = this.$store.app.theme === 'dark' || this.$store.app.isDarkMode ? true : false;
                    isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;

                    const revenueChart = null;
                    const salesByCategory = null;
                    const dailySales = null;
                    const totalOrders = null;

                    // revenue
                    setTimeout(() => {
                        this.revenueChart = new ApexCharts(this.$refs.revenueChart, this.revenueChartOptions);
                        this.$refs.revenueChart.innerHTML = '';
                        this.revenueChart.render();

                        // sales by category
                        this.salesByCategory = new ApexCharts(this.$refs.salesByCategory, this.salesByCategoryOptions);
                        this.$refs.salesByCategory.innerHTML = '';
                        this.salesByCategory.render();

                        // daily sales
                        this.dailySales = new ApexCharts(this.$refs.dailySales, this.dailySalesOptions);
                        this.$refs.dailySales.innerHTML = '';
                        this.dailySales.render();

                        // total orders
                        this.totalOrders = new ApexCharts(this.$refs.totalOrders, this.totalOrdersOptions);
                        this.$refs.totalOrders.innerHTML = '';
                        this.totalOrders.render();
                    }, 300);

                    this.$watch('$store.app.theme', () => {
                        isDark = this.$store.app.theme === 'dark' || this.$store.app.isDarkMode ? true : false;

                        this.revenueChart.updateOptions(this.revenueChartOptions);
                        this.salesByCategory.updateOptions(this.salesByCategoryOptions);
                        this.dailySales.updateOptions(this.dailySalesOptions);
                        this.totalOrders.updateOptions(this.totalOrdersOptions);
                    });

                    this.$watch('$store.app.rtlClass', () => {
                        isRtl = this.$store.app.rtlClass === 'rtl' ? true : false;
                        this.revenueChart.updateOptions(this.revenueChartOptions);
                    });
                },

                // revenue
                get revenueChartOptions() {
                    return {
                        series: [{
                                name: 'Income',
                                data: [16800, 16800, 15500, 17800, 15500, 17000, 19000, 16000, 15000, 17000, 14000, 17000],
                            },
                            {
                                name: 'Expenses',
                                data: [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000, 16000, 19000, 18000, 19000],
                            },
                        ],
                        chart: {
                            height: 325,
                            type: 'area',
                            fontFamily: 'Nunito, sans-serif',
                            zoom: {
                                enabled: false,
                            },
                            toolbar: {
                                show: false,
                            },
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            curve: 'smooth',
                            width: 2,
                            lineCap: 'square',
                        },
                        dropShadow: {
                            enabled: true,
                            opacity: 0.2,
                            blur: 10,
                            left: -7,
                            top: 22,
                        },
                        colors: isDark ? ['#2196f3', '#e7515a'] : ['#1b55e2', '#e7515a'],
                        markers: {
                            discrete: [{
                                    seriesIndex: 0,
                                    dataPointIndex: 6,
                                    fillColor: '#1b55e2',
                                    strokeColor: 'transparent',
                                    size: 7,
                                },
                                {
                                    seriesIndex: 1,
                                    dataPointIndex: 5,
                                    fillColor: '#e7515a',
                                    strokeColor: 'transparent',
                                    size: 7,
                                },
                            ],
                        },
                        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        xaxis: {
                            axisBorder: {
                                show: false,
                            },
                            axisTicks: {
                                show: false,
                            },
                            crosshairs: {
                                show: true,
                            },
                            labels: {
                                offsetX: isRtl ? 2 : 0,
                                offsetY: 5,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-xaxis-title',
                                },
                            },
                        },
                        yaxis: {
                            tickAmount: 7,
                            labels: {
                                formatter: (value) => {
                                    return value / 1000 + 'K';
                                },
                                offsetX: isRtl ? -30 : -10,
                                offsetY: 0,
                                style: {
                                    fontSize: '12px',
                                    cssClass: 'apexcharts-yaxis-title',
                                },
                            },
                            opposite: isRtl ? true : false,
                        },
                        grid: {
                            borderColor: isDark ? '#191e3a' : '#e0e6ed',
                            strokeDashArray: 5,
                            xaxis: {
                                lines: {
                                    show: true,
                                },
                            },
                            yaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: 0,
                                right: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        legend: {
                            position: 'top',
                            horizontalAlign: 'right',
                            fontSize: '16px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            itemMargin: {
                                horizontal: 10,
                                vertical: 5,
                            },
                        },
                        tooltip: {
                            marker: {
                                show: true,
                            },
                            x: {
                                show: false,
                            },
                        },
                        fill: {
                            type: 'gradient',
                            gradient: {
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: isDark ? 0.19 : 0.28,
                                opacityTo: 0.05,
                                stops: isDark ? [100, 100] : [45, 100],
                            },
                        },
                    };
                },

                // sales by category
                get salesByCategoryOptions() {
                    return {
                        series: [985, 737, 270],
                        chart: {
                            type: 'donut',
                            height: 460,
                            fontFamily: 'Nunito, sans-serif',
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 25,
                            colors: isDark ? '#0e1726' : '#fff',
                        },
                        colors: isDark ? ['#5c1ac3', '#e2a03f', '#e7515a', '#e2a03f'] : ['#e2a03f', '#5c1ac3', '#e7515a'],
                        legend: {
                            position: 'bottom',
                            horizontalAlign: 'center',
                            fontSize: '14px',
                            markers: {
                                width: 10,
                                height: 10,
                                offsetX: -2,
                            },
                            height: 50,
                            offsetY: 20,
                        },
                        plotOptions: {
                            pie: {
                                donut: {
                                    size: '65%',
                                    background: 'transparent',
                                    labels: {
                                        show: true,
                                        name: {
                                            show: true,
                                            fontSize: '29px',
                                            offsetY: -10,
                                        },
                                        value: {
                                            show: true,
                                            fontSize: '26px',
                                            color: isDark ? '#bfc9d4' : undefined,
                                            offsetY: 16,
                                            formatter: (val) => {
                                                return val;
                                            },
                                        },
                                        total: {
                                            show: true,
                                            label: 'Total',
                                            color: '#888ea8',
                                            fontSize: '29px',
                                            formatter: (w) => {
                                                return w.globals.seriesTotals.reduce(function(a, b) {
                                                    return a + b;
                                                }, 0);
                                            },
                                        },
                                    },
                                },
                            },
                        },
                        labels: ['Apparel', 'Sports', 'Others'],
                        states: {
                            hover: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                },
                            },
                            active: {
                                filter: {
                                    type: 'none',
                                    value: 0.15,
                                },
                            },
                        },
                    };
                },

                // daily sales
                get dailySalesOptions() {
                    return {
                        series: [{
                                name: 'Sales',
                                data: [44, 55, 41, 67, 22, 43, 21],
                            },
                            {
                                name: 'Last Week',
                                data: [13, 23, 20, 8, 13, 27, 33],
                            },
                        ],
                        chart: {
                            height: 160,
                            type: 'bar',
                            fontFamily: 'Nunito, sans-serif',
                            toolbar: {
                                show: false,
                            },
                            stacked: true,
                            stackType: '100%',
                        },
                        dataLabels: {
                            enabled: false,
                        },
                        stroke: {
                            show: true,
                            width: 1,
                        },
                        colors: ['#e2a03f', '#e0e6ed'],
                        responsive: [{
                            breakpoint: 480,
                            options: {
                                legend: {
                                    position: 'bottom',
                                    offsetX: -10,
                                    offsetY: 0,
                                },
                            },
                        }, ],
                        xaxis: {
                            labels: {
                                show: false,
                            },
                            categories: ['Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat'],
                        },
                        yaxis: {
                            show: false,
                        },
                        fill: {
                            opacity: 1,
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '25%',
                            },
                        },
                        legend: {
                            show: false,
                        },
                        grid: {
                            show: false,
                            xaxis: {
                                lines: {
                                    show: false,
                                },
                            },
                            padding: {
                                top: 10,
                                right: -20,
                                bottom: -20,
                                left: -20,
                            },
                        },
                    };
                },

                // total orders
                get totalOrdersOptions() {
                    return {
                        series: [{
                            name: 'Sales',
                            data: [28, 40, 36, 52, 38, 60, 38, 52, 36, 40],
                        }, ],
                        chart: {
                            height: 290,
                            type: 'area',
                            fontFamily: 'Nunito, sans-serif',
                            sparkline: {
                                enabled: true,
                            },
                        },
                        stroke: {
                            curve: 'smooth',
                            width: 2,
                        },
                        colors: isDark ? ['#00ab55'] : ['#00ab55'],
                        labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'],
                        yaxis: {
                            min: 0,
                            show: false,
                        },
                        grid: {
                            padding: {
                                top: 125,
                                right: 0,
                                bottom: 0,
                                left: 0,
                            },
                        },
                        fill: {
                            opacity: 1,
                            type: 'gradient',
                            gradient: {
                                type: 'vertical',
                                shadeIntensity: 1,
                                inverseColors: !1,
                                opacityFrom: 0.3,
                                opacityTo: 0.05,
                                stops: [100, 100],
                            },
                        },
                        tooltip: {
                            x: {
                                show: false,
                            },
                        },
                    };
                },
            }));
        });
    </script>
</body>

</html>