<!-- start sidebar section -->
<?php @include('common-layout/header.php') ?>
<!-- end sidebar section -->

<div class="main-container min-h-screen text-black dark:text-white-dark" :class="[$store.app.navbar]">
    <!-- start sidebar section -->
    <?php @include('common-layout/sidebar.php') ?>
    <!-- end sidebar section -->

    <div class="main-content flex min-h-screen flex-col">

        <!-- start header section -->
        <?php @include('common-layout/topbar.php') ?>
        <!-- end header section -->

        <div class="animate__animated p-6" :class="[$store.app.animation]">
            <div x-data="form">
                <!-- start main content section -->
                <ul class="flex space-x-2 rtl:space-x-reverse pb-5 ">
                    <li>
                        <a href="javascript:;" class="text-primary hover:underline">User</a>
                    </li>
                    <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                        <span>Add User</span>
                    </li>
                </ul>
                <form action="#" method="post">
                    <!-- Start Blog Information -->
                    <div class="panel ">
                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">User Information</h5>
                        </div>
                        <div class="mb-5">

                            <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">

                                <div class="form-group">
                                    <label for="Username">User Name</label>
                                    <input id="Username" type="text" placeholder="Enter User Name" class="form-input"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" placeholder="Enter  Email" class="form-input"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone number</label>
                                    <input id="phone" type="number" placeholder="Enter  Phone number" class="form-input"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <div x-data="form">
                                        <input id="basic" x-model="date1" class="form-input" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select class="selectize">
                                        <option selected value="role1">role 1</option>
                                        <option value="role2">role 2</option>
                                        <option value="role3">role 3</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="PropertyExcerpt ">Address </label>
                                    <textarea rows="1" class="form-textarea"></textarea>
                                </div>


                                <div class="form-group">
                                    <!-- single file -->
                                    <div class="custom-file-container" data-upload-id="myFirstImage"></div>


                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End User Information  -->

                    <button type="button" class="btn btn-success m-auto mt-5">Add User</button>
                </form>
                <!-- end main content section -->
            </div>
        </div>
    </div>
</div>
<!-- City Dropdown -->
<script>
    document.addEventListener("DOMContentLoaded", function (e) {
        // default
        var els = document.querySelectorAll(".selectize");
        els.forEach(function (select) {
            NiceSelect.bind(select);
        });
    });
</script>

<!--DOB Date script -->
<script>
    document.addEventListener("alpine:init", () => {
        Alpine.data("form", () => ({
            date1: '2022-07-05',
            init() {
                flatpickr(document.getElementById('basic'), {
                    dateFormat: 'Y-m-d',
                    defaultDate: this.date1,
                })
            }
        }));
    });

</script>

<!-- start sidebar section -->
<?php @include('common-layout/footer.php') ?>
<!-- end sidebar section -->

<script>
    // single image upload
    new FileUploadWithPreview.FileUploadWithPreview('myFirstImage', {
        images: {
            baseImage: 'assets/images/file-preview.svg',
            backgroundImage: '',
        },
    });

    // multiple image upload
    new FileUploadWithPreview.FileUploadWithPreview('mySecondImage', {
        images: {
            baseImage: 'assets/images/file-preview.svg',
            backgroundImage: '',
        },
        multiple: true,
    });

</script>