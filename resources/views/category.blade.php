<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category Page</title>
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
    
    
    <h1>{{$category->name}}</h1>
    
    @foreach ($books as $book)
    <div class="card">
        <img src="{{$book->image}}" style="height:200px">
        <h3>{{$book->title}}</h3>
        <p>by</p>
        <p>{{$book->author}}</p>
        <a href="{{route('getHomeDetailById', ['id' => $book->id] )}}"><button>Detail</button></a>
    </div>
    @endforeach
</body>
</html>