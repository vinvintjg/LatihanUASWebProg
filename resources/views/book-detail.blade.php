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
    
    <h1>BOOK DETAIL</h1>
    <div class="card">
        <img src="{{$book->image}}" style="height:500px">
        <p>Title: {{$book->title}}</p>
        <p>Author: {{$book->author}}</p>
        <p>Publisher: {{$book->publisher->name}}</p>
        <p>Year: {{$book->year}}</p>
        <p>Synopsis:</p>
        {{$book->synopsis}}

        @foreach ($book->categories as $category)
         {{$category->name}}
        @endforeach
    </div>
</body>
</html>