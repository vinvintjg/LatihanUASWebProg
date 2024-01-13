<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page Detail</title>
</head>
<body>
    <nav>
        <a href="/home">Home</a>
        <select onchange="window.location.href = this.value;">
            <option value="-1">Category</option>
            <option value="/category/1">Category 1</option>
            <option value="/category/2">Category 2</option>
            <option value="/category/3">Category 3</option>
        </select>
        <a href="/publisher">Publisher</a>
        <a href="/contact">Contact</a>
    </nav>
    
    <h1>Publisher List</h1>
    @foreach ($publishers as $publisher)
    <div class="card">
        <p>Name: {{$publisher->name}}</p>
        <p>Address: {{$publisher->address}}</p>
        <p>Phone: {{$publisher->phone}}</p>
        <p>Email: {{$publisher->email}}</p>
        <a href="{{route('getBookByPublisher', ['id' => $publisher->id] )}}"><button>Detail</button></a>
    </div><br>
    @endforeach
    
</body>
</html>