# moneyValue
Project 3

##Documentation de l’API
Rédigez de manière succincte :
GET|HEAD        api/convert/pair_id={id}&convert_value={value} 
Récupère la valeur depuis l’URL, converti selon l’id de la pair et chaque fois que cette URL est utilisée cela ajoute +1 au décompte
GET|HEAD        api/currencies 
Récupère les données de toutes les devises
exemple de données :
{
    "status": true,
    "message": "ok",
    "currency": [{
        "id": 1,
        "currency_name": "Argentine Peso",
        "currency_code": "ARS",
        "currency_symbol": "$",
        "created_at": "2022-08-26T19:43:47.000000Z",
        "updated_at": "2022-08-26T19:43:47.000000Z"
    }]
}
POST            api/currencies   
Ajoute une nouvelle devise
donnée à envoyer :
{
"currency_name": "Argentine Peso",
"currency_code": "ARS",
 "currency_symbol": "$",
}
GET|HEAD        api/currencies/{id} 
Récupère les données d’une devise 
exemple de données :
{
    "status": true,
    "message": "ok",
    "currency": {
        "id": 1,
        "currency_name": "Argentine Peso",
        "currency_code": "ARS",
        "currency_symbol": "$",
        "created_at": "2022-08-26T19:43:47.000000Z",
        "updated_at": "2022-08-26T19:43:47.000000Z"
    }
}
PUT|PATCH       api/currencies/{id}
Met à jour une devise selon id
{
"currency_name": "Argentine Peso",
"currency_code": "ARS",
 "currency_symbol": "$",
}
DELETE          api/currencies/{id} 
Supprime une devise selon id

GET|HEAD        api/pairs   
Récupère les données de toutes les paires
exemple de données :
{
"status": true,
    "pair": [
        {
            "id": 1,
            "currency_id_a": 1,
            "currency_id_b": 8,
            "exchange_rate_a_to_b": 2,
            "exchange_rate_b_to_a": 5,
            "count": 10,
            "created_at": "2022-08-26T19:43:47.000000Z",
            "updated_at": "2022-08-27T08:43:22.000000Z"
        },
    ]
}

POST            api/pairs  
Ajoute une nouvelle paire 
donnée à envoyer :
{
"currency_id_a": 1,
       "currency_id_b": 8,
          "exchange_rate_a_to_b": 2,
         "exchange_rate_b_to_a": 5,
}

GET|HEAD        api/pairs/{id}   
Récupère les données d’une paire
exemple de données :
{
"status": true,
    "pair": {
            "id": 1,
            "currency_id_a": 1,
            "currency_id_b": 8,
            "exchange_rate_a_to_b": 2,
            "exchange_rate_b_to_a": 5,
            "count": 10,
            "created_at": "2022-08-26T19:43:47.000000Z",
            "updated_at": "2022-08-27T08:43:22.000000Z"
        }
}
PUT|PATCH       api/pairs/{id}  
Met à jour une paire selon id
donnée à envoyer :
{
"currency_id_a": 1,
       "currency_id_b": 8,
          "exchange_rate_a_to_b": 2,
         "exchange_rate_b_to_a": 5,
}
DELETE          api/pairs/{id} 
Supprime une paire selon id


## Informations supplémentaires 

Pour la partie admin :

npm install
npm run dev

    Pour la partie api :
copier le fichier .env exemple le renommer .env 
vérifier les codes d’accès à la base de donnée modifier si nécessaire 
vérifier si la base de donnée existe ou créer une nouvelle base de donnée et modifier son nom dans le fichier .env
composer install
php artisan serve

information de connexion :
name :  Admin,             
email : admin@admin.fr
password : admin,

