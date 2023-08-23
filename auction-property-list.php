<!-- start sidebar section -->
<?php @include('common-layout/header.php') ?>
<!-- end sidebar section -->

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased" :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">
    <!-- sidebar menu overlay -->
    <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{'hidden' : !$store.app.sidebar}" @click="$store.app.toggleSidebar()"></div>

    <!-- start theme customizer section -->
    <div x-data="customizer">
        <div class="fixed inset-0 z-[51] hidden bg-[black]/60 px-4 transition-[display]" :class="{'!block': showCustomizer}" @click="showCustomizer = false"></div>
    </div>
    <!-- end theme customizer section -->

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
                        <h2 class="text-xl">Auction Properties</h2>
                    </div>
                    <div class="all-properties">
                        <div class="properties">
                            <ul>
                                <li>
                                    <h4>All Properties(6,000)</h4>
                                </li>
                                <li>
                                    <a href="#">Published(5,000)</a>
                                </li>
                                <li>
                                    <h4>All Properties(6,000)</h4>
                                </li>
                                <li>
                                    <h4>All Properties(6,000)</h4>
                                </li>
                            </ul>
                        </div>

                        <button type="button" class="btn btn-primary " ; @click="editUser">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:mr-2 rtl:ml-2">
                                <circle cx="10" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                <path opacity="0.5" d="M18 17.5C18 19.9853 18 22 10 22C2 22 2 19.9853 2 17.5C2 15.0147 5.58172 13 10 13C14.4183 13 18 15.0147 18 17.5Z" stroke="currentColor" stroke-width="1.5" />
                                <path d="M21 10H19M19 10H17M19 10L19 8M19 10L19 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            Add Product
                        </button>
                    </div>
                    <div class="relative flex h-full gap-5 sm:h-[calc(100vh_-_150px)]">
                        <div class="overlay absolute z-[5] hidden h-full w-full rounded-md bg-black/60" :class="{ '!block xl:!hidden': isShowTaskMenu }" @click="isShowTaskMenu = !isShowTaskMenu">
                        </div>
                        <div class="panel h-full flex-1 overflow-auto p-0">
                            <div class="flex h-full flex-col">
                                <div class="flex w-full flex-col gap-4 p-4 sm:flex-row sm:items-center">
                                    <div class="flex items-center ltr:mr-3 rtl:ml-3">
                                        <button type="button" class="block hover:text-primary ltr:mr-3 rtl:ml-3 xl:hidden" @click="isShowTaskMenu = !isShowTaskMenu">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                                                <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                            </svg>
                                        </button>
                                        <div class="group relative flex-1">
                                            <input type="text" class="peer form-input ltr:!pr-10 rtl:!pl-10" placeholder="Search Task..." x-model="searchTask" @keyup="searchTasks()" />
                                            <div class="absolute top-1/2 -translate-y-1/2 peer-focus:text-primary ltr:right-[11px] rtl:left-[11px]">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4">
                                                    <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5"></circle>
                                                    <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-1 items-center justify-center sm:flex-auto sm:justify-end">
                                        <p class="ltr:mr-3 rtl:ml-3" x-text="pager.startIndex+1 + '-' +( pager.endIndex+1) + ' of ' + filteredTasks.length">
                                        </p>
                                        <button type="button" :disabled="pager.currentPage == 1" class="rounded-md bg-[#f4f4f4] p-1 enabled:hover:bg-primary-light disabled:cursor-not-allowed disabled:opacity-60 ltr:mr-3 rtl:ml-3 dark:bg-white-dark/20 enabled:dark:hover:bg-white-dark/30" @click="pager.currentPage--,searchTasks(false)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rtl:rotate-180">
                                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                        <button type="button" :disabled="pager.currentPage == pager.totalPages" class="rounded-md bg-[#f4f4f4] p-1 enabled:hover:bg-primary-light disabled:cursor-not-allowed disabled:opacity-60 dark:bg-white-dark/20 enabled:dark:hover:bg-white-dark/30" @click="pager.currentPage++,searchTasks(false)">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ltr:rotate-180">
                                                <path d="M15 5L9 12L15 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="h-px w-full border-b border-[#e0e6ed] dark:border-[#1b2e4b]"></div>
                                <template x-if="pagedTasks.length">
                                    <div class="table-responsive min-h-[400px] grow overflow-y-auto sm:min-h-[300px]">
                                        <table class="table-hover">
                                            <tbody>
                                                <template x-for="task in pagedTasks">
                                                    <tr :key="task.id" class="group cursor-pointer" :class="{ 'bg-white-light/30 dark:bg-[#1a2941]' : task.status === 'complete' }">
                                                        <td class="w-1">
                                                            <input type="checkbox" :id="`chk-${task.id}`" class="form-checkbox" :checked="task.status === 'complete'" @click.stop="taskComplete(task)" :disabled="selectedTab === 'trash'" />
                                                        </td>
                                                        <td class="w-1">
                                                            <div class="flex w-max items-center justify-between">
                                                                <div class="flex-shrink-0 ltr:mr-2.5 rtl:ml-2.5">
                                                                    <template x-if="task.path">
                                                                        <img :src="`assets/images/${task.path}`" class="h-8 w-8 rounded-full object-cover" alt="avatar" />
                                                                    </template>
                                                                    <template x-if="!task.path && task.assignee">
                                                                        <div class="grid h-8 w-8 place-content-center rounded-full bg-primary text-sm font-semibold text-white" x-text="task.assignee.charAt(0) + '' + task.assignee.charAt(task.assignee.indexOf(' ') + 1)">
                                                                        </div>
                                                                    </template>
                                                                    <template x-if="!task.path && !task.assignee">
                                                                        <div class="rounded-full border border-gray-300 p-2 dark:border-gray-800">
                                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5">
                                                                                <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5"></circle>
                                                                                <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" stroke="currentColor" stroke-width="1.5"></ellipse>
                                                                            </svg>
                                                                        </div>
                                                                    </template>
                                                                </div>
                                                                <div x-data="dropdown" @click.outside="open = false" class="dropdown">
                                                                    <button type="button" @click="toggle">
                                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 rotate-90 opacity-70">
                                                                            <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                                            <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                                            <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5"></circle>
                                                                        </svg>
                                                                    </button>
                                                                    <template x-if="selectedTab !== 'trash'">
                                                                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="whitespace-nowrap ltr:right-0 rtl:left-0">
                                                                            <li>
                                                                                <a href="javascript:;" @click="toggle, addEditTask(task)">
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 shrink-0 ltr:mr-2 rtl:ml-2">
                                                                                        <path opacity="0.5" d="M4 22H20" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                                                        <path d="M14.6296 2.92142L13.8881 3.66293L7.07106 10.4799C6.60933 10.9416 6.37846 11.1725 6.17992 11.4271C5.94571 11.7273 5.74491 12.0522 5.58107 12.396C5.44219 12.6874 5.33894 12.9972 5.13245 13.6167L4.25745 16.2417L4.04356 16.8833C3.94194 17.1882 4.02128 17.5243 4.2485 17.7515C4.47573 17.9787 4.81182 18.0581 5.11667 17.9564L5.75834 17.7426L8.38334 16.8675L8.3834 16.8675C9.00284 16.6611 9.31256 16.5578 9.60398 16.4189C9.94775 16.2551 10.2727 16.0543 10.5729 15.8201C10.8275 15.6215 11.0583 15.3907 11.5201 14.929L11.5201 14.9289L18.3371 8.11195L19.0786 7.37044C20.3071 6.14188 20.3071 4.14999 19.0786 2.92142C17.85 1.69286 15.8581 1.69286 14.6296 2.92142Z" stroke="currentColor" stroke-width="1.5" />
                                                                                        <path opacity="0.5" d="M13.8879 3.66406C13.8879 3.66406 13.9806 5.23976 15.3709 6.63008C16.7613 8.0204 18.337 8.11308 18.337 8.11308M5.75821 17.7437L4.25732 16.2428" stroke="currentColor" stroke-width="1.5" />
                                                                                    </svg>
                                                                                    Edit
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;" @click="toggle,  deleteTask(task, 'delete' )">
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                                                                        <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                                                        </path>
                                                                                        <path d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                                                        </path>
                                                                                        <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                                                        </path>
                                                                                        <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                                                        </path>
                                                                                        <path opacity="0.5" d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="currentColor" stroke-width="1.5"></path>
                                                                                    </svg>
                                                                                    Delete</a>
                                                                            </li>
                                                                            <li hidden>
                                                                                <a href="javascript:;" @click="toggle, setImportant(task)">
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-4.5 w-4.5 shrink-0 ltr:mr-2 rtl:ml-2">
                                                                                        <path d="M9.15316 5.40838C10.4198 3.13613 11.0531 2 12 2C12.9469 2 13.5802 3.13612 14.8468 5.40837L15.1745 5.99623C15.5345 6.64193 15.7144 6.96479 15.9951 7.17781C16.2757 7.39083 16.6251 7.4699 17.3241 7.62805L17.9605 7.77203C20.4201 8.32856 21.65 8.60682 21.9426 9.54773C22.2352 10.4886 21.3968 11.4691 19.7199 13.4299L19.2861 13.9372C18.8096 14.4944 18.5713 14.773 18.4641 15.1177C18.357 15.4624 18.393 15.8341 18.465 16.5776L18.5306 17.2544C18.7841 19.8706 18.9109 21.1787 18.1449 21.7602C17.3788 22.3417 16.2273 21.8115 13.9243 20.7512L13.3285 20.4768C12.6741 20.1755 12.3469 20.0248 12 20.0248C11.6531 20.0248 11.3259 20.1755 10.6715 20.4768L10.0757 20.7512C7.77268 21.8115 6.62118 22.3417 5.85515 21.7602C5.08912 21.1787 5.21588 19.8706 5.4694 17.2544L5.53498 16.5776C5.60703 15.8341 5.64305 15.4624 5.53586 15.1177C5.42868 14.773 5.19043 14.4944 4.71392 13.9372L4.2801 13.4299C2.60325 11.4691 1.76482 10.4886 2.05742 9.54773C2.35002 8.60682 3.57986 8.32856 6.03954 7.77203L6.67589 7.62805C7.37485 7.4699 7.72433 7.39083 8.00494 7.17781C8.28555 6.96479 8.46553 6.64194 8.82547 5.99623L9.15316 5.40838Z" stroke="currentColor" stroke-width="1.5"></path>
                                                                                    </svg>
                                                                                    <span x-text="task.status === 'important' ? 'Not Important' : 'Important'"></span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </template>
                                                                    <template x-if="selectedTab === 'trash'">
                                                                        <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="w-44 ltr:right-0 rtl:left-0">
                                                                            <li>
                                                                                <a href="javascript:;" @click="toggle, deleteTask(task, 'deletePermanent' )">
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                                                                        <path d="M20.5001 6H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                                                        </path>
                                                                                        <path d="M18.8334 8.5L18.3735 15.3991C18.1965 18.054 18.108 19.3815 17.243 20.1907C16.378 21 15.0476 21 12.3868 21H11.6134C8.9526 21 7.6222 21 6.75719 20.1907C5.89218 19.3815 5.80368 18.054 5.62669 15.3991L5.16675 8.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                                                        </path>
                                                                                        <path opacity="0.5" d="M9.5 11L10 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                                                        </path>
                                                                                        <path opacity="0.5" d="M14.5 11L14 16" stroke="currentColor" stroke-width="1.5" stroke-linecap="round">
                                                                                        </path>
                                                                                        <path opacity="0.5" d="M6.5 6C6.55588 6 6.58382 6 6.60915 5.99936C7.43259 5.97849 8.15902 5.45491 8.43922 4.68032C8.44784 4.65649 8.45667 4.62999 8.47434 4.57697L8.57143 4.28571C8.65431 4.03708 8.69575 3.91276 8.75071 3.8072C8.97001 3.38607 9.37574 3.09364 9.84461 3.01877C9.96213 3 10.0932 3 10.3553 3H13.6447C13.9068 3 14.0379 3 14.1554 3.01877C14.6243 3.09364 15.03 3.38607 15.2493 3.8072C15.3043 3.91276 15.3457 4.03708 15.4286 4.28571L15.5257 4.57697C15.5433 4.62992 15.5522 4.65651 15.5608 4.68032C15.841 5.45491 16.5674 5.97849 17.3909 5.99936C17.4162 6 17.4441 6 17.5 6" stroke="currentColor" stroke-width="1.5"></path>
                                                                                    </svg>
                                                                                    Permanent Delete
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="javascript:;" @click="toggle, deleteTask(task, 'restore')">
                                                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 shrink-0 ltr:mr-2 rtl:ml-2">
                                                                                        <g clip-path="url(#clip0_1276_6232)">
                                                                                            <path d="M19.7285 10.9288C20.4413 13.5978 19.7507 16.5635 17.6569 18.6573C14.5327 21.7815 9.46736 21.7815 6.34316 18.6573C3.21897 15.5331 3.21897 10.4678 6.34316 7.3436C9.46736 4.21941 14.5327 4.21941 17.6569 7.3436L18.364 8.05071M18.364 8.05071H14.1213M18.364 8.05071V3.80807" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                                            </path>
                                                                                        </g>
                                                                                        <defs>
                                                                                            <clipPath id="clip0_1276_6232">
                                                                                                <rect width="24" height="24" fill="white"></rect>
                                                                                            </clipPath>
                                                                                        </defs>
                                                                                    </svg>
                                                                                    Restore Task
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </template>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div @click="viewTask(task)">
                                                                <div class="whitespace-nowrap text-base font-semibold group-hover:text-primary" :class="{ 'line-through': task.status === 'complete' }" x-text="task.title"></div>
                                                                <div class="min-w-[300px] overflow-hidden text-white-dark line-clamp-1" :class="{ 'line-through': task.status === 'complete' }" x-text="task.descriptionText"></div>
                                                            </div>
                                                        </td>
                                                        <td class="w-1">
                                                            <div class="flex items-center space-x-2 ltr:justify-end rtl:justify-start rtl:space-x-reverse">
                                                                <template x-if="task.priority">
                                                                    <span class="badge bg-danger shadow-md dark:group-hover:bg-transparent">Inactive</span>
                                                                </template>
                                                                <template x-if="task.tag">
                                                                    <span class="badge bg-success shadow-md dark:group-hover:bg-transparent">Active</span>
                                                                </template>
                                                            </div>
                                                        </td>
                                                        <td class="w-1">
                                                            <p class="whitespace-nowrap font-medium text-white-dark" :class="{ 'line-through': task.status === 'complete' }" x-text="task.date"></p>
                                                        </td>
                                                    </tr>
                                                </template>
                                            </tbody>
                                        </table>
                                    </div>
                                </template>
                                <template x-if="!pagedTasks.length">
                                    <div class="flex h-full min-h-[400px] items-center justify-center text-lg font-semibold sm:min-h-[300px]">
                                        No data available
                                    </div>
                                </template>
                            </div>
                        </div>

                        <div class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60 px-4" :class="{'!block':addTaskModal}">
                            <div class="flex min-h-screen items-center justify-center">
                                <div x-show="addTaskModal" x-transition x-transition.duration.300 @click.outside="addTaskModal = false" class="panel my-8 w-[90%] max-w-lg overflow-hidden rounded-lg border-0 p-0 md:w-full">
                                    <button type="button" class="absolute top-4 text-white-dark hover:text-dark ltr:right-4 rtl:left-4" @click="addTaskModal = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <div class="bg-[#fbfbfb] py-3 text-lg font-medium ltr:pl-5 ltr:pr-[50px] rtl:pr-5 rtl:pl-[50px] dark:bg-[#121c2c]" x-text="params.id ? 'Edit Task' : 'Add Task'"></div>
                                    <div class="p-5">
                                        <form @submit.prevent="saveTask">
                                            <div class="mb-5">
                                                <label for="title">Title</label>
                                                <input id="title" type="text" placeholder="Enter Task Title" class="form-input" x-model="params.title" />
                                            </div>
                                            <div class="mb-5">
                                                <label for="assignee">Assignee</label>
                                                <select id="assignee" class="form-select" x-model="params.assignee">
                                                    <option value="">Select Assignee</option>
                                                    <option value="John Smith">John Smith</option>
                                                    <option value="Kia Vega">Kia Vega</option>
                                                    <option value="Sandy Doe">Sandy Doe</option>
                                                    <option value="Jane Foster">Jane Foster</option>
                                                    <option value="Donna Frank">Donna Frank</option>
                                                </select>
                                            </div>
                                            <div class="mb-5">
                                                <label>Description</label>
                                                <div x-ref="editor"></div>
                                            </div>
                                            <div class="mt-8 flex items-center justify-end ltr:text-right rtl:text-left">
                                                <button type="button" class="btn btn-outline-danger" @click="addTaskModal = false">Cancel</button>
                                                <button type="submit" class="btn btn-primary ltr:ml-4 rtl:mr-4" x-text="params.id ? 'Update' : 'Add'">
                                                    Add
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="fixed inset-0 z-[999] hidden overflow-y-auto bg-[black]/60" :class="{'!block':viewTaskModal}">
                            <div class="flex min-h-screen items-center justify-center px-4" @click.self="viewTaskModal = false">
                                <div x-show="viewTaskModal" x-transition x-transition.duration.300 class="panel my-8 w-[90%] max-w-lg overflow-hidden rounded-lg border-0 p-0 md:w-full">
                                    <button type="button" class="absolute top-4 text-white-dark hover:text-dark ltr:right-4 rtl:left-4" @click="viewTaskModal = false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="h-6 w-6">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                    <div class="flex flex-wrap items-center gap-2 bg-[#fbfbfb] py-3 text-lg font-medium ltr:pl-5 ltr:pr-[50px] rtl:pr-5 rtl:pl-[50px] dark:bg-[#121c2c]">
                                        <div x-text="selectedTask.title"></div>
                                        <div x-show="selectedTask.priority" x-text="selectedTask.priority" class="badge rounded-3xl capitalize" :class="{
                                            'badge-outline-primary': selectedTask.priority === 'medium',
                                            'badge-outline-warning ': selectedTask.priority === 'low',
                                            'badge-outline-danger ': selectedTask.priority === 'high',
                                        }"></div>

                                        <div x-show="selectedTask.tag" x-text="selectedTask.tag" class="badge rounded-3xl capitalize" :class="{
                                            'badge-outline-success ': selectedTask.tag === 'team',
                                            'badge-outline-info ': selectedTask.tag === 'update',
                                        }"></div>
                                    </div>
                                    <div class="p-5">
                                        <div class="prose text-base" x-html="selectedTask.description"></div>

                                        <div class="mt-8 flex items-center justify-end">
                                            <button type="button" class="btn btn-outline-danger" @click="viewTaskModal = false">Close</button>
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