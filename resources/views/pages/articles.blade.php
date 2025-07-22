@extends('layout.app-layout')

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
                <div class="articles-count">Showing 106 articles</div>
                <select class="sort-dropdown">
                    <option>Sort by: Latest</option>
                    <option>Sort by: Popular</option>
                    <option>Sort by: Oldest</option>
                    <option>Sort by: A-Z</option>
                </select>
            </div>

            <div class="articles-grid">
                <article class="article-card">
                    <div class="article-image">🤖</div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-category">AI & ML</span>
                            <div class="article-date">
                                <span>📅</span>
                                <span>March 15, 2024</span>
                            </div>
                        </div>
                        <h3 class="article-title">
                            <a href="article-single.html">The Future of Artificial Intelligence in Web Development</a>
                        </h3>
                        <p class="article-excerpt">Explore how AI is revolutionizing the way we build and interact with web applications, from automated code generation to intelligent user experiences.</p>
                        <div class="article-footer">
                            <a href="article-single.html" class="read-more">Read More →</a>
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

                <article class="article-card">
                    <div class="article-image">⚛️</div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-category">React</span>
                            <div class="article-date">
                                <span>📅</span>
                                <span>March 12, 2024</span>
                            </div>
                        </div>
                        <h3 class="article-title">
                            <a href="article-single.html">Advanced React Patterns for Scalable Applications</a>
                        </h3>
                        <p class="article-excerpt">Learn advanced React patterns and best practices to build maintainable and scalable applications that can grow with your team.</p>
                        <div class="article-footer">
                            <a href="article-single.html" class="read-more">Read More →</a>
                            <div class="article-stats">
                                <div class="stat-item">
                                    <span>👁️</span>
                                    <span>890</span>
                                </div>
                                <div class="stat-item">
                                    <span>💬</span>
                                    <span>18</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="article-card">
                    <div class="article-image">🔒</div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-category">Security</span>
                            <div class="article-date">
                                <span>📅</span>
                                <span>March 10, 2024</span>
                            </div>
                        </div>
                        <h3 class="article-title">
                            <a href="article-single.html">Essential Cybersecurity Practices for Developers</a>
                        </h3>
                        <p class="article-excerpt">A comprehensive guide to implementing security best practices in your development workflow to protect applications and user data.</p>
                        <div class="article-footer">
                            <a href="article-single.html" class="read-more">Read More →</a>
                            <div class="article-stats">
                                <div class="stat-item">
                                    <span>👁️</span>
                                    <span>756</span>
                                </div>
                                <div class="stat-item">
                                    <span>💬</span>
                                    <span>12</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="article-card">
                    <div class="article-image">📱</div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-category">Mobile</span>
                            <div class="article-date">
                                <span>📅</span>
                                <span>March 8, 2024</span>
                            </div>
                        </div>
                        <h3 class="article-title">
                            <a href="article-single.html">Flutter vs React Native: Complete 2024 Comparison</a>
                        </h3>
                        <p class="article-excerpt">An in-depth comparison of Flutter and React Native, covering performance, development experience, and ecosystem to help you choose the right framework.</p>
                        <div class="article-footer">
                            <a href="article-single.html" class="read-more">Read More →</a>
                            <div class="article-stats">
                                <div class="stat-item">
                                    <span>👁️</span>
                                    <span>1.5k</span>
                                </div>
                                <div class="stat-item">
                                    <span>💬</span>
                                    <span>32</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="article-card">
                    <div class="article-image">📊</div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-category">Data Science</span>
                            <div class="article-date">
                                <span>📅</span>
                                <span>March 6, 2024</span>
                            </div>
                        </div>
                        <h3 class="article-title">
                            <a href="article-single.html">Building Your First Neural Network with TensorFlow</a>
                        </h3>
                        <p class="article-excerpt">Step-by-step guide to creating your first neural network using TensorFlow, including data preprocessing, model training, and evaluation.</p>
                        <div class="article-footer">
                            <a href="article-single.html" class="read-more">Read More →</a>
                            <div class="article-stats">
                                <div class="stat-item">
                                    <span>👁️</span>
                                    <span>642</span>
                                </div>
                                <div class="stat-item">
                                    <span>💬</span>
                                    <span>15</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="article-card">
                    <div class="article-image">⚙️</div>
                    <div class="article-content">
                        <div class="article-meta">
                            <span class="article-category">DevOps</span>
                            <div class="article-date">
                                <span>📅</span>
                                <span>March 4, 2024</span>
                            </div>
                        </div>
                        <h3 class="article-title">
                            <a href="article-single.html">Docker Best Practices for Production Environments</a>
                        </h3>
                        <p class="article-excerpt">Learn essential Docker best practices for production deployments, including security, optimization, and monitoring strategies.</p>
                        <div class="article-footer">
                            <a href="article-single.html" class="read-more">Read More →</a>
                            <div class="article-stats">
                                <div class="stat-item">
                                    <span>👁️</span>
                                    <span>923</span>
                                </div>
                                <div class="stat-item">
                                    <span>💬</span>
                                    <span>21</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
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