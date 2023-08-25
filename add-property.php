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
                        <span>Add Property</span>
                    </li>
                </ul>
                <form action="#" method="post">
                    <!-- Start Property Information -->
                    <div class="panel ">
                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Property Information</h5>
                        </div>
                        <div class="mb-5">

                            <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">

                                <div class="form-group">
                                    <label for="PropertyTitle">Property Title</label>
                                    <input id="PropertyTitle" type="text" placeholder="Enter Property Title"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="proName">Possession Date</label>
                                    <!-- <input id="proName" type="text" placeholder="Enter Property Name" class="form-input"
                                        required /> -->
                                    <div x-data="form">
                                        <input id="basic" x-model="date1" class="form-input" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="proPrice">Regular Price (₹)</label>
                                    <input id="proPrice" type="number" placeholder="Enter Property Price"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <Sale for="salePrice">Sale Price (₹)</Sale price (₹)abel>
                                    <input id="salePrice" type="number" placeholder="Enter Sale Price"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="PropertyExcerpt ">Property Excerpt </label>
                                    <!-- <input id="PropertyExcerpt " type="text" placeholder="Enter Property Excerpt "
                                        class="form-input" required /> -->
                                    <textarea rows="1"
                                        class="form-textarea"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="displayTo">Display to </label>
                                    <select class="selectize">
                                        <option selected value="Everyone">Everyone</option>
                                        <option value="loggedInUsersOnly">Logged in users only</option>
                                        <option value="SubscriptionUsersOnly">Subscription users only</option>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- End Property Information  -->

                    <!-- Start Auction Information  -->
                    <div class="panel mt-5">

                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Auction Information</h5>
                        </div>
                        <div class="mb-5">
                            <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">
                                <div class="form-group">
                                    <label for="displayTo">Possession Status</label>
                                    <select class="selectize">
                                        <option selected value="PhysicalPossession">Physical Possession</option>
                                        <option value="SymbolicPossession">Symbolic Possession</option>
                                        <option value="ConstructivePossession">Constructive Possession</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="proName">Possession Date</label>
                                    <input id="proName" type="date" placeholder="Enter Possession Date"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="proPrice">Auction Start Date Time</label>
                                    <input id="proPrice" type="date" placeholder="Enter Auction Start Date Time"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="proPrice">Auction Time Extension</label>
                                    <input id="proPrice" type="text" placeholder="Enter Auction Time Extension"
                                        class="form-input" required />
                                </div>

                                <div class="form-group">
                                    <label for="proPrice">Auction End Date Time</label>
                                    <input id="proPrice" type="date" placeholder="Enter Auction End Date Time"
                                        class="form-input" required />
                                </div>

                                <div class="form-group">
                                    <label for="proPrice">Reserve Price</label>
                                    <input id="proPrice" type="number" placeholder="Enter Reserve Price"
                                        class="form-input" required />
                                </div>
                                <!-- <div class="form-group">
                                    <label class="inline-flex mr-2">
                                        <label for="auctionType" class="mr-3">Auction Type </label>
                                        <input type="radio" name="auctionType" class="form-radio text-dark peer" />
                                        <span class="peer-checked:text-dark mr-3">Active</span>

                                        <input type="radio" name="auctionType" class="form-radio text-dark peer" />
                                        <span class="peer-checked:text-dark">Inactive</span>
                                    </label>
                                </div> -->
                                <div class="form-group">
                                    <label class="inline-flex ">
                                        <label for="EMDPaymentProcess">Auction Type</label>
                                        <input type="checkbox" class="form-checkbox text-dark rounded-full ml-3" />
                                        <span>Open</span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="inline-flex">
                                        <input type="checkbox" class="form-checkbox text-dark rounded-full ml-3" />
                                        <label for="EMDPaymentProcess">Is Auctionable</label>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="proPrice">Application End Date</label>
                                    <input id="proPrice" type="date" placeholder="Application End Date"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="proPrice">Estimated Value </label>
                                    <input id="proPrice" type="number" placeholder="Enter Estimated Value"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="proPrice">EMD </label>
                                    <input id="proPrice" type="number" placeholder="Enter EMD " class="form-input"
                                        required />
                                </div>
                                <div class="form-group">
                                    <label for="proPrice">Minimum Increment </label>
                                    <input id="proPrice" type="number" placeholder="Enter Minimum Increment"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="proPrice">Discount Percentage </label>
                                    <input id="proPrice" type="number" placeholder="Enter Discount Percentage"
                                        class="form-input" required />
                                </div>

                                <div class="form-group">
                                    <label for="borrowerName">Borrower name </label>
                                    <input id="borrowerName" type="text" placeholder="Enter Borrower name"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="outstandingDues">Outstanding Dues</label>
                                    <input id="outstandingDues" type="number" placeholder="Enter Outstanding Dues"
                                        class="form-input" required />
                                </div>

                                <div class="form-group">
                                    <label for="EMDPaymentProcess">EMD Payment Process</label>
                                    <input id="EMDPaymentProcess" type="text" placeholder="Enter EMD Payment Process"
                                        class="form-input" required />
                                </div>
                                <div class="form-group">
                                    <label for="inspectionDate">Inspection Date</label>
                                    <input id="inspectionDate" type="date" placeholder="Enter Inspection Date"
                                        class="form-input" required />
                                </div>

                                <div class="form-group">
                                    <label for="inspectionEndTime">Inspection End Time</label>
                                    <input id="inspectionEndTime" type="date" placeholder="Enter Inspection End Time"
                                        class="form-input" required />
                                </div>

                                <div class="form-group">
                                    <label class="inline-flex mr-2">
                                        <label for="TrendingProperty" class="mr-3">Trending Property </label>
                                        <input type="radio" name="TrendingProperty" class="form-radio text-dark peer" />
                                        <span class="peer-checked:text-dark mr-3">False</span>

                                        <input type="radio" name="TrendingProperty" class="form-radio text-dark peer" />
                                        <span class="peer-checked:text-dark">True</span>
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Auction Information  -->

                    <!-- Start Documents  -->
                    <div class="panel  mt-5">
                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Documents</h5>
                        </div>
                        <div class="mb-5">
                            <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2">
                                <div class="form-group">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="large_size">Notice</label>
                                    <input
                                        class="block w-full text-lg text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="large_size" type="file">
                                </div>
                                <div class="form-group">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="large_size">Notice (Regional Language) </label>
                                    <input
                                        class="block w-full text-lg text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="large_size" type="file">
                                </div>

                                <div class="form-group">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="large_size">Encumbrance Certificate </label>
                                    <input
                                        class="block w-full text-lg text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="large_size" type="file">
                                </div>

                                <div class="form-group">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                        for="large_size">CERSAI Report</label>
                                    <input
                                        class="block w-full text-lg text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        id="large_size" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Documents  -->

                    <!-- Start Geography  -->
                    <div class="panel  mt-5">
                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Geography</h5>
                        </div>
                        <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2 mb-5">
                            <div class="form-group">
                                <label for="Address">Address</label>
                                <input id="Address" type="text" placeholder="Enter Address" class="form-input"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="Location">Location</label>
                                <input id="Location" type="text" placeholder="Enter Location" class="form-input"
                                    required />
                            </div>

                            <div class="form-group">
                                <label for="City">City</label>
                                <input id="City" type="text" placeholder="Enter City" class="form-input" required />
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <select class="selectize">
                                    <option selected value="Delhi">Delhi</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Pincode">Pincode</label>
                                <input id="Pincode" type="number" placeholder="Enter Pincode" class="form-input"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="Latitude">Latitude</label>
                                <input id="Pincode" type="number" placeholder="Enter Latitude" class="form-input"
                                    required />
                            </div>

                            <div class="form-group">
                                <label for="Longitude">Longitude</label>
                                <input id="Longitude" type="number" placeholder="Enter Longitude" class="form-input"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="Street">Street</label>
                                <input id="Street" type="text" placeholder="Enter Street" class="form-input" required />
                            </div>

                            <div class="form-group">
                                <label class="inline-flex">
                                    <input type="checkbox" id="approximateLocation"
                                        class="form-checkbox text-dark rounded-full ml-3" />
                                    <label for="approximateLocation">Is it an approximate location</label>
                                </label>
                            </div>

                            <div class="form-group">
                                <label for="Nearby Locations">Nearby Locations</label>
                                <input id="Nearby Locations" type="text" placeholder="Enter Nearby Locations"
                                    class="form-input" required />
                            </div>

                        </div>
                    </div>
                    <!-- End Geography  -->

                    <!-- Start Institution Information -->
                    <div class="panel mt-5">
                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Institution Information</h5>
                        </div>
                        <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2 mb-5">
                            <div class="form-group">
                                <label for="BankName">Bank Name</label>
                                <select class="selectize">
                                    <option selected value="Delhi">SBI</option>
                                    <option value="Maharashtra">KOTAK BANK</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="InstitutionBranch">Institution Branch</label>
                                <input id="InstitutionBranch" type="text" placeholder="Enter Institution Branch"
                                    class="form-input" required />
                            </div>

                            <div class="form-group">
                                <label for="InstitutionPointOfContactName">Institution Point of Contact Name</label>
                                <input id="InstitutionPointOfContactName" type="text"
                                    placeholder="Enter Institution Point of Contact Name" class="form-input" required />
                            </div>
                            <div class="form-group">
                                <label for="InstitutionPointOfContactNumber">Institution Point of Contact Name</label>
                                <input id="InstitutionPointOfContactNumber" type="number"
                                    placeholder="Enter Institution Point of Contact Number" class="form-input"
                                    required />
                            </div>

                            <div class="form-group">
                                <label for="SROOffice">SRO Office</label>
                                <input id="SROOffice" type="text" placeholder="Enter SRO Office" class="form-input"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="StampDuty">Stamp Duty</label>
                                <input id="StampDuty" type="text" placeholder="Enter Stamp Duty" class="form-input"
                                    required />
                            </div>


                            <div class="form-group">
                                <label for="InstitutionType">Institution Type</label>
                                <select class="selectize">
                                    <option selected value="PublicSector">Public Sector</option>
                                    <option value="PrivateSector">Private Sector</option>
                                    <option value="NBFC">NBFC</option>
                                    <option value="HousingFinance">Housing Finance</option>
                                    <option value="StateFinancialCorporation">State Financial Corporation</option>
                                    <option value="Co-Operative">Co-Operative</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- End Institution Information -->

                    <!-- Start Property Details -->
                    <div class="panel mt-5">
                        <div class="mb-2  flex items-center justify-between">
                            <h5 class="text-lg font-semibold dark:text-white-light">Institution Information</h5>
                        </div>
                        <div class="grid grid-cols-1 gap-6 pt-5 lg:grid-cols-2 mb-5">
                            <div class="form-group">
                                <label for="state">Is Loan Available</label>
                                <select class="selectize">
                                    <option selected value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Facing">Facing</label>
                                <input id="Facing" type="text" placeholder="Enter Facing" class="form-input" required />
                            </div>

                            <div class="form-group">
                                <label for="BuiltUpArea">Built Up Area</label>
                                <input id="BuiltUpArea" type="text" placeholder="Enter Built Up Area" class="form-input"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="TotalArea">Total Area</label>
                                <input id="TotalArea" type="text" placeholder="Enter Total Area" class="form-input"
                                    required />
                            </div>

                            <div class="form-group">
                                <label for="PerUnitRate">Per Unit Rate</label>
                                <input id="PerUnitRate" type="text" placeholder="Enter Per Unit Rate" class="form-input"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="NorthBoundary">North Boundary</label>
                                <input id="NorthBoundary" type="text" placeholder="Enter North Boundary"
                                    class="form-input" required />
                            </div>

                            <div class="form-group">
                                <label for="SouthBoundary">South Boundary</label>
                                <input id="SouthBoundary" type="text" placeholder="Enter South Boundary"
                                    class="form-input" required />
                            </div>
                            <div class="form-group">
                                <label for="EastBoundary">East Boundary</label>
                                <input id="EastBoundary" type="text" placeholder="Enter East Boundary"
                                    class="form-input" required />
                            </div>

                            <div class="form-group">
                                <label for="WestBoundary">West Boundary</label>
                                <input id="WestBoundary" type="text" placeholder="Enter West Boundary "
                                    class="form-input" required />
                            </div>
                            <div class="form-group">
                                <label for="BoundariesText">Boundaries Text</label>
                                <input id="BoundariesText" type="text" placeholder="Enter Boundaries Text"
                                    class="form-input" required />
                            </div>

                            <div class="form-group">
                                <label for="BoundariesText">Boundaries Text</label>
                                <input id="BoundariesText" type="text" placeholder="Enter Boundaries Text"
                                    class="form-input" required />
                            </div>
                            <div class="form-group">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="large_size">Shape Document</label>
                                <input
                                    class="block w-full text-lg text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="large_size" type="file">
                            </div>
                            <div class="form-group">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="large_size">Panoramic Image</label>
                                <input
                                    class="block w-full text-lg text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="large_size" type="file">
                            </div>
                            <div class="form-group">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    for="large_size">image</label>
                                <input
                                    class="block w-full text-lg text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    id="large_size" type="file">
                            </div>

                        </div>
                    </div>
                    <!-- End Property Details -->

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
                    <button type="button" class="btn btn-success m-auto mt-5">Add Property</button>
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