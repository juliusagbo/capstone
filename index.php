<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Management System</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <!-- Header Section -->
    <header class="navbar">
        <a class="logo" href="#home">EcoFinance</a>
        <nav>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#features">Features</a></li>
                <li><a href="#how-it-works">How It Works</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#FAQs">FAQs</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </nav>
        <div class="auth-buttons">
            <a href="login.php" class="btn login">Login</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Hassle-Free Loan Management at Your Fingertips</h1>
            <p>Fast, Secure, and Transparent Loan Processing</p>
            <div class="hero-buttons">
                <a href="register.php" class="btn primary">Get Started</a>
                <a href="#features" class="btn secondary">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <h2>Why Choose EcoFinance?</h2>
        <p class="features-subtitle">Manage your loans easily with our powerful tools.</p>

        <div class="features-container">
            <!-- Feature 1 -->
            <div class="feature-card">
                <i class="fas fa-robot"></i>
                <h3>Automated Loan Processing</h3>
                <p>Get quick approvals with minimal paperwork.</p>
            </div>

            <!-- Feature 2 -->
            <div class="feature-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Secure Transactions</h3>
                <p>Bank-level security ensures your data remains safe.</p>
            </div>

            <!-- Feature 3 -->
            <div class="feature-card">
                <i class="fas fa-chart-line"></i>
                <h3>Real-Time Tracking</h3>
                <p>Monitor your loans and repayments instantly.</p>
            </div>

            <!-- Feature 4 -->
            <div class="feature-card">
                <i class="fas fa-laptop-code"></i>
                <h3>User-Friendly Dashboard</h3>
                <p>Simple and intuitive interface for easy management.</p>
            </div>

            <!-- Feature 5 -->
            <div class="feature-card">
                <i class="fas fa-bolt"></i>
                <h3>Fast Approvals</h3>
                <p>AI-powered system helps you get approvals in no time.</p>
            </div>
        </div>
    </section>
    <!-- How It Works Section -->
<section class="how-it-works" id="how-it-works">
    <h2>How It Works</h2>
    <p class="how-subtitle">Simple steps to get your loan processed quickly.</p>

    <div class="steps-container">
        <!-- Step 1 -->
        <div class="step-card">
            <span class="step-number">1</span>
            <h3>Apply Online</h3>
            <p>Fill out a simple application form with your details.</p>
        </div>

        <!-- Step 2 -->
        <div class="step-card">
            <span class="step-number">2</span>
            <h3>Get Verified</h3>
            <p>Our system securely verifies your information.</p>
        </div>

        <!-- Step 3 -->
        <div class="step-card">
            <span class="step-number">3</span>
            <h3>Instant Approval</h3>
            <p>AI-powered system ensures fast approvals.</p>
        </div>

        <!-- Step 4 -->
        <div class="step-card">
            <span class="step-number">4</span>
            <h3>Receive Funds</h3>
            <p>Loan amount is transferred directly to your account.</p>
        </div>

        <!-- Step 5 -->
        <div class="step-card">
            <span class="step-number">5</span>
            <h3>Repay Easily</h3>
            <p>Track payments and repay with flexible options.</p>
        </div>
    </div>
</section>
<!-- Testimonials Section -->
<section class="testimonials" id="testimonials">
    <h2>What Our Clients Say</h2>
    <p class="testimonials-subtitle">Trusted by thousands of satisfied users.</p>

    <div class="testimonials-container">
        <!-- Testimonial 1 -->
        <div class="testimonial-card">
            <p class="testimonial-text">"EcoFinance made the loan process effortless! I got approved in minutes and received my funds the same day."</p>
            <div class="testimonial-author">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson">
                <h3>Sarah Johnson</h3>
                <p>Small Business Owner</p>
            </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="testimonial-card">
            <p class="testimonial-text">"The best loan management platform I've ever used. The real-time tracking feature is a game-changer!"</p>
            <div class="testimonial-author">
                <img src="https://randomuser.me/api/portraits/men/46.jpg" alt="James Carter">
                <h3>James Carter</h3>
                <p>Freelancer</p>
            </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="testimonial-card">
            <p class="testimonial-text">"Super easy and secure! The customer support team was also very helpful throughout the process."</p>
            <div class="testimonial-author">
                <img src="https://randomuser.me/api/portraits/women/47.jpg" alt="Linda Roberts">
                <h3>Linda Roberts</h3>
                <p>College Student</p>
            </div>
        </div>
    </div>
</section>
<!-- FAQs Section -->
<section class="faqs" id="FAQs">
    <h2>Frequently Asked Questions</h2>
    <p class="faqs-subtitle">Find answers to common questions about our loan services.</p>

    <div class="faqs-container">
        <!-- FAQ 1 -->
        <div class="faq-item">
            <button class="faq-question">How do I apply for a loan? <span>+</span></button>
            <div class="faq-answer">Applying is easy! Simply fill out the online application form and submit your details.</div>
        </div>

        <!-- FAQ 2 -->
        <div class="faq-item">
            <button class="faq-question">How long does approval take? <span>+</span></button>
            <div class="faq-answer">With our AI-powered system, approvals can be as fast as a few minutes.</div>
        </div>

        <!-- FAQ 3 -->
        <div class="faq-item">
            <button class="faq-question">What are the repayment terms? <span>+</span></button>
            <div class="faq-answer">We offer flexible repayment options ranging from 3 months to 5 years.</div>
        </div>

        <!-- FAQ 4 -->
        <div class="faq-item">
            <button class="faq-question">Is my data secure? <span>+</span></button>
            <div class="faq-answer">Absolutely! We use bank-level encryption to ensure your information stays safe.</div>
        </div>

        <!-- FAQ 5 -->
        <div class="faq-item">
            <button class="faq-question">Can I track my loan status? <span>+</span></button>
            <div class="faq-answer">Yes! You can monitor your loan and repayment details in real time via our dashboard.</div>
        </div>
    </div>
</section>

<!-- Contact Us Section -->
<section class="contact" id="contact">
    <h2>Contact Us</h2>
    <p class="contact-subtitle">Have questions? We're here to help.</p>

    <div class="contact-container">
        <!-- Contact Info -->
        <div class="contact-info">
            <p><strong>📍 Address:</strong> 123 EcoFinance Street, New York, NY 10001</p>
            <p><strong>📞 Phone:</strong> +1 (800) 123-4567</p>
            <p><strong>📧 Email:</strong> support@EcoFinance.com</p>
            <p><strong>🕘 Working Hours:</strong> Mon - Fri: 9:00 AM - 6:00 PM</p>
        </div>

        <!-- Contact Form -->
        <form class="contact-form">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="4" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>
</section>






    <!-- Add this script before closing body tag -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-links a');
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);
                    
                    if (targetSection) {
                        targetSection.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
        const faqButtons = document.querySelectorAll(".faq-question");

        faqButtons.forEach(button => {
            button.addEventListener("click", function() {
                const answer = this.nextElementSibling;
                const isOpen = answer.style.display === "block";

                // Close all answers
                document.querySelectorAll(".faq-answer").forEach(a => a.style.display = "none");
                document.querySelectorAll(".faq-question span").forEach(span => span.textContent = "+");

                // Toggle current answer
                if (!isOpen) {
                    answer.style.display = "block";
                    this.querySelector("span").textContent = "−";
                }
            });
        });
    });
    </script>
</body>
</html>
