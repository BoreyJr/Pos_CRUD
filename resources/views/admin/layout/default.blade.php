<!DOCTYPE html>
<html lang="en">
@include("admin.layout.header")

<body class="nav-md">
<!-- /sidebar menu -->
@include("admin.layout.sidebar")
<!-- /menu footer buttons -->

<!-- top navigation -->
@include("admin.layout.head")
<!-- /top navigation -->


<!-- page content -->
<div class="right_col" role="main">
    @yield("content")
</div>
<!-- /page content -->

<!-- footer content -->
<!-- /footer content -->

<!-- jQuery -->
@include("admin.layout.footer")
@yield("script")
</body>
</html>
