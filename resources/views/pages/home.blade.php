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

/* Hero Section */
.hero {
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 400"><rect fill="%23667eea" width="1200" height="400"/><circle fill="%23764ba2" cx="200" cy="100" r="50" opacity="0.3"/><circle fill="%23667eea" cx="800" cy="300" r="80" opacity="0.2"/><circle fill="%23764ba2" cx="1000" cy="150" r="60" opacity="0.3"/></svg>') center/cover;
    color: white;
    text-align: center;
    padding: 6rem 0;
}

.hero h1 {
    font-size: 3.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
}

.hero p {
    font-size: 1.2rem;
    margin-bottom: 2rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.cta-button {
    display: inline-block;
    background: #ff6b6b;
    color: white;
    padding: 12px 30px;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 600;
    transition: transform 0.3s, box-shadow 0.3s;
}

.cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255,107,107,0.4);
}

/* Main Content */
main {
    padding: 4rem 0;
}

.section-title {
    text-align: center;
    font-size: 2.5rem;
    margin-bottom: 3rem;
    color: #2c3e50;
}

/* Featured Posts */
.featured-posts {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 2rem;
    margin-bottom: 4rem;
}

.post-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.post-image {
    width: 100%;
    height: 200px;
    background: linear-gradient(45deg, #667eea, #764ba2);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 3rem;
}

.post-content {
    padding: 1.5rem;
}

.post-category {
    display: inline-block;
    background: #e74c3c;
    color: white;
    padding: 4px 12px;
    border-radius: 15px;
    font-size: 0.8rem;
    font-weight: 600;
    margin-bottom: 1rem;
}

.post-title {
    font-size: 1.3rem;
    margin-bottom: 0.5rem;
    color: #2c3e50;
}

.post-title a {
    text-decoration: none;
    color: inherit;
}

.post-title a:hover {
    color: #667eea;
}

.post-excerpt {
    color: #666;
    margin-bottom: 1rem;
    line-height: 1.5;
}

.post-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.9rem;
    color: #888;
}

.read-more {
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
}

/* Categories Preview */
.categories-preview {
    background: white;
    padding: 3rem 0;
    margin: 4rem 0;
    border-radius: 15px;
}

.categories-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
}

.category-card {
    text-align: center;
    padding: 2rem 1rem;
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    color: white;
    border-radius: 10px;
    text-decoration: none;
    transition: transform 0.3s;
}

.category-card:hover {
    transform: scale(1.05);
}

.category-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
}

.category-name {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.category-count {
    font-size: 0.9rem;
    opacity: 0.9;
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

    .hero h1 {
        font-size: 2.5rem;
    }

    .hero p {
        font-size: 1rem;
    }

    .featured-posts {
        grid-template-columns: 1fr;
    }

    .categories-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .categories-grid {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection

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

