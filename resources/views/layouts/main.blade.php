<!DOCTYPE html>
<html>
<head>
@include('layouts.head')
</head>
<body>
       
    @include('layouts.header')    
        
       <div>
            @yield('content')
        </div>



@include('layouts.footer')

</body>
</html>