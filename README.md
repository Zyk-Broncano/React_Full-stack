<h1>📚 React + Laravel Full-Stack CRUD Project</h1>

  <p>This is a simple full-stack CRUD (Create, Read, Update, Delete) project created by <b>Zyk Broncano</b> to practice and test the concepts I’ve learned about <b>React.js</b> for the frontend and <b>Laravel (PHP)</b> for the backend.</p>

  <hr>

  <h2>📦 Project Structure</h2>
  <pre>
/React_Full-stack
│
├── reactDB          📡 Laravel Backend (API Server)
│   └── ...          Laravel files (controllers, routes, migrations, models)
│
├── my-react-app     🎨 React Frontend
│   └── ...          React files (components, modals, tables, API services)
│
└── README.md        📄 Project information and instructions
  </pre>

  <hr>

  <h2>📝 Summary</h2>

  <h3>Frontend: my-react-app</h3>
  <ul>
    <li>Built with <b>React.js</b> using <b>Vite</b></li>
    <li>Contains CRUD operations interface</li>
    <li>Communicates with the backend via API requests</li>
    <li>Uses ESLint and modern React tooling</li>
  </ul>

  <h3>Backend: reactDB</h3>
  <ul>
    <li>Built with <b>Laravel (PHP Framework)</b></li>
    <li>Provides RESTful API endpoints for CRUD operations</li>
    <li>Database connection via <b>PHPMyAdmin (XAMPP MySQL)</b></li>
    <li>Includes migrations, controllers, models, and routes for managing data</li>
  </ul>

  <hr>

  <h2>🛠️ Tech Stack</h2>
  <ul>
    <li>🖥️ React.js (Vite)</li>
    <li>⚙️ Laravel 11</li>
    <li>🐘 PHP (via XAMPP)</li>
    <li>📡 Axios (for HTTP requests in React)</li>
    <li>🗃️ MySQL Database (PHPMyAdmin)</li>
  </ul>

  <hr>

  <h2>📖 Purpose</h2>
  <p>This project was created purely for practice to:</p>
  <ul>
    <li>Test my understanding of how React and Laravel work together in a full-stack application</li>
    <li>Practice basic CRUD operations through API endpoints</li>
    <li>Understand routing, state management, and API integration in React</li>
    <li>Build and test RESTful APIs using Laravel</li>
  </ul>

  <hr>

  <h2>📌 How to Run</h2>

  <h3>Backend (Laravel)</h3>
  <ol>
    <li>Open terminal inside <code>reactDB</code></li>
    <li>Run:
      <pre>
composer install
cp .env.example .env
php artisan key:generate
      </pre>
    </li>
    <li>Update your <code>.env</code> file with your local database credentials</li>
    <li>Run database migrations:
      <pre>
php artisan migrate
      </pre>
    </li>
    <li>Start the Laravel development server:
      <pre>
php artisan serve
      </pre>
    </li>
  </ol>

  <h3>Frontend (React)</h3>
  <ol>
    <li>Open terminal inside <code>my-react-app</code></li>
    <li>Run:
      <pre>
npm install
npm run dev
      </pre>
    </li>
    <li>Access the app via the localhost link printed in the terminal</li>
  </ol>

  <hr>
