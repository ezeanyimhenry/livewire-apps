# Simple Livewire Apps for Beginners

Welcome to the Simple Livewire Apps for Beginners repository! This collection of applications is designed to help beginners learn and understand the basics of Livewire, a full-stack framework for Laravel that makes building dynamic interfaces simple and enjoyable.

## Table of Contents

- [Introduction](#introduction)
- [Installation](#installation)
- [Available Applications](#available-applications)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

Livewire simplifies the process of building modern, reactive web applications using Laravel. Each app in this repository demonstrates a fundamental concept or feature of Livewire, providing practical examples to help beginners grasp the framework's power and flexibility.

## Installation

To get started with these applications, follow these steps:

1. **Clone the repository:**
    ```sh
    git clone https://github.com/ezeanyimhenry/livewire-apps.git
    cd livewire-apps
    ```

2. **Install dependencies:**
    ```sh
    composer install
    npm install && npm run dev
    ```

3. **Set up the environment:**
    Copy the `.env.example` file to `.env` and configure your database settings.
    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

4. **Run database migrations with seed:**
    ```sh
    php artisan migrate --seed
    ```

5. **Serve the application:**
    ```sh
    php artisan serve
    ```

## Available Applications

### 1. Counter App

A simple counter app that allows you to increment and decrement a counter.

#### Features:
- Increment counter
- Decrement counter

### 2. Todo List

A simple todo list application that allows you to add, update, and delete tasks.

#### Features:
- Add new tasks
- Mark tasks as completed
- Delete tasks

### 3. Calculator

A basic calculator that performs addition, subtraction, multiplication, and division.

#### Features:
- Basic arithmetic operations

### 4. Cascading Dropdown

A basic select dropdown for continents, countries, and states.

#### Features:
- Select a continent and see countries in that continent
- Select a country and see states in that country
- Seeding the database with continent, countries, and states.

## Usage

Navigate to the specific application you want to explore:

- **Counter App:** [http://localhost:8000/counter](http://localhost:8000/counter)
- **Todo List:** [http://localhost:8000/todo](http://localhost:8000/todo)
- **Calculator:** [http://localhost:8000/calculator](http://localhost:8000/calculator)
- **Cascading Dropdown:** [http://localhost:8000/cascading-dropdown](http://localhost:8000/cascading-dropdown)

Each application directory contains a `README.md` file with more detailed instructions on how to use and understand the specific app.

## Contributing

Contributions are welcome! If you have suggestions for improvements or want to add new features, please open an issue or submit a pull request.

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature-name`).
3. Make your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature/your-feature-name`).
6. Open a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.