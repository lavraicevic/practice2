@extends('layout.app-layout')

@section('styles')
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-size: 2rem;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s;
        }

        nav a:hover, nav a.active {
            opacity: 0.8;
            text-decoration: underline;
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
            color: white;
            text-align: center;
            padding: 4rem 0;
        }

        .page-header h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .page-header p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Filter Section */
        .filter-section {
            background: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .filter-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .filter-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .filter-tag {
            padding: 0.5rem 1rem;
            background: #f1f3f4;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .filter-tag:hover, .filter-tag.active {
            background: #667eea;
            color: white;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: #f1f3f4;
            border-radius: 25px;
            padding: 0.5rem 1rem;
            min-width: 250px;
        }

        .search-box input {
            border: none;
            background: none;
            outline: none;
            flex: 1;
            padding: 0.5rem;
        }

        .search-box button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0.5rem;
            color: #666;
        }

        /* Main Content */
        main {
            padding: 2rem 0 4rem;
        }

        .articles-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
        }

        .articles-count {
            color: #666;
            font-size: 1.1rem;
        }

        .sort-dropdown {
            padding: 0.5rem 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: white;
            cursor: pointer;
        }

        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .article-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .article-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        }

        .article-image {
            width: 100%;
            height: 200px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
        }

        .article-content {
            padding: 1.5rem;
        }

        .article-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            color: #666;
        }

        .article-category {
            background: #e74c3c;
            color: white;
            padding: 4px 12px;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .article-date {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .article-title {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        .article-title a {
            text-decoration: none;
            color: inherit;
            transition: color 0.3s;
        }

        .article-title a:hover {
            color: #667eea;
        }

        .article-excerpt {
            color: #666;
            margin-bottom: 1rem;
            line-height: 1.5;
        }

        .article-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .read-more {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .article-stats {
            display: flex;
            gap: 1rem;
            font-size: 0.9rem;
            color: #888;
        }

        .stat-item {
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
            margin-top: 3rem;
        }

        .pagination button {
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            background: white;
            cursor: pointer;
            border-radius: 5px;
            transition: all 0.3s;
        }

        .pagination button:hover, .pagination button.active {
            background: #667eea;
            color: white;
            border-color: #667eea;
        }

        .pagination button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Newsletter Section */
        .newsletter-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-align: center;
            padding: 4rem 0;
            margin: 4rem 0;
            border-radius: 15px;
        }

        .newsletter-section h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .newsletter-section p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .newsletter-form {
            display: flex;
            justify-content: center;
            gap: 1rem;
            max-width: 400px;
            margin: 0 auto;
        }

        .newsletter-form input {
            flex: 1;
            padding: 1rem;
            border: none;
            border-radius: 25px;
            outline: none;
        }

        .newsletter-form button {
            padding: 1rem 2rem;
            background: #ff6b6b;
            color: white;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: transform 0.3s;
        }

        .newsletter-form button:hover {
            transform: translateY(-2px);
        }

        /* Footer */
        footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 3rem 0;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #ecf0f1;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section a {
            color: #bdc3c7;
            text-decoration: none;
        }

        .footer-section a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #34495e;
            padding-top: 2rem;
            color: #bdc3c7;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }

            nav ul {
                gap: 1rem;
            }

            .page-header h1 {
                font-size: 2.5rem;
            }

            .filter-controls {
                flex-direction: column;
                align-items: stretch;
            }

            .search-box {
                min-width: auto;
            }

            .articles-header {
                flex-direction: column;
                gap: 1rem;
                align-items: stretch;
            }

            .articles-grid {
                grid-template-columns: 1fr;
            }

            .newsletter-form {
                flex-direction: column;
                max-width: 300px;
            }
        }
    </style>
@endsection
@section('content')
<section class="page-header">
        <div class="container">
            <h1>All Articles</h1>
            <p>Discover our complete collection of technology articles, tutorials, and insights.</p>
        </div>
    </section>

    <section class="filter-section">
        <div class="container">
            <div class="filter-controls">
                <div class="filter-tags">
                    <button class="filter-tag active">All</button>
                    <button class="filter-tag">Web Development</button>
                    <button class="filter-tag">Mobile</button>
                    <button class="filter-tag">Data Science</button>
                    <button class="filter-tag">Security</button>
                    <button class="filter-tag">DevOps</button>
                    <button class="filter-tag">Programming</button>
                </div>
                <div class="search-box">
                    <input type="text" placeholder="Search articles...">
                    <button type="submit">🔍</button>
                </div>
            </div>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="articles-header">
                <div class="articles-count">Showing {{ $articles->count() }} articles</div>
                <select class="sort-dropdown">
                    <option>Sort by: Latest</option>
                    <option>Sort by: Popular</option>
                    <option>Sort by: Oldest</option>
                    <option>Sort by: A-Z</option>
                </select>
            </div>

            <div class="articles-grid">
                @foreach ($articles as $article)
                <article class="article-card">
                    <div class="article-image">🤖</div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-category">{{ $article->category->title }} {{$article->user->name}}</span>
                            <div class="article-date">
                                <span>📅</span>
                                <span>March 15, 2024</span>
                            </div>
                        </div>
                        <h3 class="article-title">
                            <a href="article-single.html">{{ $article->title }}</a>
                        </h3>
                        <p class="article-excerpt">{{ $article->description }}</p>
                        <div class="article-footer">
                            <a href="{{ route('article', ['article' => $article->id]) }}" class="read-more">Read More →</a>
                            <div class="article-stats">
                                <div class="stat-item">
                                    <span>👁️</span>
                                    <span>1.2k</span>
                                </div>
                                <div class="stat-item">
                                    <span>💬</span>
                                    <span>24</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <br><br>
                @endforeach
            </div>

            <div class="pagination">
                <button disabled>← Previous</button>
                <button class="active">1</button>
                <button>2</button>
                <button>3</button>
                <button>4</button>
                <button>5</button>
                <button>Next →</button>
            </div>
        </div>
    </main>

    <section class="newsletter-section">
        <div class="container">
            <h2>Stay Updated</h2>
            <p>Subscribe to our newsletter and never miss the latest tech articles and tutorials.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Enter your email address" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </section>

@endsection