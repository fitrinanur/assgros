@extends('layouts.main') 
@section('content')
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ url('home') }}">Home</a>
    </li>
    <li class="breadcrumb-item active">
        <a href="{{ url('contact') }}">Contact</a>
    </li>
</ol>
<div class="container-fluid">
    <div class="card-box">
        <h1 class="text-success">Contact</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quia labore, provident reiciendis voluptatum
            libero a quisquam voluptas sunt perspiciatis, fuga totam? Perspiciatis voluptates nesciunt, commodi, necessitatibus
            mollitia voluptas assumenda cum nostrum ipsa autem porro ipsam. Ipsum ex dolorem eius, voluptates vel et aliquam
            animi tempora, ducimus architecto recusandae sed odio quasi ad repellendus vitae hic doloribus odit quisquam
            rerum impedit numquam laborum. Sapiente in illo, assumenda voluptas numquam dolorem eius saepe officia, atque
            maiores facere exercitationem velit ratione incidunt debitis? A placeat tempore temporibus saepe reiciendis reprehenderit
            sint vitae non architecto delectus odio, impedit suscipit, ipsam provident. Animi, aperiam.</p>
    </div>

</div>
@endsection