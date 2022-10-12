<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('frontend.layouts.head')
    {{--    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">--}}
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
</head>
{{--<body class="js" oncontextmenu="return false">--}}
<body class="js">

{{----}}
<div id="google_translate_element" style="float: right"></div>
<script type="text/javascript">// <![CDATA[
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
    // ]]></script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>
{{----}}

<!-- Preloader -->
{{--<div class="preloader">--}}
{{--    <div class="preloader-inner text-center text-capitalize">--}}
{{--        			<div class="preloader-icon">--}}
{{--     			<div class="">--}}
{{--        <h1 style="font-size:50px;color: red">you can talk in these languages</h1>--}}
{{--       <h1> <li>DEUTSCH</li></h1>--}}
{{--       <h1> <li>ENGLISH</li></h1>--}}
{{--       <h1> <li>PERSIAN</li></h1>--}}

{{--        <span></span>--}}
{{--    </div>--}}
{{--</div>--}}
{{--	</div>--}}
<!-- End Preloader -->
{{--	--}}
{{--<div class="container-fluid">--}}
{{--    <div class="row" style="float: right">--}}
{{--        <div class="col-md-2 col-md-offset-6 text-right">--}}
{{--          </div>--}}
{{--           <div class="col-md-4 ">--}}
{{--             <select class="form-control changeLang">--}}
{{--                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>--}}
{{--                <option value="de" class="" {{ session()->get('locale') == 'de' ? 'selected' : '' }}>Deutsch</option>--}}
{{--            </select>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--        <div class="changeLang">--}}
{{--        <button type="button" class="btn btn-primary btn-sm p-2 changeLang" value="en" style="border-radius: 22px;top: 50%;float: right;position: fixed"--}}
{{--            {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</button>--}}
{{--        <button type="button" class="btn btn-primary btn-sm p-2 changeLang" value="de" style="border-radius: 22px;top: 55%;float: right;position: fixed"--}}
{{--            {{ session()->get('locale') == 'de' ? 'selected' : '' }}>Deutsch</button>--}}
{{--        </div>--}}

{{----}}

@include('frontend.layouts.notification')
<!-- Header -->
@include('frontend.layouts.header')
<!--/ End Header -->
@yield('main-content')

@include('frontend.layouts.footer')


<script type="text/javascript">

    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function () {
        window.location.href = url + "?lang=" + $(this).val();
    });



//    inspect false
//     document.onkeydown = function(e) {
//         if(event.keyCode == 123) {
//             return false;
//         }
//         if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
//             return false;
//         }
//         if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
//             return false;
//         }
//         if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
//             return false;
//         }
//     }
</script>
</body>
</html>
