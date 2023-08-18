<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hecta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="assets/css/style.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="assets/css/animate.css" />
    <link defer rel="stylesheet" type="text/css" media="screen" href="assets/css/custom.css" />
    <!-- Date and Range -->
    <link rel="stylesheet" href="assets/css/flatpickr.min.css" />
    <link rel="stylesheet" href="assets/css/nouislider.min.css" />
    <!-- select -->
    <link rel="stylesheet" type="text/css" href="assets/css/nice-select2.css" />
    <link rel="stylesheet" href="assets/css/easymde.min.css" />

    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script defer src="assets/js/popper.min.js"></script>
    <script defer src="assets/js/tippy-bundle.umd.min.js"></script>
    <script defer src="assets/js/sweetalert.min.js"></script>

    <style scoped>
        /* range picker */
        input[type='range'] {
            -webkit-appearance: none;
        }

        input[type='range']::-webkit-slider-runnable-track {
            width: 100%;
            height: 8px;
            background: #dee2e6;
            border: none;
            border-radius: 3px;
        }

        input[type='range']::-webkit-slider-thumb {
            -webkit-appearance: none;
            border: none;
            height: 16px;
            width: 16px;
            border-radius: 50%;
            background: #4361ee;
            margin-top: -4px;
        }

        .dark input[type='range']::-webkit-slider-runnable-track {
            background: #1b2e4b;
        }

        .dark input[type='range'] {
            background-color: transparent;
        }

        input[type='range']:focus {
            outline: none;
        }

        input[type='range']:active::-webkit-slider-thumb {
            background: #4361eec2;
            cursor: pointer;
        }
    </style>
</head>

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
    :class="[ $store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ?  'dark' : '', $store.app.menu, $store.app.layout,$store.app.rtlClass]">