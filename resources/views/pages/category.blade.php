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
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
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

        /* Main Content */
        main {
            padding: 4rem 0;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .category-section {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .category-section:hover {
            transform: translateY(-5px);
        }

        .category-header {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            border-bottom: 2px solid #f1f3f4;
        }

        .category-icon {
            font-size: 2.5rem;
            margin-right: 1rem;
            padding: 1rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .category-info h2 {
            color: #2c3e50;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .category-count {
            color: #666;
            font-size: 0.9rem;
        }

        .category-description {
            color: #555;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .recent-posts {
            list-style: none;
        }

        .recent-posts li {
            padding: 0.75rem 0;
            border-bottom: 1px solid #eee;
        }

        .recent-posts li:last-child {
            border-bottom: none;
        }

        .post-link {
            text-decoration: none;
            color: #2c3e50;
            font-weight: 500;
            transition: color 0.3s;
        }

        .post-link:hover {
            color: #667eea;
        }

        .post-date {
            color: #888;
            font-size: 0.8rem;
            margin-left: 0.5rem;
        }

        .view-all-btn {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 25px;
            font-weight: 600;
            margin-top: 1rem;
            transition: transform 0.3s;
        }

        .view-all-btn:hover {
            transform: translateY(-2px);
        }

        /* Stats Section */
        .stats-section {
            background: white;
            padding: 3rem 0;
            margin: 3rem 0;
            border-radius: 15px;
            text-align: center;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .stat-item {
            padding: 1.5rem;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #667eea;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            color: #666;
            font-size: 1rem;
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

            .categories-grid {
                grid-template-columns: 1fr;
            }

            .category-header {
                flex-direction: column;
                text-align: center;
            }

            .category-icon {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>
@endsection

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