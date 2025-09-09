<h1>📚 React + Laravel Full-Stack CRUD Project</h1>

  <p>This is a simple full-stack CRUD (Create, Read, Update, Delete) project to practice and test the concepts I’ve learned about <b>React.js</b> for the frontend and <b>Laravel (PHP)</b> for the backend.</p>

  <hr>


  <h2>📝 Summary</h2>

  <h3>Frontend: my-react-app</h3>
  <ul>
    <li>Built with <b>React.js</b></li>
    <li>Contains CRUD operations interface</li>
    <li>Communicates with the backend via API requests</li>
  </ul>

<h2>📸 Screenshots:</h2>

<p align="center">
  <img src="https://github.com/user-attachments/assets/d3991be1-c399-4c3b-ba11-1d157883ac6e" alt="Dashboard Overview" width="600">
  <br><i>Dashboard: Sample Data. </i></br>
</p>

<p align="center">
  <img src="https://github.com/user-attachments/assets/af1d11ed-0811-48ff-9fc0-512094f779cc" alt="Feature" width="600">
    <br><i>Edit Modal: Can edit data.  </i></br>

</p>

<p align="center">
  <img src="https://github.com/user-attachments/assets/d0192bc8-2c98-4e7f-9c21-f212f0184f32" alt="Branch Selection" width="600">
      <br><i>Database : PHPMydmin</i></br>

</p>

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
