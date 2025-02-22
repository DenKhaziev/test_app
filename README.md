в бд 4 таблицы:
1. sales 
2. orders
3. stocks
4. incomes

путем перехода по каждой ссылке - например /sales происходит миграция в таблицу
по API маршрутам - например /api/sales получаем JSON с пагинацией, передавая параметр page выбираем страницу

DB_CONNECTION= mysql
DB_DATABASE=laravel_project
DB_USERNAME=root
DB_PASSWORD= root
