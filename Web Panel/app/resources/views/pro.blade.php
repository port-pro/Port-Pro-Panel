<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Port-Pro-Panel - {{__('license-text-1')}}</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="/assets/fonts/inter/inter.css" id="main-font-link" />

    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="/assets/fonts/tabler-icons.min.css" />
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="/assets/fonts/feather.css" />
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="/assets/fonts/fontawesome.css" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="/assets/fonts/material.css" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="/assets/css/style-fa-ir.css" id="main-style-link" />
    <link rel="stylesheet" href="/assets/css/style-preset.css" />
    <link rel="stylesheet" href="/assets/css/persian-datepicker.css"/>
</head>
<body>

<div class="auth-main">
    <div class="auth-wrapper v3" >
        <div class="auth-form">
            <div class="card my-5">
                <div class="card-body" style="padding:15px">
                    <div class="card overflow-hidden">
                        <div class="card-body bg-light-primary text-center">
                            <div class="avtar avtar-s bg-primary">
                                <i class="ti ti-lock f-20 text-white"></i>
                            </div>
                            <h5 class="mb-1 mt-2">{{__('license-text-1')}}</h5>
                            <p class="text-muted mt-2">{{__('license-text-2')}}</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
<!-- Required Js -->
<script src="/assets/js/plugins/popper.min.js"></script>
<script src="/assets/js/plugins/simplebar.min.js"></script>
<script src="/assets/js/plugins/bootstrap.min.js"></script>
<script src="/assets/js/fonts/custom-font.js"></script>
<script src="/assets/js/config.js"></script>
<script src="/assets/js/pcoded.js"></script>
<script src="/assets/js/plugins/feather.min.js"></script>
</body>
<!-- [Body] end -->

</html>
