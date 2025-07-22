@extends('layout.app-layout')


@section('content')
   <section class="page-header">
        <div class="container">
            <h1>Categories</h1>
            <p>Explore our diverse range of technology topics and find exactly what you're looking for.</p>
        </div>
    </section>

    <main>
        <div class="container">
            <div class="categories-grid">
                <section class="category-section" id="web-development">
                    <div class="category-header">
                        <div class="category-icon">💻</div>
                        <div class="category-info">
                            <h2>Web Development</h2>
                            <div class="category-count">24 Articles</div>
                        </div>
                    </div>
                    <p class="category-description">
                        Dive into the world of web development with tutorials on HTML, CSS, JavaScript, React, Vue, Angular, and modern web frameworks.
                    </p>
                    <ul class="recent-posts">
                        <li>
                            <a href="article-single.html" class="post-link">Building Responsive Layouts with CSS Grid</a>
                            <span class="post-date">Mar 15, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">Advanced React Hooks Patterns</a>
                            <span class="post-date">Mar 12, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">Next.js 14: What's New and Improved</a>
                            <span class="post-date">Mar 10, 2024</span>
                        </li>
                    </ul>
                    <a href="articles.html?category=web-development" class="view-all-btn">View All Articles</a>
                </section>

                <section class="category-section" id="mobile-development">
                    <div class="category-header">
                        <div class="category-icon">📱</div>
                        <div class="category-info">
                            <h2>Mobile Development</h2>
                            <div class="category-count">18 Articles</div>
                        </div>
                    </div>
                    <p class="category-description">
                        Learn mobile app development for iOS and Android using React Native, Flutter, Swift, Kotlin, and cross-platform solutions.
                    </p>
                    <ul class="recent-posts">
                        <li>
                            <a href="article-single.html" class="post-link">Flutter vs React Native: 2024 Comparison</a>
                            <span class="post-date">Mar 14, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">iOS App Store Optimization Tips</a>
                            <span class="post-date">Mar 11, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">Building Offline-First Mobile Apps</a>
                            <span class="post-date">Mar 8, 2024</span>
                        </li>
                    </ul>
                    <a href="articles.html?category=mobile-development" class="view-all-btn">View All Articles</a>
                </section>

                <section class="category-section" id="data-science">
                    <div class="category-header">
                        <div class="category-icon">📊</div>
                        <div class="category-info">
                            <h2>Data Science</h2>
                            <div class="category-count">15 Articles</div>
                        </div>
                    </div>
                    <p class="category-description">
                        Explore data science, machine learning, AI, Python, R, and statistical analysis with practical examples and case studies.
                    </p>
                    <ul class="recent-posts">
                        <li>
                            <a href="article-single.html" class="post-link">Introduction to Machine Learning with Python</a>
                            <span class="post-date">Mar 13, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">Data Visualization Best Practices</a>
                            <span class="post-date">Mar 9, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">Building Your First Neural Network</a>
                            <span class="post-date">Mar 6, 2024</span>
                        </li>
                    </ul>
                    <a href="articles.html?category=data-science" class="view-all-btn">View All Articles</a>
                </section>

                <section class="category-section" id="cybersecurity">
                    <div class="category-header">
                        <div class="category-icon">🔒</div>
                        <div class="category-info">
                            <h2>Cybersecurity</h2>
                            <div class="category-count">12 Articles</div>
                        </div>
                    </div>
                    <p class="category-description">
                        Stay secure with cybersecurity best practices, ethical hacking, penetration testing, and security awareness guides.
                    </p>
                    <ul class="recent-posts">
                        <li>
                            <a href="article-single.html" class="post-link">Essential Security Practices for Developers</a>
                            <span class="post-date">Mar 10, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">Understanding OAuth 2.0 and JWT</a>
                            <span class="post-date">Mar 7, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">Web Application Security Testing</a>
                            <span class="post-date">Mar 4, 2024</span>
                        </li>
                    </ul>
                    <a href="articles.html?category=cybersecurity" class="view-all-btn">View All Articles</a>
                </section>

                <section class="category-section" id="devops">
                    <div class="category-header">
                        <div class="category-icon">⚙️</div>
                        <div class="category-info">
                            <h2>DevOps & Cloud</h2>
                            <div class="category-count">16 Articles</div>
                        </div>
                    </div>
                    <p class="category-description">
                        Master DevOps practices, cloud computing, containerization, CI/CD pipelines, and infrastructure as code.
                    </p>
                    <ul class="recent-posts">
                        <li>
                            <a href="article-single.html" class="post-link">Docker Best Practices for Production</a>
                            <span class="post-date">Mar 12, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">AWS vs Azure vs Google Cloud Comparison</a>
                            <span class="post-date">Mar 8, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">Setting Up CI/CD with GitHub Actions</a>
                            <span class="post-date">Mar 5, 2024</span>
                        </li>
                    </ul>
                    <a href="articles.html?category=devops" class="view-all-btn">View All Articles</a>
                </section>

                <section class="category-section" id="programming">
                    <div class="category-header">
                        <div class="category-icon">🚀</div>
                        <div class="category-info">
                            <h2>Programming</h2>
                            <div class="category-count">21 Articles</div>
                        </div>
                    </div>
                    <p class="category-description">
                        Learn programming fundamentals, algorithms, data structures, and best practices across multiple languages.
                    </p>
                    <ul class="recent-posts">
                        <li>
                            <a href="article-single.html" class="post-link">Clean Code Principles Every Developer Should Know</a>
                            <span class="post-date">Mar 11, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">Understanding Big O Notation</a>
                            <span class="post-date">Mar 7, 2024</span>
                        </li>
                        <li>
                            <a href="article-single.html" class="post-link">Design Patterns in Modern JavaScript</a>
                            <span class="post-date">Mar 3, 2024</span>
                        </li>
                    </ul>
                    <a href="articles.html?category=programming" class="view-all-btn">View All Articles</a>
                </section>
            </div>

            <section class="stats-section">
                <div class="container">
                    <h2 style="margin-bottom: 2rem; color: #2c3e50;">Blog Statistics</h2>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">106</div>
                            <div class="stat-label">Total Articles</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">6</div>
                            <div class="stat-label">Categories</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">15K+</div>
                            <div class="stat-label">Monthly Readers</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">2.5K</div>
                            <div class="stat-label">Newsletter Subscribers</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection