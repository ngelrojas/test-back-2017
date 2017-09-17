### Angel Rojas

Aplicação foi feita em Laravel 5.5 
- app WealthLife dentro do arquivo WealthLife

### Database 

- criar banco de dados wealthlifedb
- file .env
    - DB_DATABASE=wealthlifedb
    - DB_USERNAME=sua user do mysql
    - DB_PASSWORD=sua senha do mysql

- executar:
  - php artisan migrate
  - php artisan db:seed

### Email

- configurei o invio de email com mailtrap
- file .env: 
    - MAIL_DRIVER=smtp
    - MAIL_HOST=smtp.mailtrap.io
    - MAIL_PORT=2525
    - MAIL_USERNAME=sua conta user mailtrap
    - MAIL_PASSWORD=sua conta senha mailtrap
    - MAIL_ENCRYPTION=null

- configurei com markdown do Laravel 5.5
- O email admin enviado como exemplo admin@wealthlife.com

### Api Doctors

https://swaggerhub.com/apis/rednodes/wealthlifeTest/1.0.0 
