@extends('layout.app-layout')

@section('content')
    <section class="hero">
        <div class="container">
            <h1>Welcome to TechBlog</h1>
            <p>Discover the latest trends, tutorials, and insights in technology, programming, and digital innovation.</p>
            <a href="articles.html" class="cta-button">Explore Articles</a>
        </div>
    </section>

    <main>
        <div class="container">
            <h2 class="section-title">Featured Posts</h2>
            <div class="featured-posts">
                <article class="post-card">
                    <div class="post-image">🤖</div>
                    <div class="post-content">
                        <span class="post-category">AI & ML</span>
                        <h3 class="post-title">
                            <a href="article-single.html">The Future of Artificial Intelligence in Web Development</a>
                        </h3>
                        <p class="post-excerpt">Explore how AI is revolutionizing the way we build and interact with web applications, from automated code generation to intelligent user experiences.</p>
                        <div class="post-meta">
                            <span>March 15, 2024</span>
                            <a href="article-single.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </article>

                <article class="post-card">
                    <div class="post-image">⚛️</div>
                    <div class="post-content">
                        <span class="post-category">React</span>
                        <h3 class="post-title">
                            <a href="article-single.html">Advanced React Patterns for Scalable Applications</a>
                        </h3>
                        <p class="post-excerpt">Learn advanced React patterns and best practices to build maintainable and scalable applications that can grow with your team.</p>
                        <div class="post-meta">
                            <span>March 12, 2024</span>
                            <a href="article-single.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </article>

                <article class="post-card">
                    <div class="post-image">🔒</div>
                    <div class="post-content">
                        <span class="post-category">Security</span>
                        <h3 class="post-title">
                            <a href="article-single.html">Essential Cybersecurity Practices for Developers</a>
                        </h3>
                        <p class="post-excerpt">A comprehensive guide to implementing security best practices in your development workflow to protect applications and user data.</p>
                        <div class="post-meta">
                            <span>March 10, 2024</span>
                            <a href="article-single.html" class="read-more">Read More</a>
                        </div>
                    </div>
                </article>
            </div>

            <section class="categories-preview">
                <div class="container">
                    <h2 class="section-title">Explore Categories</h2>
                    <div class="categories-grid">
                        <a href="categories.html#web-development" class="category-card">
                            <div class="category-icon">💻</div>
                            <div class="category-name">Web Development</div>
                            <div class="category-count">24 Articles</div>
                        </a>
                        <a href="categories.html#mobile-development" class="category-card">
                            <div class="category-icon">📱</div>
                            <div class="category-name">Mobile Development</div>
                            <div class="category-count">18 Articles</div>
                        </a>
                        <a href="categories.html#data-science" class="category-card">
                            <div class="category-icon">📊</div>
                            <div class="category-name">Data Science</div>
                            <div class="category-count">15 Articles</div>
                        </a>
                        <a href="categories.html#cybersecurity" class="category-card">
                            <div class="category-icon">🔒</div>
                            <div class="category-name">Cybersecurity</div>
                            <div class="category-count">12 Articles</div>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection

