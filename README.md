<h1 align="center">Country-State-City CRUD and Authentication System</h1> 

This project is a Laravel 11 application that implements a Country-State-City CRUD system and an AJAX-based authentication system. The application demonstrates proper SQL relationships, AJAX-powered front-end operations, and a clean authentication workflow.

## Features

### 1. Country-State-City CRUD with AJAX
- **CRUD Operations**:
  - Create, Read, Update, Delete for Country, State, and City.
- **Relationships**:
  - A Country can have multiple States.
  - A State can have multiple Cities.
  - Cascading delete operations.
- **AJAX Integration**:
  - Asynchronous operations for CRUD without page reloads.
  - Success/error messages displayed dynamically.

### 2. Authentication System
- **Login**:
  - Login using email or username.
- **Registration**:
  - Secure user registration.
- **Forgot Password**:
  - Password reset functionality.
- **AJAX Validation**:
  - Real-time error handling for forms.

### 3. General Guidelines Followed
- Laravel 11 used as the framework.
- Clean, maintainable, and readable code.
- Comments added for complex logic.
- Basic tests included for core functionality.

---

## Installation and Setup

### Prerequisites
- PHP >= 8.1
- Composer
- MySQL Database
- Node.js and npm

### Steps to Setup

1. **Clone the Repository**:
   ```bash
   git clone <repository-url>
   cd CountryStateCityCRUD
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Setup Environment**:
   - Copy the `.env.example` file to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update `.env` with your database credentials:
     ```env
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=country_state_city
     DB_USERNAME=root
     DB_PASSWORD=your_password
     ```

4. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

5. **Seed Database (Optional)**:
   ```bash
   php artisan db:seed
   ```

6. **Compile Assets**:
   ```bash
   npm run dev
   ```

7. **Start Development Server**:
   ```bash
   php artisan serve
   ```

---

## Usage

### Country-State-City CRUD

#### Endpoints
| Entity   | Actions                | Endpoint                |
|----------|------------------------|-------------------------|
| Country  | Create, Read, Update, Delete | `/countries`            |
| State    | Create, Read, Update, Delete | `/states`              |
| City     | Create, Read, Update, Delete | `/cities`              |

<!-- #### AJAX Example
- **Adding a Country**:
  ```javascript
  $('#add-country-form').submit(function (e) {
      e.preventDefault();
      $.ajax({
          url: '/countries',
          method: 'POST',
          data: $(this).serialize(),
          success: function (response) {
              alert('Country added successfully');
          },
          error: function (response) {
              alert('Error: ' + response.responseJSON.message);
          }
      });
  });
  ``` -->

### Authentication
- **Login**:
  - Use email or username.
- **Registration**:
  - Securely create an account.
- **Password Reset**:
  - Request and reset password via email.
- **AJAX Validation**:
  - Handle errors in real-time.

---

<!-- ## Testing

1. **Run Tests**:
   ```bash
   php artisan test
   ```

2. **Example Test Cases**:
   - Verify AJAX CRUD operations for Country, State, and City.
   - Validate authentication workflows.

--- -->

<!-- ## Folder Structure

```
CountryStateCityCRUD/
├── app/
│   ├── Models/
│   │   ├── Country.php
│   │   ├── State.php
│   │   ├── City.php
│   ├── Http/Controllers/
│       ├── CountryController.php
│       ├── StateController.php
│       ├── CityController.php
├── database/
│   ├── migrations/
├── public/
│   ├── html/
├── resources/
│   ├── views/
│   ├── js/
│       ├── app.js
├── routes/
│   ├── web.php
└── tests/
```

--- -->

## Contributions
Contributions are welcome! Feel free to fork this repository, make your changes, and submit a pull request.






