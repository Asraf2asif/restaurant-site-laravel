<!DOCTYPE html>
<html lang="en">
<head>
    @include("home.partials.head")    
</head>
<body>
    @include("home.partials.preloader")
    @include("home.partials.header", ['navData' => 'navData'])     
    @include("home.partials.banner", ['bannerImg' => 'assets/images/banner-bg.jpg'])
    @include("home.partials.welcome")
    @include("home.partials.food") 
    {{--
    @include("home.partials.reservation")
    @include("home.partials.deshes")
    @include("home.partials.testimonial")
    @include("home.partials.update")
    @include("home.partials.table")
    @include("home.partials.footer")  --}} 

    @include("home.partials.script")    
</body>
</html>
