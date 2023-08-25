<!-- start sidebar section -->
<div :class="{'dark text-white-dark' : $store.app.semidark}">
    <nav x-data="sidebar" class="sidebar fixed bottom-0 top-0 z-50 h-full min-h-screen w-[260px] shadow-[5px_0_25px_0_rgba(94,92,154,0.1)] transition-all duration-300">
        <div class="h-full bg-white dark:bg-[#0e1726]">
            <div class="flex items-center justify-between px-4 py-3">
                <a href="index.php" class="main-logo flex shrink-0 items-center">
                    <img class="ml-[5px] w-60 flex-none" src="assets/imagess/hecta-logo.svg" alt="image" />
                </a>
                <a href="javascript:;" class="collapse-icon flex h-8 w-8 items-center rounded-full transition duration-300 hover:bg-gray-500/10 rtl:rotate-180 dark:text-white-light dark:hover:bg-dark-light/10" @click="$store.app.toggleSidebar()">
                    <svg class="m-auto h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 19L7 12L13 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path opacity="0.5" d="M16.9998 19L10.9998 12L16.9998 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <ul class="perfect-scrollbar relative h-[calc(100vh-80px)] space-y-0.5 overflow-y-auto overflow-x-hidden p-4 py-0 font-semibold" x-data="{ activeDropdown: 'dashboard' }">
                <li class="nav-item">
                    <a href="index.php" class="group">
                        <div class="flex items-center">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.6667 7.5C11.4306 7.5 11.2326 7.42014 11.0729 7.26042C10.9132 7.10069 10.8333 6.90278 10.8333 6.66667V3.33333C10.8333 3.09722 10.9132 2.89931 11.0729 2.73958C11.2326 2.57986 11.4306 2.5 11.6667 2.5H16.6667C16.9028 2.5 17.1007 2.57986 17.2604 2.73958C17.4201 2.89931 17.5 3.09722 17.5 3.33333V6.66667C17.5 6.90278 17.4201 7.10069 17.2604 7.26042C17.1007 7.42014 16.9028 7.5 16.6667 7.5H11.6667ZM3.33333 10.8333C3.09722 10.8333 2.89931 10.7535 2.73958 10.5938C2.57986 10.434 2.5 10.2361 2.5 10V3.33333C2.5 3.09722 2.57986 2.89931 2.73958 2.73958C2.89931 2.57986 3.09722 2.5 3.33333 2.5H8.33333C8.56944 2.5 8.76736 2.57986 8.92708 2.73958C9.08681 2.89931 9.16667 3.09722 9.16667 3.33333V10C9.16667 10.2361 9.08681 10.434 8.92708 10.5938C8.76736 10.7535 8.56944 10.8333 8.33333 10.8333H3.33333ZM11.6667 17.5C11.4306 17.5 11.2326 17.4201 11.0729 17.2604C10.9132 17.1007 10.8333 16.9028 10.8333 16.6667V10C10.8333 9.76389 10.9132 9.56597 11.0729 9.40625C11.2326 9.24653 11.4306 9.16667 11.6667 9.16667H16.6667C16.9028 9.16667 17.1007 9.24653 17.2604 9.40625C17.4201 9.56597 17.5 9.76389 17.5 10V16.6667C17.5 16.9028 17.4201 17.1007 17.2604 17.2604C17.1007 17.4201 16.9028 17.5 16.6667 17.5H11.6667ZM3.33333 17.5C3.09722 17.5 2.89931 17.4201 2.73958 17.2604C2.57986 17.1007 2.5 16.9028 2.5 16.6667V13.3333C2.5 13.0972 2.57986 12.8993 2.73958 12.7396C2.89931 12.5799 3.09722 12.5 3.33333 12.5H8.33333C8.56944 12.5 8.76736 12.5799 8.92708 12.7396C9.08681 12.8993 9.16667 13.0972 9.16667 13.3333V16.6667C9.16667 16.9028 9.08681 17.1007 8.92708 17.2604C8.76736 17.4201 8.56944 17.5 8.33333 17.5H3.33333Z" fill="#00BBBB" />
                            </svg>

                            <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <ul>
                        <li class="menu nav-item">
                            <button type="button" class="nav-link group" :class="{'active' : activeDropdown === 'property'}" @click="activeDropdown === 'property' ? activeDropdown = null : activeDropdown = 'property'">
                                <div class="flex items-center">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.1658 17.6765V9.17018C14.1658 8.80518 14.0836 8.45968 13.9191 8.13368C13.7547 7.80768 13.5232 7.53965 13.2247 7.3296L8.27724 3.7517C8.41734 3.32537 8.67217 2.98071 9.04174 2.71772C9.41131 2.45474 9.831 2.32324 10.3008 2.32324H17.1341C17.7643 2.32324 18.3038 2.54764 18.7526 2.99643C19.2014 3.44522 19.4258 3.98473 19.4258 4.61495V15.3848C19.4258 16.015 19.2014 16.5546 18.7526 17.0033C18.3038 17.4521 17.7643 17.6765 17.1341 17.6765H14.1658ZM14.1658 14.1666H15.9158V12.4166H14.1658V14.1666ZM14.1658 10.8749H15.9158V9.12489H14.1658V10.8749ZM14.1658 7.58322H15.9158V5.83322H14.1658V7.58322ZM0.550781 16.5327V10.2068C0.550781 9.84044 0.632906 9.49396 0.797156 9.16735C0.96142 8.84072 1.19693 8.5666 1.5037 8.34499L5.27541 5.65749C5.68514 5.37246 6.1339 5.22995 6.62168 5.22995C7.10946 5.22995 7.55323 5.37246 7.95299 5.65749L11.6921 8.34499C11.9984 8.56346 12.2338 8.83774 12.3983 9.16783C12.5628 9.49789 12.645 9.84422 12.645 10.2068V16.5327C12.645 16.8381 12.5307 17.1051 12.3022 17.3337C12.0736 17.5622 11.8073 17.6765 11.5032 17.6765H8.3017V12.2399H4.90586V17.6765H1.69264C1.38854 17.6765 1.1222 17.5622 0.893635 17.3337C0.665066 17.1051 0.550781 16.8381 0.550781 16.5327Z" fill="#00BBBB" />
                                    </svg>

                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Properties</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'property'}">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <ul x-cloak x-show="activeDropdown === 'property'" x-collapse class="sub-menu text-gray-500">
                                <li>
                                    <a href="property-list.php">All Properties</a>
                                </li>
                                <li>
                                    <a href="auction-property-list.php">Auction Properties</a>
                                </li>
                                <li>
                                    <a href="bank-list.php">Bank & Institutions</a>
                                </li>
                                <li>
                                    <a href="property-category.php">Property Categories</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="leads.php" class="group">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M0 12c0 6.627 5.373 12 12 12s12-5.373 12-12-5.373-12-12-12-12 5.373-12 12zm17-1h-4v8h-2v-8h-4l5-6 5 6z" />
                                    </svg>
                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Leads</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="customers.php" class="group">
                                <div class="flex items-center">
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M7 16.488l1.526-.723c1.792-.81 2.851-.344 4.349.232 1.716.661 2.365.883 3.077 1.164 1.278.506.688 2.177-.592 1.838-.778-.206-2.812-.795-3.38-.931-.64-.154-.93.602-.323.818 1.106.393 2.663.79 3.494 1.007.831.218 1.295-.145 1.881-.611.906-.72 2.968-2.909 2.968-2.909.842-.799 1.991-.135 1.991.72 0 .23-.083.474-.276.707-2.328 2.793-3.06 3.642-4.568 5.226-.623.655-1.342.974-2.204.974-.442 0-.922-.084-1.443-.25-1.825-.581-4.172-1.313-6.5-1.6v-5.662zm-1 6.538h-4v-8h4v8zm1-7.869v-1.714c-.006-1.557.062-2.447 1.854-2.861 1.963-.453 4.315-.859 3.384-2.577-2.761-5.092-.787-7.979 2.177-7.979 2.907 0 4.93 2.78 2.177 7.979-.904 1.708 1.378 2.114 3.384 2.577 1.799.415 1.859 1.311 1.853 2.879 0 .13-.011 1.171 0 1.665-.483-.309-1.442-.552-2.187.106-.535.472-.568.504-1.783 1.629-1.75-.831-4.456-1.883-6.214-2.478-.896-.304-2.04-.308-2.962.075l-1.683.699z" />
                                    </svg>
                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Customers</span>
                                </div>
                            </a>
                        </li>
                        <li class="menu nav-item">
                            <button type="button" class="nav-link group" :class="{'active' : activeDropdown === 'order'}" @click="activeDropdown === 'order' ? activeDropdown = null : activeDropdown = 'order'">
                                <div class="flex items-center">
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M13.403 24h-13.403v-22h3c1.231 0 2.181-1.084 3-2h8c.821.916 1.772 2 3 2h3v9.15c-.485-.098-.987-.15-1.5-.15l-.5.016v-7.016h-4l-2 2h-3.897l-2.103-2h-4v18h9.866c.397.751.919 1.427 1.537 2zm5.097-11c3.035 0 5.5 2.464 5.5 5.5s-2.465 5.5-5.5 5.5c-3.036 0-5.5-2.464-5.5-5.5s2.464-5.5 5.5-5.5zm0 2c1.931 0 3.5 1.568 3.5 3.5s-1.569 3.5-3.5 3.5c-1.932 0-3.5-1.568-3.5-3.5s1.568-3.5 3.5-3.5zm2.5 4h-3v-3h1v2h2v1zm-15.151-4.052l-1.049-.984-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.385zm6.151 1.052h-2v-1h2v1zm2-2h-4v-1h4v1zm-8.151-4.025l-1.049-.983-.8.823 1.864 1.776 3.136-3.192-.815-.808-2.336 2.384zm8.151 1.025h-4v-1h4v1zm0-2h-4v-1h4v1zm-5-6c0 .552.449 1 1 1 .553 0 1-.448 1-1s-.447-1-1-1c-.551 0-1 .448-1 1z" />
                                    </svg>
                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Orders</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'order'}">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <ul x-cloak x-show="activeDropdown === 'order'" x-collapse class="sub-menu text-gray-500">
                                <li>
                                    <a href="order.php">All Orders</a>
                                </li>
                                <li>
                                    <a href="invoice.php">Invoice</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="user-wallet.php" class="group">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M7.972 2h-6.972l.714 5h2.021l-.429-3h3.694c1.112 1.388 1.952 2 4.277 2h9.283l-.2 1h2.04l.6-3h-11.723c-1.978 0-2.041-.417-3.305-2zm16.028 7h-24l2 13h20l2-13z" />
                                    </svg>
                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Wallet</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="reports.php" class="group">
                                <div class="flex items-center">
                                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M22 0h-20v24h14l6-6v-18zm-6 18h4.36l-4.36 4.385v-4.385zm-3 1h-8v1h8v-1zm0-3h-8v1h8v-1zm6-2v-1h-14v1h14zm-7.059-4.968c-1.147-.265-2.214-.497-1.697-1.473 1.573-2.97.417-4.559-1.244-4.559-1.694 0-2.821 1.65-1.244 4.559.532.982-.575 1.214-1.697 1.473-1.024.237-1.062.745-1.059 1.635l.001.333h7.997l.001-.323c.004-.896-.03-1.407-1.058-1.645zm7.059.968h-4v1h4v-1zm0-2v-1h-4v1h4zm0-4h-4v1h4v-1z" />
                                    </svg>
                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Reports</span>
                                </div>
                            </a>
                        </li>
                        <li class="menu nav-item">
                            <button type="button" class="nav-link group" :class="{'active' : activeDropdown === 'blogs'}" @click="activeDropdown === 'blogs' ? activeDropdown = null : activeDropdown = 'blogs'">
                                <div class="flex items-center">
                                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m11.239 15.533c-1.045 3.004-1.238 3.451-1.238 3.84 0 .441.385.627.627.627.272 0 1.108-.301 3.829-1.249zm.888-.888 3.22 3.22 6.408-6.401c.163-.163.245-.376.245-.591 0-.213-.082-.427-.245-.591-.58-.579-1.458-1.457-2.039-2.036-.163-.163-.377-.245-.591-.245-.213 0-.428.082-.592.245zm-3.127-.895c0-.402-.356-.75-.75-.75-2.561 0-2.939 0-5.5 0-.394 0-.75.348-.75.75s.356.75.75.75h5.5c.394 0 .75-.348.75-.75zm5-3c0-.402-.356-.75-.75-.75-2.561 0-7.939 0-10.5 0-.394 0-.75.348-.75.75s.356.75.75.75h10.5c.394 0 .75-.348.75-.75zm0-3c0-.402-.356-.75-.75-.75-2.561 0-7.939 0-10.5 0-.394 0-.75.348-.75.75s.356.75.75.75h10.5c.394 0 .75-.348.75-.75zm0-3c0-.402-.356-.75-.75-.75-2.561 0-7.939 0-10.5 0-.394 0-.75.348-.75.75s.356.75.75.75h10.5c.394 0 .75-.348.75-.75z" fill-rule="nonzero" />
                                    </svg>
                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">Blogs</span>
                                </div>
                                <div class="rtl:rotate-180" :class="{'!rotate-90' : activeDropdown === 'blogs'}">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 5L15 12L9 19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                            </button>
                            <ul x-cloak x-show="activeDropdown === 'blogs'" x-collapse class="sub-menu text-gray-500">
                                <li>
                                    <a href="all-blogs.php">All Blogs</a>
                                </li>
                                <li>
                                    <a href="blog-categories.php">Blog Categories</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="index.php" class="group">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path d="M23.269 19.743l-11.945-11.945c-.557-.557-.842-1.33-.783-2.115.115-1.485-.395-3.009-1.529-4.146-1.03-1.028-2.376-1.537-3.723-1.537-.507 0-1.015.072-1.505.216l3.17 3.17c.344 1.589-1.959 3.918-3.567 3.567l-3.169-3.17c-.145.492-.218 1-.218 1.509 0 1.347.51 2.691 1.538 3.721 1.135 1.136 2.66 1.645 4.146 1.53.783-.06 1.557.226 2.113.783l11.946 11.944c.468.468 1.102.73 1.763.73 1.368 0 2.494-1.108 2.494-2.494 0-.638-.244-1.276-.731-1.763zm-1.769 2.757c-.553 0-1-.448-1-1s.447-1 1-1c.553 0 1 .448 1 1s-.447 1-1 1zm-7.935-15.289l5.327-5.318c.584-.585 1.348-.878 2.113-.878.764 0 1.529.292 2.113.878.589.587.882 1.357.882 2.125 0 .764-.291 1.528-.873 2.11l-5.326 5.318-4.236-4.235zm-3.53 9.18l-5.227 5.185c-.227.23-.423.488-.574.774l-.301.58-2.1 1.07-.833-.834 1.025-2.146.58-.302c.286-.15.561-.329.79-.558l5.227-5.185 1.413 1.416z" />
                                    </svg>
                                    <span class="text-black ltr:pl-3 rtl:pr-3 dark:text-[#506690] dark:group-hover:text-white-dark">System Settings</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- end sidebar section -->