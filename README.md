# RBT - Refrigeration Sales Platform

A comprehensive sales platform designed for managing refrigeration equipment and related products. This platform provides a complete solution for inventory management, product cataloging, user management, and sales operations.

## Overview

RBT is a modern sales platform that enables businesses to efficiently manage their refrigeration product inventory, track stock levels, organize products by categories, and manage user access and permissions.

## Features

- **User Management**: Complete user authentication and authorization system
- **Product Catalog**: Comprehensive product management with detailed information
- **Category Organization**: Hierarchical category system for product classification
- **Inventory Control**: Real-time inventory tracking and stock management

## Modules

### 1. Users Module

The Users module handles all aspects of user management within the platform.

**Features:**
- User registration and authentication
- Role-based access control (RBAC)
- User profile management
- Password management and security
- User activity tracking
- Permission management

**Key Functionality:**
- Create, read, update, and delete user accounts
- Assign roles and permissions to users
- Manage user sessions and authentication
- Track user activity and audit logs

### 2. Products Module

The Products module manages the complete product catalog for refrigeration equipment.

**Features:**
- Product creation and management
- Product details and specifications
- Product images and media management
- Pricing management
- Product variants and configurations
- Product search and filtering

**Key Functionality:**
- Add, edit, and remove products
- Store product information (name, description, SKU, price, etc.)
- Manage product relationships with categories
- Track product availability and status
- Export/import product data

### 3. Categories Module

The Categories module organizes products into a hierarchical category structure.

**Features:**
- Hierarchical category tree
- Category creation and management
- Category attributes and metadata
- Category-based product filtering
- Category images and descriptions

**Key Functionality:**
- Create parent and child categories
- Organize products by category
- Manage category hierarchy
- Filter and search products by category
- Display category-specific product listings

### 4. Inventory Module

The Inventory module provides real-time stock management and tracking capabilities.

**Features:**
- Stock level tracking
- Inventory movements (in/out)
- Low stock alerts
- Inventory reports and analytics
- Stock adjustments and corrections
- Multi-location inventory support

**Key Functionality:**
- Monitor stock levels in real-time
- Record inventory transactions
- Generate inventory reports
- Set reorder points and alerts
- Track inventory history
- Manage stock transfers between locations

## System Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher / MariaDB 10.3 or higher
- Web server (Apache/Nginx)
- Composer (for dependency management)

## Installation

1. Clone the repository:
```bash
git clone [repository-url]
cd rbt
```

2. Install dependencies:
```bash
composer install
```

3. Configure environment:
```bash
cp .env.example .env
php artisan key:generate
```

4. Configure database settings in `.env` file

5. Run migrations:
```bash
php artisan migrate
```

6. Seed initial data (optional):
```bash
php artisan db:seed
```

## Usage

### Accessing the Platform

After installation, access the platform through your web browser at the configured URL.

### User Roles

- **Administrator**: Full access to all modules and system settings
- **Manager**: Access to products, categories, and inventory management
- **Sales Staff**: Access to product catalog and basic inventory viewing
- **Customer**: Access to product browsing and purchasing

## API Documentation

API endpoints are available for integration with external systems. Refer to the API documentation for detailed endpoint specifications and authentication requirements.

## Contributing

Contributions are welcome! Please follow the coding standards and submit pull requests for review.

## License

[Specify your license here]

## Support

For support and inquiries, please contact [support email or contact information].

## Version History

- **v1.0.0** - Initial release with core modules (Users, Products, Categories, Inventory)
