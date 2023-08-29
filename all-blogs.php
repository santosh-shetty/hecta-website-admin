<!-- start header section -->
<?php @include('common-layout/header.php') ?>
<!-- end header section -->

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">

    <div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
        <!-- start sidebar section -->
        <?php include 'common-layout/sidebar.php'; ?>
        <!-- end sidebar section -->

        <div class="main-content flex flex-col min-h-screen">
            <!-- start header section -->
            <?php include 'common-layout/topbar.php'; ?>
            <!-- end header section -->

            <div class="animate__animated p-6" :class="[$store.app.animation]">
                <!-- start main content section -->
                <div x-data="todolist">
                    <div class="add-product">
                        <h2 class="text-xl color-element1">Properties</h2>
                    </div>
                    <div class="all-properties  flex justify-between items-center">
                        <ul class="horizontal-list">
                            <li class="color-element1">
                                <h4>All Properties(6,000)</h4>
                            </li>
                            <li class="divider">|</li>
                            <li class="color-element2">
                                Published(5,000)
                            </li>
                            <li class="divider">|</li>
                            <li class="color-element2">
                                <h4>Unpublished(6,000)</h4>
                            </li>
                            <li class="divider">|</li>
                            <li class="color-element2">
                                <h4>Draft(500)</h4>
                            </li>
                            <li class="divider">|</li>
                            <li class="color-element2">
                                <h4>Trash(250)</h4>
                            </li>
                        </ul>
                        <div class="flex items-center">
                            <div class="flex space-x-4 mb-2">
                                <button type="button" class="btn-property">
                                    Upload
                                </button>
                                <button type="button" class="btn-property">
                                    Bulk Upload
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="sf-properties flex justify-between items-center space-y-4">
                        <ul class="horizontal-list2 flex items-center space-x-4">
                            <li>
                                <div class="group relative flex-1">
                                    <div class="absolute top-1/2 -translate-y-1/2 peer-focus:text-primary ltr:left-[11px] rtl:right-[11px]">
                                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                            <path d="M7.91667 13.3333C6.40278 13.3333 5.12153 12.809 4.07292 11.7604C3.02431 10.7118 2.5 9.43056 2.5 7.91667C2.5 6.40278 3.02431 5.12153 4.07292 4.07292C5.12153 3.02431 6.40278 2.5 7.91667 2.5C9.43056 2.5 10.7118 3.02431 11.7604 4.07292C12.809 5.12153 13.3333 6.40278 13.3333 7.91667C13.3333 8.52778 13.2361 9.10417 13.0417 9.64583C12.8472 10.1875 12.5833 10.6667 12.25 11.0833L16.9167 15.75C17.0694 15.9028 17.1458 16.0972 17.1458 16.3333C17.1458 16.5694 17.0694 16.7639 16.9167 16.9167C16.7639 17.0694 16.5694 17.1458 16.3333 17.1458C16.0972 17.1458 15.9028 17.0694 15.75 16.9167L11.0833 12.25C10.6667 12.5833 10.1875 12.8472 9.64583 13.0417C9.10417 13.2361 8.52778 13.3333 7.91667 13.3333ZM7.91667 11.6667C8.95833 11.6667 9.84375 11.3021 10.5729 10.5729C11.3021 9.84375 11.6667 8.95833 11.6667 7.91667C11.6667 6.875 11.3021 5.98958 10.5729 5.26042C9.84375 4.53125 8.95833 4.16667 7.91667 4.16667C6.875 4.16667 5.98958 4.53125 5.26042 5.26042C4.53125 5.98958 4.16667 6.875 4.16667 7.91667C4.16667 8.95833 4.53125 9.84375 5.26042 10.5729C5.98958 11.3021 6.875 11.6667 7.91667 11.6667Z" fill="#A0A0A0"></path>
                                        </svg>
                                    </div>
                                    <input type="text" class="holder peer form-input ltr:pl-10 rtl:pr-10" placeholder="Search Properties" />
                                </div>
                            </li>
                            <li>
                                <div class="filter relative inline-block text-left">
                                    <form>
                                        <div class="relative inline-block text-left">
                                            <button type="button" class="dropdown-btn flex items-center justify-between w-full py-2 px-4 rounded-lg bg-white">
                                                Filter by Property
                                                <select class="opacity-0 absolute w-full h-full cursor-pointer ">
                                                    <option>Filter Option 1</option>
                                                    <option>Filter Option 2</option>
                                                    <option>Filter Option 3</option>
                                                </select>
                                                <img class="arrow" src="assets/imagess/down-arrow.svg" alt="Dropdown Arrow" />
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </li>
                            <li>
                                <div class="filter relative inline-block text-left">
                                    <form>
                                        <div class="relative inline-block text-left">
                                            <button type="button" class="dropdown-btn flex items-center justify-between w-full py-2 px-4 rounded-lg bg-white">
                                                Filter by Budget
                                                <select class="opacity-0 absolute w-full h-full cursor-pointer ">
                                                    <option>Filter Option 1</option>
                                                    <option>Filter Option 2</option>
                                                    <option>Filter Option 3</option>
                                                </select>
                                                <img class="arrow" src="assets/imagess/down-arrow.svg" alt="Dropdown Arrow" />
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="filter relative inline-block text-left">
                                    <form>
                                        <div class="relative inline-block text-left">
                                            <button type="button" class="dropdown-btn flex items-center justify-between w-full py-2 px-4 rounded-lg bg-white">
                                                Filter by Seller Institution
                                                <select class="opacity-0 absolute w-full h-full cursor-pointer ">
                                                    <option>Filter Option 1</option>
                                                    <option>Filter Option 2</option>
                                                    <option>Filter Option 3</option>
                                                </select>
                                                <img class="arrow" src="assets/imagess/down-arrow.svg" alt="Dropdown Arrow" />
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </li>
                        </ul>
                        <div class="flex items-center space-x-4 mb-2">
                            <button type="button" class="text-filter btn-filter mb-3">Apply</button>
                            <button type="button" class="text-filter btn-filter mb-3">Clear</button>
                        </div>
                    </div>
                    <div class="relative flex h-full gap-5 sm:h-[calc(100vh_-_150px)]">
                        <div class="overlay absolute z-[5] hidden h-full w-full rounded-md bg-black/60" :class="{ '!block xl:!hidden': isShowTaskMenu }" @click="isShowTaskMenu = !isShowTaskMenu">
                        </div>
                        <div class="panel h-full flex-1 overflow-auto p-0">
                            <div class="flex h-full flex-col">
                                <div class="actions-list flex justify-between items-center p-4 space-x-4">
                                    <div class="flex items-center space-x-4">
                                        <h6>Showing 1 to 10 of 6,000 entries</h6>
                                        <div class="filter relative inline-block text-left">
                                            <form>
                                                <div class="relative inline-block text-left">
                                                    <button type="button" class="dropdown-btn flex items-center justify-between py-2 px-4 rounded-lg bg-white">
                                                        10
                                                        <select class="opacity-0 absolute w-px h-full cursor-pointer">
                                                            <option>Filter Option 1</option>
                                                            <option>Filter Option 2</option>
                                                            <option>Filter Option 3</option>
                                                        </select>
                                                        <img class="arrow" src="assets/imagess/down-arrow.svg" alt="Dropdown Arrow" />
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="filter relative inline-block text-left">
                                            <form>
                                                <div class="relative inline-block text-left">
                                                    <button type="button" class="dropdown-btn flex items-center justify-between py-2 px-4 rounded-lg bg-white">
                                                        Bulk Actions
                                                        <select class="opacity-0 absolute w-px h-full cursor-pointer">
                                                            <option>Filter Option 1</option>
                                                            <option>Filter Option 2</option>
                                                            <option>Filter Option 3</option>
                                                        </select>
                                                        <img class="arrow" src="assets/imagess/down-arrow.svg" alt="Dropdown Arrow" />
                                                    </button>
                                                    <ul class="dropdown-options absolute hidden mt-2 py-1 bg-white border border-gray-300 shadow-lg rounded-lg">
                                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Filter Option 1</li>
                                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Filter Option 2</li>
                                                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Filter Option 3</li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                        <button type="button" class="text-filter btn-filter">Apply</button>
                                    </div>
                                </div>
                                <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
                                <template x-if="pagedTasks.length">
                                    <div class="table-responsive table-auto grow overflow-x-auto">
                                        <div class="table-auto">
                                            <table class="table-auto" style="table-layout: auto;">

                                                <thead>
                                                    <tr>
                                                        <th><input type="checkbox" :id="`chk-${task.id}`" class="form-checkbox" :checked="task.status === 'complete'" @click.stop="taskComplete(task)" :disabled="selectedTab === 'trash'" /></th>
                                                        <th>ID</th>
                                                        <th>Title</th>
                                                        <th>Author</th>
                                                        <th>Categories</th>
                                                        <th>Tags</th>
                                                        <th>Date</th>
                                                        <th>SEO Title</th>
                                                        <th>Meta Description</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" :id="`chk-${task.id}`" class="form-checkbox" :checked="task.status === 'complete'" @click.stop="taskComplete(task)" :disabled="selectedTab === 'trash'" />
                                                        </td>
                                                        <td>
                                                            37060
                                                        </td>
                                                        <td class="whitespace-nowrap">Blog Title</td>
                                                        <td class="whitespace-nowrap">Blog Author</td>
                                                        <td class="whitespace-nowrap">Blog Category</td>
                                                        <td class="whitespace-nowrap">Blog Tags</td>
                                                        <td class="whitespace-nowrap">September 5, 2023</td>
                                                        <td class="whitespace-nowrap">Blog SEO Title</td>
                                                        <td class="whitespace-nowrap">Meta Description</td>
                                                        <td class="whitespace-nowrap">
                                                            <span class="text badge-outline-success">Published</span>
                                                        </td>
                                                        <td class="whitespace-nowrap">
                                                            <div class="flex gap-4 items-center">
                                                                <button class="btn-primary viewBtn">
                                                                    <img src="assets/imagess/eye.svg" width="20px" />
                                                                </button>
                                                                <button class="btn-primary penBtn">
                                                                    <img src="assets/images/pen.svg" width="20px" />
                                                                </button>
                                                                <button class="btn-primary menuBtn flex flex-col items-center">
                                                                    <img src="assets/imagess/Ellipse.svg" class=" ellipse mb-0.8" />
                                                                    <img src="assets/imagess/Ellipse-1.svg" class="mb-0.8" />
                                                                    <img src="assets/imagess/Ellipse-2.svg" class="mb-0.8" />
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <!-- <td class="whitespace-nowrap">
                                                            <div class="flex space-x-4">
                                                                <button class="btn-view">View</button>
                                                                <button class="btn-view">Add</button>
                                                            </div>
                                                        </td> -->
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" :id="`chk-${task.id}`" class="form-checkbox" :checked="task.status === 'complete'" @click.stop="taskComplete(task)" :disabled="selectedTab === 'trash'" />
                                                        </td>
                                                        <td>
                                                            37060
                                                        </td>
                                                        <td class="whitespace-nowrap">Blog Title</td>
                                                        <td class="whitespace-nowrap">Blog Author</td>
                                                        <td class="whitespace-nowrap">Blog Category</td>
                                                        <td class="whitespace-nowrap">Blog Tags</td>
                                                        <td class="whitespace-nowrap">September 5, 2023</td>
                                                        <td class="whitespace-nowrap">Blog SEO Title</td>
                                                        <td class="whitespace-nowrap">Meta Description</td>
                                                        <td class="whitespace-nowrap">
                                                            <span class="text badge-outline-success">Published</span>
                                                        </td>
                                                        <td class="whitespace-nowrap">
                                                            <div class="flex gap-4 items-center">
                                                                <button class="btn-primary viewBtn">
                                                                    <img src="assets/imagess/eye.svg" width="20px" />
                                                                </button>
                                                                <button class="btn-primary penBtn">
                                                                    <img src="assets/images/pen.svg" width="20px" />
                                                                </button>
                                                                <button class="btn-primary menuBtn flex flex-col items-center">
                                                                    <img src="assets/imagess/Ellipse.svg" class=" ellipse mb-0.8" />
                                                                    <img src="assets/imagess/Ellipse-1.svg" class="mb-0.8" />
                                                                    <img src="assets/imagess/Ellipse-2.svg" class="mb-0.8" />
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <input type="checkbox" :id="`chk-${task.id}`" class="form-checkbox" :checked="task.status === 'complete'" @click.stop="taskComplete(task)" :disabled="selectedTab === 'trash'" />
                                                        </td>
                                                        <td>
                                                            37060
                                                        </td>
                                                        <td class="whitespace-nowrap">Blog Title</td>
                                                        <td class="whitespace-nowrap">Blog Author</td>
                                                        <td class="whitespace-nowrap">Blog Category</td>
                                                        <td class="whitespace-nowrap">Blog Tags</td>
                                                        <td class="whitespace-nowrap">September 5, 2023</td>
                                                        <td class="whitespace-nowrap">Blog SEO Title</td>
                                                        <td class="whitespace-nowrap">Meta Description</td>
                                                        <td class="whitespace-nowrap">
                                                            <span class="text badge-outline-success">Published</span>
                                                        </td>
                                                        <td class="whitespace-nowrap">
                                                            <div class="flex gap-4 items-center">
                                                                <button class="btn-primary viewBtn">
                                                                    <img src="assets/imagess/eye.svg" width="20px" />
                                                                </button>
                                                                <button class="btn-primary penBtn">
                                                                    <img src="assets/images/pen.svg" width="20px" />
                                                                </button>
                                                                <button class="btn-primary menuBtn flex flex-col items-center">
                                                                    <img src="assets/imagess/Ellipse.svg" class=" ellipse mb-0.8" />
                                                                    <img src="assets/imagess/Ellipse-1.svg" class="mb-0.8" />
                                                                    <img src="assets/imagess/Ellipse-2.svg" class="mb-0.8" />
                                                                </button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end main content section -->

    </div>

    <!-- start footer section -->
    <div class="p-6 pt-0 mt-auto text-center dark:text-white-dark ltr:sm:text-left rtl:sm:text-right">
        © <span id="footer-year">2022</span>. HECTA All rights reserved.
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
    <script src="assets/js/quill.js"></script>
    <script>
        const defaultParams = {
            id: null,
            title: '',
            description: '',
            descriptionText: '',
            assignee: '',
            path: '',
            tag: '',
            priority: 'low',
        };
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
                        id: 37060,
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
            //todolist
            Alpine.data('todolist', () => ({
                selectedTab: '',
                isShowTaskMenu: false,
                addTaskModal: false,
                viewTaskModal: false,

                params: JSON.parse(JSON.stringify(defaultParams)),
                allTasks: [{
                        id: 1,
                        title: 'Meeting with Shaun Park at 4:50pm',
                        date: 'Aug, 07 2020',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.',
                        descriptionText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.',
                        tag: 'team',
                        priority: 'medium',
                        assignee: 'John Smith',
                        path: '',
                        status: '',
                    },
                    {
                        id: 2,
                        title: 'Team meet at Starbucks',
                        date: 'Aug, 06 2020',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.',
                        descriptionText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.',
                        tag: 'team',
                        priority: 'low',
                        assignee: 'John Smith',
                        path: 'profile-15.jpeg',
                        status: '',
                    },
                    {
                        id: 3,
                        title: 'Meet Lisa to discuss project details',
                        date: 'Aug, 05 2020',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.',
                        descriptionText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.',
                        tag: 'update',
                        priority: 'medium',
                        assignee: 'John Smith',
                        path: 'profile-1.jpeg',
                        status: 'complete',
                    },
                    {
                        id: 4,
                        title: 'Download Complete',
                        date: 'Aug, 04 2020',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.',
                        descriptionText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.',
                        tag: '',
                        priority: 'low',
                        assignee: 'John Smith',
                        path: 'profile-16.jpeg',
                        status: '',
                    },
                    {
                        id: 5,
                        title: 'Conference call with Marketing Manager',
                        date: 'Aug, 03 2020',
                        description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.',
                        descriptionText: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.',
                        tag: 'update',
                        priority: 'high',
                        assignee: 'John Smith',
                        path: 'profile-5.jpeg',
                        status: 'important',
                    },
                    {
                        id: 37060,
                        property_title: 'Residential Flat in Kumarapark, Seshadripuram, Bengaluru, Karnataka',
                        reserv_price: 'rs 123434',
                        seller_institution: 'Bank Name',
                        borrower_name: 'Atul Vajpayee',
                        published_on: 'Aug, 03 2020',

                    },
                ],
                filteredTasks: [],
                pagedTasks: [],
                searchTask: '',
                selectedTask: defaultParams,

                pager: {
                    currentPage: 1,
                    totalPages: 0,
                    pageSize: 10,
                    startIndex: 0,
                    endIndex: 0,
                },
                quillEditor: null,

                init() {
                    this.searchTasks();
                    this.initEditor();
                },
                initEditor() {
                    this.quillEditor = new Quill(this.$refs.editor, {
                        theme: 'snow',
                    });
                },
                searchTasks(isResetPage = true) {
                    if (isResetPage) {
                        this.pager.currentPage = 1;
                    }
                    let res;
                    if (this.selectedTab === 'complete' || this.selectedTab === 'important' || this.selectedTab === 'trash') {
                        res = this.allTasks.filter((d) => d.status === this.selectedTab);
                    } else {
                        res = this.allTasks.filter((d) => d.status != 'trash');
                    }

                    if (this.selectedTab === 'team' || this.selectedTab === 'update') {
                        res = res.filter((d) => d.tag === this.selectedTab);
                    } else if (this.selectedTab === 'high' || this.selectedTab === 'medium' || this.selectedTab === 'low') {
                        res = res.filter((d) => d.priority === this.selectedTab);
                    }
                    this.filteredTasks = res.filter((d) => d.title?.toLowerCase().includes(this.searchTask));
                    this.getPager();
                },
                getPager() {
                    setTimeout(() => {
                        if (this.filteredTasks.length) {
                            this.pager.totalPages = this.pager.pageSize < 1 ? 1 : Math.ceil(this.filteredTasks.length / this.pager.pageSize);
                            if (this.pager.currentPage > this.pager.totalPages) {
                                this.pager.currentPage = 1;
                            }
                            this.pager.startIndex = (this.pager.currentPage - 1) * this.pager.pageSize;
                            this.pager.endIndex = Math.min(this.pager.startIndex + this.pager.pageSize - 1, this.filteredTasks.length - 1);
                            this.pagedTasks = this.filteredTasks.slice(this.pager.startIndex, this.pager.endIndex + 1);
                        } else {
                            this.pagedTasks = [];
                            this.pager.startIndex = -1;
                            this.pager.endIndex = -1;
                        }
                    });
                },

                setPriority(task, name) {
                    let item = this.filteredTasks.find((d) => d.id === task.id);
                    item.priority = name;
                    this.searchTasks(false);
                },

                setTag(task, name) {
                    let item = this.filteredTasks.find((d) => d.id === task.id);
                    item.tag = name;
                    this.searchTasks(false);
                },

                tabChanged(type) {
                    this.selectedTab = type;
                    this.searchTasks();
                    this.isShowTaskMenu = false;
                },

                taskComplete(task) {
                    let item = this.filteredTasks.find((d) => d.id === task.id);
                    item.status = item.status === 'complete' ? '' : 'complete';
                    this.searchTasks(false);
                },

                setImportant(task) {
                    let item = this.filteredTasks.find((d) => d.id === task.id);
                    item.status = item.status === 'important' ? '' : 'important';
                    this.searchTasks(false);
                },

                viewTask(item) {
                    this.selectedTask = item;
                    setTimeout(() => {
                        this.viewTaskModal = true;
                    });
                },

                addEditTask(task) {
                    this.isShowTaskMenu = false;

                    this.params = JSON.parse(JSON.stringify(defaultParams));
                    this.quillEditor.root.innerHTML = '';

                    if (task) {
                        this.params = JSON.parse(JSON.stringify(task));
                        this.quillEditor.root.innerHTML = this.params.description;
                    }

                    this.addTaskModal = true;
                },

                deleteTask(task, type) {
                    if (type === 'delete') {
                        task.status = 'trash';
                    }
                    if (type === 'deletePermanent') {
                        this.allTasks = this.allTasks.filter((d) => d.id != task.id);
                    } else if (type === 'restore') {
                        task.status = '';
                    }
                    this.searchTasks(false);
                },

                saveTask() {
                    if (!this.params.title) {
                        this.showMessage('Title is required.', 'error');
                        return false;
                    }

                    if (this.params.id) {
                        //update task
                        this.pagedTasks = this.pagedTasks.map((d) => {
                            if (d.id === this.params.id) {
                                d = this.params;
                                d.description = this.quillEditor.root.innerHTML;
                                d.descriptionText = this.quillEditor.getText();
                            }
                            return d;
                        });
                    } else {
                        //add task
                        const maxid = this.allTasks.length ? this.allTasks.reduce((max, obj) => (obj.id > max ? obj.id : max), this.allTasks[0].id) : 0;

                        const today = new Date();
                        const dd = String(today.getDate()).padStart(2, '0');
                        const mm = String(today.getMonth());
                        const yyyy = today.getFullYear();
                        const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

                        let task = this.params;
                        task.id = maxid + 1;
                        task.description = this.quillEditor.root.innerHTML;
                        task.descriptionText = this.quillEditor.getText();
                        task.date = monthNames[mm] + ', ' + dd + ' ' + yyyy;

                        this.allTasks.splice(0, 0, task);
                        this.searchTasks();
                    }

                    this.showMessage('Task has been saved successfully.');
                    this.addTaskModal = false;
                },

                showMessage(msg = '', type = 'success') {
                    const toast = window.Swal.mixin({
                        toast: true,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                    });
                    toast.fire({
                        icon: type,
                        title: msg,
                        padding: '10px 20px',
                    });
                },
            }));
        });
    </script>
</body>

</html>