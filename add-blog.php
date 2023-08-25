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
                        <a href="javascript:;" class="text-primary hover:underline">Blogs</a>
                    </li>
                    <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                        <span>Add Blog</span>
                    </li>
                </ul>
                <form action="#" method="post">
                    <!-- Start Blog Information -->
                    <div class="panel ">
                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Blog Information</h5>
                        </div>
                        <div class="mb-5">

                            <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">

                                <div class="form-group">
                                    <label for="PropertyTitle">Blog Title</label>
                                    <input id="PropertyTitle" type="text" placeholder="Enter Property Title"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="proName">Post Date</label>
                                    <div x-data="form">
                                        <input id="basic" x-model="date1" class="form-input" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- single file -->
                                    <div class="custom-file-container" data-upload-id="myFirstImage"></div>

                                    <!-- script -->
                                    <script>
                                        new FileUploadWithPreview.FileUploadWithPreview('myFirstImage', {
                                            images: {
                                                baseImage: 'assets/images/file-preview.png',
                                                backgroundImage: '',
                                            },
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="state">Category</label>
                                    <select class="selectize">
                                        <option selected value="Delhi">Delhi</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                    </select>
                                </div>

                            </div>
   
                           </div>
   
                           </div>
                    <!-- End Blog Information  -->

                    <!-- Start Blog Description -->
                    <div class="panel mt-5">

                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Blog Description</h5>
                        </div>
                        <div class="form-group mb-5">
                            <!-- basic -->
                            <div id="editor">
                              <!-- Text Here.. -->
                            </div>

                            <!-- script -->
                            <script>
                                new Quill('#editor', {
                                      theme: 'snow'
                                });
                                var toolbar = quill.container.previousSibling;
                                toolbar.querySelector('.ql-picker').setAttribute('title', 'Font Size');
                                toolbar.querySelector('button.ql-bold').setAttribute('title', 'Bold');
                                toolbar.querySelector('button.ql-italic').setAttribute('title', 'Italic');
                                toolbar.querySelector('button.ql-link').setAttribute('title', 'Link');
                                toolbar.querySelector('button.ql-underline').setAttribute('title', 'Underline');
                                toolbar.querySelector('button.ql-clean').setAttribute('title', 'Clear Formatting');
                                toolbar.querySelector('[value=ordered]').setAttribute('title', 'Ordered List');
                                toolbar.querySelector('[value=bullet]').setAttribute('title', 'Bullet List');
                            </script>
                        </div>
                    </div>
                    <!-- End Blog Description  -->

                    <!-- Start SEO -->
                    <div class="panel mt-5">
                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">SEO Information</h5>
                        </div>
                        <div class="mb-5">

                            <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">

                                <div class="form-group">
                                    <label for="PropertyTitle">SEO Tittle</label>
                                    <input id="PropertyTitle" type="text" placeholder="Enter Property Title"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="seoKeywords">SEO Keywords</label>
                                    <input id="seoKeywords" type="text" placeholder="Enter SEO Keywords"
                                        class="form-input" required />
                                    <div class="tag-list" id="tagList"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <button type="button" class="btn btn-success m-auto mt-5">Add Blog</button>
                    <!-- End SEO  -->
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

<!-- Editor Script -->
<script>
    new Quill('#editor', {
        theme: 'snow',
    });
    var quill = new Quill('#editor1', {
        theme: 'snow',
    });
    var toolbar = quill.container.previousSibling;
    toolbar.querySelector('.ql-picker').setAttribute('title', 'Font Size');
    toolbar.querySelector('button.ql-bold').setAttribute('title', 'Bold');
    toolbar.querySelector('button.ql-italic').setAttribute('title', 'Italic');
    toolbar.querySelector('button.ql-link').setAttribute('title', 'Link');
    toolbar.querySelector('button.ql-underline').setAttribute('title', 'Underline');
    toolbar.querySelector('button.ql-clean').setAttribute('title', 'Clear Formatting');
    toolbar.querySelector('[value=ordered]').setAttribute('title', 'Ordered List');
    toolbar.querySelector('[value=bullet]').setAttribute('title', 'Bullet List');

</script>