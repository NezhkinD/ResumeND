<!DOCTYPE html>
<html lang="en" class="no-js">
@include('includes.head')

<body class="page">

<!-- <div class="lm-animated-bg"></div> -->

<!-- Loading animation -->
@include('includes.preloader')
<!-- /Loading animation -->

<!-- Scroll To Top Button -->
@include('includes.scroll')
<!-- /Scroll To Top Button -->

<div class="page-scroll">
    <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

        <!-- Header -->
    @include('layouts.header')
    <!-- /Header -->

        <div id="main" class="site-main">
            <div id="main-content" class="single-page-content">
                <div id="primary" class="content-area">
                    <div id="content" class="page-content site-content single-post" role="main">

                        @include('layouts.page_top_part')

                        @include('layouts.what_i_do')

                        @include('layouts.edu_and_exp')

                        @include('layouts.contacts')

                    </div>
                </div>
            </div>
        </div>

        @include('layouts.footer')

    </div>
</div>

@include('includes.js')
</body>
</html>
