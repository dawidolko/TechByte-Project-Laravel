# Database-Project-ComputerStore

> 🚀 **Modern E-Commerce Platform for Computer Store** - Full-stack application with JavaScript Frontend, PHP Backend, and PL/SQL Oracle Database

## 📋 Description

Welcome to the **TechByte** computer store repository! This project showcases a comprehensive e-commerce platform offering a wide selection of computer products, including laptops, desktop computers, components, and accessories. Built with modern web technologies and enterprise-grade database management, this platform demonstrates professional full-stack development practices.

The application features a dynamic JavaScript frontend, robust PHP backend, and Oracle PL/SQL database with advanced stored procedures, triggers, and data management capabilities. This repository exemplifies best practices in database design, API development, and responsive user interface implementation.

## 📁 Repository Structure

```
Database-Project-ComputerStore/
├── 📁 .tools/             # Development tools and utilities
│   └── 🐳 docker/         # Docker configuration for Laravel backend
│       ├── 📄 docker-compose.yml   # Docker Compose setup
│       ├── 🐋 Dockerfile           # Laravel app container
│       ├── ⚙️ nginx.conf           # Nginx configuration
│       ├── 🚀 entrypoint.sh        # Auto-initialization script
│       └── 📖 README.md            # Docker documentation
├── 📁 frontend/           # JavaScript frontend application
│   ├── 📄 index.html      # Main store homepage
│   ├── 🛒 cart.html       # Shopping cart page
│   ├── 💻 computers.html  # Desktop computers catalog
│   ├── 💼 laptops.html    # Laptops catalog
│   ├── 👤 account.html    # User account management
│   ├── 📧 contact.html    # Contact page
│   └── 🎨 assets/         # Images, styles, and scripts
├── 📁 backend/            # PHP backend logic and API
│   ├── 🔧 api/            # RESTful API endpoints
│   ├── 🔐 auth/           # Authentication and session management
│   └── 🗄️ database/       # Database connection handlers
├── 📁 backend-clear-laravel/  # Laravel 11 backend (production-ready)
│   ├── 📁 app/            # Application core logic
│   ├── 📁 database/       # Migrations and seeders
│   ├── 📁 routes/         # API and web routes
│   └── 📁 config/         # Framework configuration
├── 📁 plsql-oracle19c/    # PL/SQL database scripts
│   ├── 📜 procedures.sql  # Stored procedures
│   ├── 🔄 export.sql      # Data export scripts
│   ├── 🗑️ delete.sql      # Data deletion scripts
│   └── 🧹 clear.sql       # Database cleanup scripts
├── 📁 entity-relationship-diagram/  # Database design documentation
│   ├── 📊 ERD_v3.pdf      # Latest ER diagram version
│   ├── 🖼️ ERD_v3.png      # ER diagram image
│   └── 📖 README.md       # ER diagram documentation
├── 📁 docs/               # Project documentation
│   ├── 📝 jsDoc/          # JavaScript API documentation
│   └── 📚 project-description-v2.docx
├── 📁 .github/workflows/  # CI/CD automation
├── ⚙️ .env.example        # Environment configuration template
├── 🔒 .gitignore          # Git ignore rules
├── 🤝 CONTRIBUTING.md     # Contribution guidelines
├── 📄 LICENSE             # MIT License
└── 📖 README.md           # Project documentation
```

## 🚀 Getting Started

### 🐳 Quick Start with Docker (Recommended)

Najłatwiejszy sposób na uruchomienie projektu Laravel backend z pełną konfiguracją Oracle Database:

```bash
# Przejdź do katalogu Docker
cd .tools/docker

# Uruchom całe środowisko
docker compose up -d

# Poczekaj 2-3 minuty na inicjalizację bazy danych i migracje
# Aplikacja będzie dostępna na: http://localhost:8080
```

**📖 Szczegółowa dokumentacja Docker:** Zobacz [.tools/docker/README.md](.tools/docker/README.md)

**✨ Co jest automatycznie skonfigurowane:**

- ✅ Oracle Database XE 21c z użytkownikiem `sklep`
- ✅ PHP 8.2 z rozszerzeniem OCI8 i Composer
- ✅ Nginx web server
- ✅ Automatyczne migracje bazy danych
- ✅ Automatyczne seedowanie danych testowych
- ✅ Konfiguracja storage dla zdjęć produktów

---

### 🔧 Tradycyjna instalacja (Manualnie)

#### 1. Clone the Repository

