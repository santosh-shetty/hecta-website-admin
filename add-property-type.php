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
                        <a href="javascript:;" class="text-primary hover:underline">Property</a>
                    </li>
                    <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                        <span>Add Property Type</span>
                    </li>
                </ul>
                <form action="#" method="post">
                    <!-- Start Property Information -->
                    <div class="panel ">
                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Property Type Information</h5>
                        </div>
                        <div class="mb-5">

                            <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">

                                <div class="form-group">
                                    <label for="PropertyTitle">Property Type Title</label>
                                    <input id="PropertyTitle" type="text" placeholder="Enter Property Type Title"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="proName">Added Date</label>
                                    <!-- <input id="proName" type="text" placeholder="Enter Property Name" class="form-input"
                                        required /> -->
                                    <div x-data="form">
                                        <input id="basic" x-model="date1" class="form-input" />
                                    </div>
                                </div>
                              
                                <!-- <div class="form-group">
                                    <label for="displayTo">Display to </label>
                                    <select class="selectize">
                                        <option selected value="Everyone">Everyone</option>
                                        <option value="loggedInUsersOnly">Logged in users only</option>
                                        <option value="SubscriptionUsersOnly">Subscription users only</option>
                                    </select>
                                </div> -->
                            </div>

                        </div>

                    </div>
                    <!-- End Property Information  -->


                    <button type="button" class="btn btn-success m-auto mt-5">Add Property Type</button>
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

<!--Possession Date script -->
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

<!-- script for SEO tag  -->
<script>
    const tagInput = document.getElementById("seoKeywords");
    const tagList = document.getElementById("tagList");

    tagInput.addEventListener("keydown", function (event) {
        if (event.key === "Enter" || event.key === ",") {
            event.preventDefault();
            addTag(tagInput.value.trim());
            tagInput.value = "";
        }
    });

    function addTag(tagName) {
        if (tagName === "") return;

        const tagElement = document.createElement("div");
        tagElement.classList.add("tag");
        tagElement.textContent = tagName;

        tagElement.addEventListener("click", function () {
            tagList.removeChild(tagElement);
        });

        tagList.appendChild(tagElement);
    }

    const initialTags = [];
    initialTags.forEach((tag) => addTag(tag));

</script>

<!-- start sidebar section -->
<?php @include('common-layout/footer.php') ?>
<!-- end sidebar section -->