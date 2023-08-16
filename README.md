### NWIDART TESTE ###
This is test for studying modules with nwidart
<b>NWiDart documentation: https://docs.laravelmodules.com/v10/introduction </b>
#### 1. Clone the repository
```
git clone https://github.com/andersonaraf/test-nwidart.git
```

#### 2. Install dependencies
```
composer install
```
#### 2.1 Create the .env file
```
cp .env.example .env
```
#### 2.2 Generate the key
```
php artisan key:generate
```
#### 2.3 Create the database
```
php artisan migrate --seed
```

#### 3. Run server
```
php artisan serve
```

### 3.1 Optional to use the sail or docker-compose to raise the container
```
sail up -d
```
or
```
docker-compose up -d
```


