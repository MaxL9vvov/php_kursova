@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Категорії</h1>
        <section class="featured-posts-section">
            <ul>
                @foreach($categories as $category)
                    <li><a href="{{ route('category.post.index', $category->id) }}">{{ $category->title }}</a></li>
                @endforeach
            </ul>
        </section>

    </div>

</main>

<style>
    .featured-posts-section ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .featured-posts-section ul li {
        margin: 10px 0;
        font-size: 18px;
        font-weight: bold;
        border-bottom: 1px solid #ccc;
        padding-bottom: 5px;
    }

    .featured-posts-section ul li a {
        text-decoration: none;
        color: #333;
        transition: color 0.3s ease;
    }

    .featured-posts-section ul li a:hover {
        color: #ff6600;
        font-size: 19px;
    }
</style>
@endsection

