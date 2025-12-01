<?php
// Start session for form messages
session_start();

// Configuration
$site_title = "Sumayya Akhter - Web Developer & SQA Engineer";
$site_description = "Full-Stack Developer specializing in quality-driven code | PHP, JavaScript, Python | Software Quality Assurance Expert";
$current_year = date('Y');

// Personal Information
$personal_info = [
    'name' => 'Sumayya Akhter',
    'title' => 'Web Developer & SQA Engineer',
    'tagline' => 'Building Quality Software with Clean Code',
    'email' => 'sumaiya.akter.2894@gmail.com',
    'location' => 'Mohakhali, Dhaka, Bangladesh',
    'phone' => '+880 159-0061999',
    'image' => 'assets/images/sumayya.jpg',
    'resume' => 'assets/resume/Sumayya_Akhter.pdf'
];

// Social Links
$social_links = [
    ['name' => 'GitHub', 'url' => 'https://github.com/Sumaiya-Akhter', 'icon' => 'fab fa-github'],
    ['name' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/sumayya-akhter/', 'icon' => 'fab fa-linkedin'],
    ['name' => 'Email', 'url' => 'mailto:sumaiya.akter.2894@gmail.com', 'icon' => 'fas fa-envelope'],
];

// About Information
$about = [
    'intro' => "I'm a passionate web developer and have strong interest in software quality assurance to building robust, user-friendly applications. With a unique blend of development and testing expertise, I create software that not only works but works flawlessly.",
    'description' => "My journey in tech began with a BSc in Computer Science & Engineering from Green University of Bangladesh. Since then, I've honed my skills through hands-on experience in full-stack development and quality assurance. I believe in writing clean, testable code and maintaining high quality standards throughout the development lifecycle.",
    'highlight' => "What sets me apart is my dual expertise: I don't just build features—I build reliable, well-tested solutions that users can depend on.",
    'stats' => [
        ['number' => '10+', 'label' => 'Projects Completed'],
        ['number' => '1+', 'label' => 'Years Experience'],
        ['number' => '100+', 'label' => 'Bugs Squashed'],
        ['number' => '95%', 'label' => 'Client Satisfaction']
    ]
];

// Timeline/Experience
$timeline = [
    [
        'period' => '2024 - 2025',
        'title' => 'Exam Controller',
        'company' => 'Udvash Academic & Admission Care',
        'description' => 'Managing examination processes and quality control systems',
        'type' => 'work'
    ],
    [
        'period' => '2023',
        'title' => 'Laravel Developer Intern',
        'company' => 'NNO Global',
        'description' => 'Developed web applications using Laravel framework, contributed to full-stack projects',
        'type' => 'work'
    ],
    [
        'period' => '2023',
        'title' => 'BSc in Computer Science & Engineering',
        'company' => 'Green University of Bangladesh',
        'description' => 'Graduated with strong foundation in software engineering and quality assurance',
        'type' => 'education'
    ]
];

// Projects with detailed information
$projects = [
    [
        'title' => 'E-Commerce Platform',
        'description' => 'A fully responsive online store featuring shopping cart functionality, secure payment integration, user authentication, and admin dashboard for inventory management.',
        'image' => 'assets/images/projects/ecommerce.webp',
        'tech_stack' => ['HTML5', 'CSS3', 'JavaScript', 'PHP', 'MySQL'],
        'features' => ['User Authentication', 'Shopping Cart', 'Payment Gateway', 'Admin Panel'],
        'github' => 'https://github.com/Sumaiya-Akhter/ecommerce-project',
        //'demo' => '#',
        'featured' => true
    ],
    [
        'title' => 'Task Management System',
        'description' => 'A productivity application with drag-and-drop functionality, real-time updates, priority levels, and team collaboration features for efficient project management.',
        'image' => 'assets/images/projects/taskmanager.webp',
        'tech_stack' => ['PHP', 'JavaScript', 'CSS3', 'HTML5', 'Local Storage'],
        'features' => ['Drag & Drop', 'Priority Management', 'Due Dates', 'Categories'],
        'github' => 'https://github.com/Sumaiya-Akhter/task-manager',
        //'demo' => '#',
        'featured' => true
    ],
    [
        'title' => 'Weather Dashboard',
        'description' => 'Real-time weather application integrating OpenWeather API with location detection, 7-day forecast, and beautiful responsive UI with weather animations.',
        'image' => 'assets/images/projects/weather.png',
        'tech_stack' => ['Python', 'API Integration', 'JavaScript', 'CSS', 'Geolocation'],
        'features' => ['Real-time Data', 'Location Detection', '7-Day Forecast', 'Weather Icons'],
        'github' => 'https://github.com/Sumaiya-Akhter/weather-dashboard',
        //'demo' => '#',
        'featured' => false
    ],
    [
        'title' => 'Bug Tracking System',
        'description' => 'Comprehensive bug tracking and project management tool designed for QA teams with issue prioritization, assignment workflow, and detailed reporting.',
        'image' => 'assets/images/projects/bugtracker.webp',
        'tech_stack' => ['Python', 'MySQL', 'Bootstrap', 'JavaScript'],
        'features' => ['Issue Tracking', 'Priority System', 'Team Assignment', 'Reports'],
        'github' => 'https://github.com/Sumaiya-Akhter/bug-tracker',
        //'demo' => '#',
        'featured' => true
    ],
    [
        'title' => 'Interactive Python Games',
        'description' => 'Collection of classic games including Tic-Tac-Toe with AI opponent, input validation, win detection algorithms, and score tracking system.',
        'image' => 'assets/images/projects/games.webp',
        'tech_stack' => ['Python', 'Tinkter', 'GUI', 'Object-Oriented Design'],
        'features' => ['AI Opponent', 'Score System', 'Input Validation', 'Game Logic'],
        'github' => 'https://github.com/Sumaiya-Akhter/tic-tac-toe',
        //'demo' => '#',
        'featured' => false
    ],
    [
        'title' => 'Portfolio CMS',
        'description' => 'Content management system for portfolio websites with admin panel, dynamic content updates, contact form management, and analytics integration.',
        'image' => 'assets/images/projects/cms.png',
        'tech_stack' => ['PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript'],
        'features' => ['Admin Dashboard', 'Content Management', 'Form Handler', 'Analytics'],
        'github' => 'https://github.com/Sumaiya-Akhter/portfolio-cms',
        //'demo' => '#',
        'featured' => false
    ]
];

// Skills with proficiency levels
$skills = [
    [
        'category' => 'Frontend Development',
        'icon' => 'fas fa-laptop-code',
        'items' => [
            ['name' => 'HTML5 & CSS3', 'level' => 90],
            ['name' => 'JavaScript (ES6+)', 'level' => 60],
            ['name' => 'Responsive Design', 'level' => 70],
            ['name' => 'Bootstrap & Tailwind', 'level' => 75]
        ]
    ],
    [
        'category' => 'Backend Development',
        'icon' => 'fas fa-server',
        'items' => [
            ['name' => 'PHP & Laravel', 'level' => 80],
            ['name' => 'MySQL Database', 'level' => 70],
            ['name' => 'RESTful APIs', 'level' => 40],
            ['name' => 'Python(Flask, Django)', 'level' => 80]
        ]
    ],
    [
        'category' => 'Quality Assurance',
        'icon' => 'fas fa-check-circle',
        'items' => [
            ['name' => 'Manual Testing', 'level' => 90],
            ['name' => 'Test Case Design', 'level' => 85],
            ['name' => 'Bug Reporting', 'level' => 90],
            ['name' => 'Automation Testing', 'level' => 50]
        ]
    ],
    [
        'category' => 'Tools & Technologies',
        'icon' => 'fas fa-tools',
        'items' => [
            ['name' => 'Git & GitHub', 'level' => 80],
            ['name' => 'VS Code', 'level' => 85],
            ['name' => 'Postman API', 'level' => 75],
            ['name' => 'Chrome DevTools', 'level' => 80]
        ]
    ]
];

/* Testimonials
$testimonials = [
    [
        'name' => 'John Doe',
        'position' => 'Senior Developer at NNO Global',
        'image' => 'assets/images/testimonials/person1.jpg',
        'text' => 'Sumayya is an exceptional developer with a keen eye for quality. Her attention to detail and problem-solving skills make her a valuable team member.',
        'rating' => 5
    ],
    [
        'name' => 'Jane Smith',
        'position' => 'Project Manager',
        'image' => 'assets/images/testimonials/person2.jpg',
        'text' => 'Working with Sumayya was a pleasure. She consistently delivered high-quality work on time and was always willing to go the extra mile.',
        'rating' => 5
    ]
]; */

// Services/What I Offer
$services = [
    [
        'icon' => 'fas fa-code',
        'title' => 'Web Development',
        'description' => 'Building responsive, modern websites and web applications using latest technologies and best practices.'
    ],
    [
        'icon' => 'fas fa-bug',
        'title' => 'Quality Assurance',
        'description' => 'Comprehensive testing services including manual testing, test case design, and bug reporting to ensure software quality.'
    ],
    [
        'icon' => 'fas fa-mobile-alt',
        'title' => 'Responsive Design',
        'description' => 'Creating mobile-first, responsive designs that work seamlessly across all devices and screen sizes.'
    ],
    [
        'icon' => 'fas fa-database',
        'title' => 'Database Design',
        'description' => 'Designing and optimizing database structures for efficient data management and retrieval.'
    ],
    [
        'icon' => 'fas fa-rocket',
        'title' => 'Performance Optimization',
        'description' => 'Optimizing websites and applications for speed, performance, and better user experience.'
    ],
    [
        'icon' => 'fas fa-shield-alt',
        'title' => 'Security Testing',
        'description' => 'Identifying vulnerabilities and implementing security best practices to protect your applications.'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $site_description; ?>">
    <meta name="keywords" content="web developer, software engineer, QA engineer, Laravel, PHP, JavaScript, Bangladesh">
    <meta name="author" content="<?php echo $personal_info['name']; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $site_title; ?>">
    <meta property="og:description" content="<?php echo $site_description; ?>">
    <meta property="og:image" content="<?php echo $personal_info['image']; ?>">
    
    <!-- Twitter
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $site_title; ?>">
    <meta name="twitter:description" content="<?php echo $site_description; ?>"> -->
    
    <title><?php echo $site_title; ?></title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- Navigation -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="nav-brand">
                <a href="#home"><?php echo $personal_info['name']; ?></a>
            </div>
            <div class="nav-toggle" id="navToggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#home" class="nav-link active">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#projects" class="nav-link">Projects</a></li>
                <li><a href="#skills" class="nav-link">Skills</a></li>
                <!--<li><a href="#testimonials" class="nav-link">Testimonials</a></li>-->
                <li><a href="#contact" class="nav-link">Contact</a></li>
                <li><a href="<?php echo $personal_info['resume']; ?>" class="btn-nav" download>
                    <i class="fas fa-download"></i> Resume
                </a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-particles"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text animate__animated animate__fadeInLeft">
                    <h1>Hi, I'm <span class="highlight"><?php echo $personal_info['name']; ?></span></h1>
                    <h2 class="typing-text"><?php echo $personal_info['title']; ?></h2>
                    <p class="hero-subtitle"><?php echo $personal_info['tagline']; ?></p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">
                            <i class="fas fa-briefcase"></i> View Projects
                        </a>
                        <a href="#contact" class="btn btn-outline">
                            <i class="fas fa-envelope"></i> Contact Me
                        </a>
                    </div>
                    <div class="hero-social">
                        <?php foreach($social_links as $social): ?>
                            <a href="<?php echo $social['url']; ?>" target="_blank" rel="noopener" title="<?php echo $social['name']; ?>">
                                <i class="<?php echo $social['icon']; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="hero-image animate__animated animate__fadeInRight">
                    <div class="image-wrapper">
                        <img src="<?php echo $personal_info['image']; ?>" alt="<?php echo $personal_info['name']; ?>">
                        <div class="image-border"></div>
                    </div>
                </div>
            </div>
            <div class="scroll-down">
                <a href="#about"><i class="fas fa-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">About Me</h2>
                <p class="section-subtitle">Get to know me better</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Hello! I'm Sumayya</h3>
                    <p><?php echo $about['intro']; ?></p>
                    <p><?php echo $about['description']; ?></p>
                    <blockquote class="highlight-box">
                        <i class="fas fa-quote-left"></i>
                        <?php echo $about['highlight']; ?>
                    </blockquote>
                    
                    <div class="about-stats">
                        <?php foreach($about['stats'] as $stat): ?>
                            <div class="stat-item">
                                <h3 class="stat-number" data-target="<?php echo $stat['number']; ?>"><?php echo $stat['number']; ?></h3>
                                <p><?php echo $stat['label']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="fun-facts">
                        <h4><i class="fas fa-heart"></i> Quick Facts About Me</h4>
                        <ul>
                            <li><i class="fas fa-coffee"></i> Coffee fuels my coding sessions</li>
                            <li><i class="fas fa-book"></i> Always learning new technologies</li>
                            <li><i class="fas fa-palette"></i> Love creative problem-solving</li>
                            <li><i class="fas fa-bug"></i> Bug hunting is my superpower</li>
                        </ul>
                    </div>
                </div>

                <div class="about-timeline">
                    <h3><i class="fas fa-briefcase"></i> My Journey</h3>
                    <div class="timeline">
                        <?php foreach($timeline as $index => $item): ?>
                            <div class="timeline-item <?php echo $item['type']; ?>">
                                <div class="timeline-icon">
                                    <i class="fas fa-<?php echo $item['type'] == 'work' ? 'briefcase' : 'graduation-cap'; ?>"></i>
                                </div>
                                <div class="timeline-content">
                                    <span class="timeline-period"><?php echo $item['period']; ?></span>
                                    <h4><?php echo $item['title']; ?></h4>
                                    <p class="timeline-company"><?php echo $item['company']; ?></p>
                                    <p><?php echo $item['description']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section bg-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">What I Offer</h2>
                <p class="section-subtitle">Services I provide to bring your ideas to life</p>
            </div>
            <div class="services-grid">
                <?php foreach($services as $service): ?>
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="<?php echo $service['icon']; ?>"></i>
                        </div>
                        <h3><?php echo $service['title']; ?></h3>
                        <p><?php echo $service['description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">My Projects</h2>
                <p class="section-subtitle">Explore my recent work and achievements</p>
            </div>
            
            <!-- Filter Buttons -->
            <div class="project-filters">
                <button class="filter-btn active" data-filter="all">All Projects</button>
                <button class="filter-btn" data-filter="featured">Featured</button>
                <button class="filter-btn" data-filter="web">Web Development</button>
                <button class="filter-btn" data-filter="fullstack">Full Stack</button>
            </div>

            <div class="projects-grid">
                <?php foreach($projects as $index => $project): ?>
                    <div class="project-card <?php echo $project['featured'] ? 'featured' : ''; ?>" data-category="<?php echo $project['featured'] ? 'featured' : 'web'; ?>">
                        <div class="project-image">
                            <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                            <div class="project-overlay">
                                <div class="project-links">
                                    <a href="<?php echo $project['github']; ?>" target="_blank" class="project-link" title="View Code">
                                        <i class="fab fa-github"></i>
                                    </a>
                                    <!--<a href="<?php echo $project['demo']; ?>" target="_blank" class="project-link" title="Live Demo">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>-->
                                </div>
                            </div>
                        </div>
                        <div class="project-content">
                            <?php if($project['featured']): ?>
                                <span class="featured-badge"><i class="fas fa-star"></i> Featured</span>
                            <?php endif; ?>
                            <h3><?php echo $project['title']; ?></h3>
                            <p><?php echo $project['description']; ?></p>
                            
                            <div class="project-features">
                                <h4>Key Features:</h4>
                                <ul>
                                    <?php foreach($project['features'] as $feature): ?>
                                        <li><i class="fas fa-check"></i> <?php echo $feature; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>

                            <div class="tech-stack">
                                <?php foreach($project['tech_stack'] as $tech): ?>
                                    <span class="tech-tag"><?php echo $tech; ?></span>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section bg-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Skills & Expertise</h2>
                <p class="section-subtitle">Technologies and tools I work with</p>
            </div>
            <div class="skills-container">
                <?php foreach($skills as $skill_category): ?>
                    <div class="skill-category">
                        <div class="category-header">
                            <i class="<?php echo $skill_category['icon']; ?>"></i>
                            <h3><?php echo $skill_category['category']; ?></h3>
                        </div>
                        <div class="skills-list">
                            <?php foreach($skill_category['items'] as $skill): ?>
                                <div class="skill-item">
                                    <div class="skill-info">
                                        <span class="skill-name"><?php echo $skill['name']; ?></span>
                                        <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                                    </div>
                                    <div class="skill-bar">
                                        <div class="skill-progress" data-progress="<?php echo $skill['level']; ?>"></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Testimonials Section 
    <section id="testimonials" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Testimonials</h2>
                <p class="section-subtitle">What people say about my work</p>
            </div>
            <div class="testimonials-slider">
                <?php foreach($testimonials as $testimonial): ?>
                    <div class="testimonial-card">
                        <div class="testimonial-rating">
                            <?php for($i = 0; $i < $testimonial['rating']; $i++): ?>
                                <i class="fas fa-star"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="testimonial-text">"<?php echo $testimonial['text']; ?>"</p>
                        <div class="testimonial-author">
                            <img src="<?php echo $testimonial['image']; ?>" alt="<?php echo $testimonial['name']; ?>">
                            <div>
                                <h4><?php echo $testimonial['name']; ?></h4>
                                <p><?php echo $testimonial['position']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>-->

    <!-- Contact Section -->
    <section id="contact" class="section bg-light">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Get In Touch</h2>
                <p class="section-subtitle">Let's work together on your next project</p>
            </div>
            <div class="contact-wrapper">
                <div class="contact-info">
                    <h3>Let's Connect!</h3>
                    <p>I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.</p>
                    
                    <div class="contact-details">
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h4>Email</h4>
                                <a href="mailto:<?php echo $personal_info['email']; ?>"><?php echo $personal_info['email']; ?></a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h4>Location</h4>
                                <p><?php echo $personal_info['location']; ?></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h4>Phone</h4>
                                <p><?php echo $personal_info['phone']; ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="social-links">
                        <h4>Follow Me</h4>
                        <div class="social-icons">
                            <?php foreach($social_links as $social): ?>
                                <a href="<?php echo $social['url']; ?>" target="_blank" rel="noopener" title="<?php echo $social['name']; ?>">
                                    <i class="<?php echo $social['icon']; ?>"></i>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="contact-form-wrapper">
                    <?php if(isset($_SESSION['message'])): ?>
                        <div class="alert alert-<?php echo $_SESSION['message_type']; ?>">
                            <?php 
                            echo $_SESSION['message']; 
                            unset($_SESSION['message']);
                            unset($_SESSION['message_type']);
                            ?>
                        </div>
                    <?php endif; ?>

                    <form id="contactForm" class="contact-form" action="process_contact.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Your Name" required>
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="Your Email" required>
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" id="subject" placeholder="Subject" required>
                            <i class="fas fa-tag"></i>
                        </div>
                        <div class="form-group">
                            <textarea name="message" id="message" rows="5" placeholder="Your Message" required></textarea>
                            <i class="fas fa-comment"></i>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3><?php echo $personal_info['name']; ?></h3>
                    <p><?php echo $personal_info['tagline']; ?></p>
                    <div class="footer-social">
                        <?php foreach($social_links as $social): ?>
                            <a href="<?php echo $social['url']; ?>" target="_blank" rel="noopener">
                                <i class="<?php echo $social['icon']; ?>"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="footer-col">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#projects">Projects</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#services">Web Development</a></li>
                        <li><a href="#services">Quality Assurance</a></li>
                        <li><a href="#services">Responsive Design</a></li>
                        <li><a href="#services">Bug Tracking</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-envelope"></i><?php echo $personal_info['email']; ?></li>
                        <li><i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh</li>
                        <li><a href="<?php echo $personal_info['resume']; ?>" download><i class="fas fa-download"></i> Download Resume</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo $current_year; ?> <?php echo $personal_info['name']; ?>. All rights reserved.</p>
                <p>Designed & Developed by Sumayya</p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollTop" class="scroll-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Scripts -->
    <script src="assets/js/main.js"></script>
</body>
</html>