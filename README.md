# Becof-Organic-Chemicals 
Tagline: Saving Lives Through Sustainable Solutions.

## Overview

Becof Chemicals Limited is committed to creating eco-friendly chemical products to reduce environmental pollution, protect human health, and promote sustainable agricultural practices. This project is the foundational website for Becof Chemicals, with plans to expand into a full e-commerce platform.

---

## Mission and Vision

- Mission: To innovate and manufacture a diverse range of eco-friendly chemical products that reduce environmental pollution, protect human health, and promote sustainable agricultural practices.
- Vision: To lead the global transformation towards safer and more sustainable agriculture by pioneering innovative, eco-friendly chemical solutions, that protect human health, enhance environmental well-being, and empower communities

---

## Table of Contents

1. Prerequisites
2. Installation
3. File Structure
4. Features
5. Backend Details
6. API Information
7. Database Structure for E-commerce
8. Testing
9. Deployment
10. Future Enhancements
11. Contribution Guidelines
12. Contact

---

## Prerequisites

Before getting started, ensure your environment is set up with the following tools and dependencies:

1. Web Server: Apache or Nginx (for hosting the website).
2. PHP: Required to handle form submissions.
3. MySQL: For future e-commerce database integration.
4. HTML5 & CSS3: The website is built using these technologies.
5. Git: To clone and version control the project.
6. Optional: Docker or XAMPP for easy setup and development.

---

## Installation

### 1. Clone the Repository
To set up the project locally, clone the repository:

```bash
git clone <repository_url>
```

### 2. Navigate to the Project Directory
```bash
cd Becof_Chemicals
```

### 3. Run the Project Locally
For basic testing, open `index.html` in a browser.  
To enable PHP functionality (like form handling), use a local development server (e.g., XAMPP, WAMP, or Docker).

#### Using XAMPP/WAMP:
1. Move the project folder to `htdocs` (XAMPP) or `www` (WAMP).
2. Start the server and access the project at `http://localhost/Becof_Chemicals/index.html`.

---

## File Structure

```
Becof_Chemicals/
├── assets/                 # Images, fonts, etc.
│   ├── Becof Chemicals Logo.jpg
│   ├── KeNIA logo.jpg
├── css/
│   └── style.css           # Stylesheet for the website.
├── index.html              # Homepage.
├── products.html           # Product listing page.
├── careers.html            # Careers page.
├── contact.html            # Contact page.
├── submit_contact_form.php # PHP script for contact form.
└── README.md               # This documentation.
```

---

## Features

### Frontend:
- Responsive Design: Optimized for mobile and desktop.
- Products Page: Product descriptions and details.
- Careers Page: Lists job opportunities.
- Contact Form: Form submission functionality.

### Backend:
- PHP Form Handling: Handles form submissions via PHP, with input validation and security considerations.

---

## Backend Details

### PHP Form Submission
- File: `submit_contact_form.php`
- Functionality: Handles form data sent via POST. It processes user inputs (name, email, message) and returns success or error messages. In production, this could be extended to email notifications or storing data in a database.

---

## API Information (For Future Integration)

Once the e-commerce platform is implemented, you may need to integrate the following APIs:

1. Payment Gateway API: For transactions. Options include:
   - Stripe: [https://stripe.com/docs/api](https://stripe.com/docs/api)
   - PayPal: [https://developer.paypal.com/docs/api/overview/](https://developer.paypal.com/docs/api/overview/)
   - Flutterwave: [https://developer.flutterwave.com/](https://developer.flutterwave.com/)
   
2. Shipping API: For order fulfillment. Examples include:
   - Shippo: [https://goshippo.com/docs/](https://goshippo.com/docs/)
   - EasyPost: [https://www.easypost.com/docs](https://www.easypost.com/docs)

3. Authentication API (if user accounts are required):
   - JWT: For token-based authentication.
   - OAuth 2.0: For third-party logins (Google, Facebook, etc.).

---

## Database Structure (For E-Commerce)

For the future e-commerce platform, a MySQL or MongoDB database can be used. Here’s a potential schema:

### Tables:
- Users
  - `user_id`: Primary Key
  - `name`, `email`, `password`: User details
  - `address`, `phone`: Contact details
- Products
  - `product_id`: Primary Key
  - `name`, `description`, `price`, `stock`: Product details
- Orders
  - `order_id`: Primary Key
  - `user_id`: Foreign Key (to Users)
  - `product_id`: Foreign Key (to Products)
  - `quantity`, `order_date`: Order details
- Payments
  - `payment_id`: Primary Key
  - `order_id`: Foreign Key (to Orders)
  - `payment_method`, `payment_status`, `payment_date`: Payment information

---

## Testing

If you plan to implement testing:

1. PHP Unit Tests: Use PHPUnit to test backend functionality (e.g., form submissions, database interactions).
2. JavaScript Tests: Use frameworks like Mocha or Jest for testing JavaScript functionality (e.g., form validations).
3. CSS/Responsive Testing: Test the website’s layout across different screen sizes and browsers using tools like BrowserStack.

Run the tests using:

```bash
# Run unit tests
phpunit tests/
```

---

## Deployment

To deploy the website on a live server, follow these steps:

1. Choose Hosting: Options include DigitalOcean, AWS, or shared hosting providers.
2. Set Up Web Server: If using a VPS, set up Apache or Nginx.
3. Deploy Code: Upload the codebase via FTP/SFTP or use Git for version control.
4. Set Up Database (For E-Commerce):
   - Install MySQL or MongoDB.
   - Create the required tables.
5. Set Environment Variables: For sensitive data (like API keys or database credentials), use environment variables for security.
6. SSL Certificate: Set up SSL (using Let's Encrypt or other providers) to secure the website.

---

## Future Enhancements

### E-Commerce Platform

The future phase of this project includes:
- User Authentication: Registration, login, and profile management.
- Shopping Cart: A cart system that allows users to add/remove products.
- Product Management: Admin dashboard to add/edit products.
- Payment Integration: Secure payment gateways using APIs like Stripe or PayPal.
- Order Tracking: Allow users to track the status of their orders.
- Email Notifications: Automated emails for order confirmations, shipping updates, etc.

---

## Contribution Guidelines

If you'd like to contribute:

1. Fork the repository.
2. Create a new feature branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to your branch (`git push origin feature-branch`).
5. Open a pull request for review.

---

## Contact

For any questions, please contact us:

Email: info@becofchemicalslimited.com  
Phone: +254-735-283397

