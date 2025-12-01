-- ===================================
-- Portfolio Database Setup
-- ===================================

-- Create Database
CREATE DATABASE IF NOT EXISTS portfolio_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE portfolio_db;

-- ===================================
-- Contact Messages Table
-- ===================================
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    subject VARCHAR(200) NOT NULL,
    message TEXT NOT NULL,
    status ENUM('new', 'read', 'replied') DEFAULT 'new',
    ip_address VARCHAR(45),
    user_agent VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_status (status),
    INDEX idx_created (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- Projects Table
-- ===================================
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    slug VARCHAR(150) UNIQUE NOT NULL,
    description TEXT NOT NULL,
    long_description TEXT,
    image VARCHAR(255),
    github_url VARCHAR(255),
    demo_url VARCHAR(255),
    featured BOOLEAN DEFAULT FALSE,
    category VARCHAR(50),
    display_order INT DEFAULT 0,
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_featured (featured),
    INDEX idx_status (status),
    INDEX idx_order (display_order)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- Project Technologies Table
-- ===================================
CREATE TABLE IF NOT EXISTS project_technologies (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT NOT NULL,
    technology VARCHAR(50) NOT NULL,
    FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE CASCADE,
    UNIQUE KEY unique_project_tech (project_id, technology)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- Project Features Table
-- ===================================
CREATE TABLE IF NOT EXISTS project_features (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT NOT NULL,
    feature VARCHAR(200) NOT NULL,
    display_order INT DEFAULT 0,
    FOREIGN KEY (project_id) REFERENCES projects(id) ON DELETE CASCADE,
    INDEX idx_order (display_order)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- Skills Table
-- ===================================
CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100) NOT NULL,
    name VARCHAR(100) NOT NULL,
    level INT CHECK (level >= 0 AND level <= 100),
    icon VARCHAR(100),
    display_order INT DEFAULT 0,
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_category (category),
    INDEX idx_order (display_order)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- Testimonials Table
-- ===================================
CREATE TABLE IF NOT EXISTS testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    position VARCHAR(150) NOT NULL,
    company VARCHAR(150),
    image VARCHAR(255),
    text TEXT NOT NULL,
    rating INT CHECK (rating >= 1 AND rating <= 5),
    display_order INT DEFAULT 0,
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_status (status),
    INDEX idx_order (display_order)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- Blog Posts Table (Optional)
-- ===================================
CREATE TABLE IF NOT EXISTS blog_posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    slug VARCHAR(200) UNIQUE NOT NULL,
    excerpt TEXT,
    content LONGTEXT NOT NULL,
    featured_image VARCHAR(255),
    category VARCHAR(50),
    tags VARCHAR(255),
    views INT DEFAULT 0,
    status ENUM('draft', 'published') DEFAULT 'draft',
    published_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_status (status),
    INDEX idx_published (published_at),
    FULLTEXT idx_search (title, content)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- Admin Users Table
-- ===================================
CREATE TABLE IF NOT EXISTS admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    full_name VARCHAR(100),
    role ENUM('admin', 'editor') DEFAULT 'editor',
    last_login TIMESTAMP NULL,
    status ENUM('active', 'inactive') DEFAULT 'active',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    INDEX idx_username (username),
    INDEX idx_status (status)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- Site Settings Table
-- ===================================
CREATE TABLE IF NOT EXISTS site_settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(100) UNIQUE NOT NULL,
    setting_value TEXT,
    setting_type VARCHAR(50) DEFAULT 'text',
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- Analytics Table
-- ===================================
CREATE TABLE IF NOT EXISTS analytics (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page_url VARCHAR(255),
    visitor_ip VARCHAR(45),
    user_agent TEXT,
    referer VARCHAR(255),
    country VARCHAR(100),
    city VARCHAR(100),
    visit_date DATE,
    visit_time TIME,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_date (visit_date),
    INDEX idx_page (page_url)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===================================
-- Insert Sample Data
-- ===================================

-- Sample Projects
INSERT INTO projects (title, slug, description, github_url, demo_url, featured, category, display_order, status) VALUES
('E-Commerce Platform', 'ecommerce-platform', 'A fully responsive online store with shopping cart and payment integration', 'https://github.com/Sumaiya-Akhter/ecommerce-project', '#', TRUE, 'web', 1, 'active'),
('Task Management System', 'task-management', 'Productivity tool with drag-and-drop functionality', 'https://github.com/Sumaiya-Akhter/task-manager', '#', TRUE, 'web', 2, 'active'),
('Weather Dashboard', 'weather-dashboard', 'Real-time weather app with API integration', 'https://github.com/Sumaiya-Akhter/weather-dashboard', '#', FALSE, 'web', 3, 'active'),
('Bug Tracking System', 'bug-tracker', 'Comprehensive bug tracking tool for QA teams', 'https://github.com/Sumaiya-Akhter/bug-tracker', '#', TRUE, 'fullstack', 4, 'active');

-- Sample Technologies
INSERT INTO project_technologies (project_id, technology) VALUES
(1, 'HTML5'), (1, 'CSS3'), (1, 'JavaScript'), (1, 'PHP'), (1, 'MySQL'),
(2, 'JavaScript'), (2, 'CSS3'), (2, 'HTML5'),
(3, 'API Integration'), (3, 'JavaScript'), (3, 'CSS'),
(4, 'PHP'), (4, 'MySQL'), (4, 'Bootstrap'), (4, 'JavaScript');

-- Sample Features
INSERT INTO project_features (project_id, feature, display_order) VALUES
(1, 'User Authentication', 1),
(1, 'Shopping Cart', 2),
(1, 'Payment Gateway', 3),
(1, 'Admin Panel', 4),
(2, 'Drag & Drop', 1),
(2, 'Priority Management', 2),
(2, 'Due Dates', 3);

-- Sample Skills
INSERT INTO skills (category, name, level, icon, display_order, status) VALUES
('Frontend Development', 'HTML5 & CSS3', 90, 'fas fa-laptop-code', 1, 'active'),
('Frontend Development', 'JavaScript (ES6+)', 80, 'fas fa-laptop-code', 2, 'active'),
('Frontend Development', 'Responsive Design', 85, 'fas fa-laptop-code', 3, 'active'),
('Backend Development', 'PHP & Laravel', 80, 'fas fa-server', 1, 'active'),
('Backend Development', 'MySQL Database', 75, 'fas fa-server', 2, 'active'),
('Backend Development', 'RESTful APIs', 70, 'fas fa-server', 3, 'active'),
('Quality Assurance', 'Manual Testing', 90, 'fas fa-check-circle', 1, 'active'),
('Quality Assurance', 'Test Case Design', 85, 'fas fa-check-circle', 2, 'active'),
('Quality Assurance', 'Bug Reporting', 90, 'fas fa-check-circle', 3, 'active');

-- Sample Testimonials
INSERT INTO testimonials (name, position, company, text, rating, display_order, status) VALUES
('John Doe', 'Senior Developer', 'NNO Global', 'Sumayya is an exceptional developer with a keen eye for quality. Her attention to detail and problem-solving skills make her a valuable team member.', 5, 1, 'active'),
('Jane Smith', 'Project Manager', 'Tech Solutions', 'Working with Sumayya was a pleasure. She consistently delivered high-quality work on time and was always willing to go the extra mile.', 5, 2, 'active');

-- Sample Site Settings
INSERT INTO site_settings (setting_key, setting_value, setting_type) VALUES
('site_name', 'Sumayya Akhter - Portfolio', 'text'),
('site_email', 'sumaiya.akter.2894@gmail.com', 'email'),
('site_phone', '+880 XXX-XXXXXXX', 'text'),
('site_location', 'Mohakhali, Dhaka, Bangladesh', 'text'),
('github_url', 'https://github.com/Sumaiya-Akhter', 'url'),
('linkedin_url', 'https://www.linkedin.com/in/sumayya-akhter/', 'url'),
('maintenance_mode', '0', 'boolean');

-- Create default admin user (password: admin123 - CHANGE THIS!)
-- Password hash for 'admin123'
INSERT INTO admin_users (username, email, password, full_name, role, status) VALUES
('admin', 'admin@sumayyaakhter.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Sumayya Akhter', 'admin', 'active');

-- ===================================
-- Views for Analytics
-- ===================================

CREATE VIEW daily_visits AS
SELECT 
    visit_date,
    COUNT(*) as visit_count,
    COUNT(DISTINCT visitor_ip) as unique_visitors
FROM analytics
GROUP BY visit_date
ORDER BY visit_date DESC;

CREATE VIEW popular_pages AS
SELECT 
    page_url,
    COUNT(*) as view_count
FROM analytics
GROUP BY page_url
ORDER BY view_count DESC
LIMIT 10;

-- ===================================
-- Stored Procedures
-- ===================================

DELIMITER //

-- Get all active projects with technologies
CREATE PROCEDURE GetActiveProjects()
BEGIN
    SELECT 
        p.*,
        GROUP_CONCAT(DISTINCT pt.technology) as technologies
    FROM projects p
    LEFT JOIN project_technologies pt ON p.id = pt.project_id
    WHERE p.status = 'active'
    GROUP BY p.id
    ORDER BY p.display_order;
END //

-- Get contact message statistics
CREATE PROCEDURE GetContactStats()
BEGIN
    SELECT 
        status,
        COUNT(*) as count
    FROM contact_messages
    GROUP BY status;
END //

DELIMITER ;

-- ===================================
-- Triggers
-- ===================================

DELIMITER //

-- Update project timestamp on technology change
CREATE TRIGGER update_project_timestamp
AFTER INSERT ON project_technologies
FOR EACH ROW
BEGIN
    UPDATE projects 
    SET updated_at = CURRENT_TIMESTAMP 
    WHERE id = NEW.project_id;
END //

DELIMITER ;

-- ===================================
-- Indexes for Performance
-- ===================================

-- Additional indexes for better query performance
CREATE INDEX idx_contact_email ON contact_messages(email);
CREATE INDEX idx_project_slug ON projects(slug);
CREATE INDEX idx_skill_name ON skills(name);

-- ===================================
-- Grant Permissions (Update username/password)
-- ===================================

-- CREATE USER 'portfolio_user'@'localhost' IDENTIFIED BY 'strong_password_here';
-- GRANT ALL PRIVILEGES ON portfolio_db.* TO 'portfolio_user'@'localhost';
-- FLUSH PRIVILEGES;

-- ===================================
-- Database Backup Command
-- ===================================

-- To backup: mysqldump -u username -p portfolio_db > portfolio_backup.sql
-- To restore: mysql -u username -p portfolio_db < portfolio_backup.sql