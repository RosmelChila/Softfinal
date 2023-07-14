TRABAJO FINAL PROYECTOS DE SOFTWARE 2 (REVISION DE TAREAS)

INTEGRANTES
 - Rosmel Ronaldo Chila Vilca
 - Marcos German Cari Laura
 - Erick Galindo Leandres
 - Alex Pedro
 - Benito
 - Alvaro

INSTALACION
- Clona el repositorio en tu máquina local
  ```
  git clone https://github.com/RosmelChila/Softfinal.git
  ```

- Instala las dependencias composer & npm
  ```
  composer install
  ```
  ```
  npm install
  ```

- Crea un nuevo archivo .env
  ```
  cp .env.example .env
  ```
- Copiar al final del archivo .env

  GOOGLE_CLIENT_ID=175051528217-a5qjq7oa5738jficgt8hc4pt8l8le4u6.apps.googleusercontent.com
  GOOGLE_CLIENT_SECRET=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

  FACEBOOK_CLIENT_ID=3586905251592825
  FACEBOOK_CLIENT_SECRET=c8a2f799f51919b4299d87d3c28e2767
  FACEBOOK_REDIRECT_URI=https://127.0.0.1:8000/auth/facebook/callback

- Genera una nueva clave de aplicación
  ```
  php artisan key:generate
  ```

- Migracion
  ```
  php artisan migrate
  ```

- Inicializacion
  ```
  php artisan serve
  ```
  ```
  npm run dev
  ```

LOGIN 
- administrador
- docente
- estudiante