```bash
git clone https://github.com/dawidolko/Database-Project-ComputerStore.git
cd Database-Project-ComputerStore
```

#### 2. Database Setup (Oracle 19c)

```bash
# Import database schema and data
sqlplus username/password@database < plsql-oracle19c/procedures.sql
```

#### 3. Backend Configuration

```bash
# Copy environment configuration
cp .env.example .env

# Edit .env file with your database credentials and settings
# Start PHP backend server
php -S localhost:8000 -t backend/
```

#### 4. Frontend Setup

```bash
# Open frontend in browser or use a local server
cd frontend
# Using Python simple server
python -m http.server 3000
# Or using Node.js http-server
npx http-server -p 3000
```

- Access the application at [http://localhost:3000](http://localhost:3000)

## ⚙️ System Requirements

### **🐳 Docker Setup (Recommended):**

- **Docker Desktop** (najnowsza wersja)
- **Docker Compose** (wersja 3.8+)
- **4GB RAM** minimum
- **10GB wolnego miejsca** na dysku

> ⚡ Z Docker wszystko jest automatycznie skonfigurowane - nie musisz instalować Oracle, PHP, ani Composer!

---

### **Essential Tools (Manual Setup):**

- **Oracle Database 19c** or higher
- **PHP** (version 7.4 or higher)
- **Web Server** (Apache, Nginx, or PHP built-in server)
- **Modern Web Browser** (Chrome, Firefox, Safari, Edge)
- **Git** for version control

### **Development Environment:**

- **Code Editor** (VS Code, PhpStorm, WebStorm)
- **SQL Developer** or **SQLcl** for database management
- **Postman** or **Insomnia** for API testing
- **Node.js** (optional, for development tools)

### **Database Requirements:**

- **Oracle Database 19c** with PL/SQL support
- **SQL\*Plus** for script execution
- Proper database user privileges for DDL/DML operations

### **Recommended Extensions:**

- **PHP** syntax highlighting and IntelliSense
- **SQL** formatting and validation
- **Prettier** for code formatting
- **ESLint** for JavaScript code quality
- **Live Server** for frontend development

## ✨ Key Features

### **🛒 E-Commerce Functionality**

- Complete product catalog with laptops, desktops, and components
- Advanced shopping cart with real-time price calculations
- Secure checkout process with order management

### **👤 User Management**

- User registration and authentication system
- Personal account dashboard with order history
- Favorite products and wishlist functionality

### **🗄️ Database Architecture**

- Comprehensive Entity-Relationship Diagram (ERD)
- Advanced PL/SQL stored procedures and triggers
- Optimized data export and import capabilities
- Transaction management and data integrity constraints

### **📱 Responsive Design**

- Fully optimized for mobile, tablet, and desktop devices
- Modern CSS Grid and Flexbox layouts
- Intuitive navigation and user experience

### **🔐 Security Features**

- Session management and authentication
- Secure database connections and prepared statements
- Environment-based configuration management

### **📊 Administrative Tools**

- Database management scripts for maintenance
- Data export functionality for backup and analysis
- Comprehensive documentation and API specifications

## 🛠️ Technologies Used

- **Frontend:** HTML5, CSS3, JavaScript (ES6+)
- **Backend:** PHP 7.4+, RESTful API architecture
- **Database:** Oracle Database 19c, PL/SQL
- **Version Control:** Git, GitHub
- **CI/CD:** GitHub Actions for automated workflows
- **Documentation:** JSDoc, Markdown, Entity-Relationship Diagrams

## 🌍 Live Demo

The project is deployed and available at: **[https://techbyte.dawidolko.pl](https://techbyte.dawidolko.pl)**

## 🖼️ Preview

[<img src="frontend/assets/images/Main.png" width="80%" alt="TechByte Store Preview"/>](frontend/assets/images/Main.png)

## 🤝 Contributing

Contributions are highly welcomed! Here's how you can help:

- 🐛 **Report bugs** - Found an issue? Let us know!
- 💡 **Suggest improvements** - Have ideas for better features?
- 🔧 **Submit pull requests** - Share your enhancements and solutions
- 📖 **Improve documentation** - Help make the project clearer

Please see our detailed contribution guidelines in the [CONTRIBUTING.md](CONTRIBUTING.md) file before submitting your contributions.

## 👨‍💻 Authors

Created by:

- **[Dawid Olko](https://github.com/dawidolko)** - Project Lead & Full-Stack Development
- **[Piotr Smoła](https://github.com/piotrsmola)** - Database Design & Backend Development

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---
