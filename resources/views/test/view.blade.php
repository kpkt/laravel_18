<html>
<head>
    <title>User Profile</title>
</head>
<body>
<h1>Hello, {{ $name }}</h1>
<h3>Address: {{ $address }}, Age {{ $age }}</h3>

@if($age >= 18 && $age < 35)
    Anda belia
@elseif($age >= 35)
    Anda veteran
@else
    Budak baru nak UP
@endif

@for($i=0; $i<5; $i++)
    Index {{ $i }}<br>
@endfor
</body>
</html>