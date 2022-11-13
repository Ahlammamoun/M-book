# Dictionnaire de données

## Produits (`product`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de notre produit|
|name|VARCHAR(64)|NOT NULL|Le nom du produit|
|description|TEXT|NULL|La description du produit|
|picture|VARCHAR(128)|NULL|L'URL de l'image du produit|
|price|DECIMAL(10,2)|NOT NULL, DEFAULT 0|Le prix du produit|
|rate|TINYINT(1)|NOT NULL, DEFAULT 0|L'avis sur le produit, de 1 à 5|
|status|TINYINT(1)|NOT NULL, DEFAULT 1|Le statut du produit (1=dispo, 2=pas dispo)|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du produit|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du produit|
|category|entity|NULL|La catégorie (autre entité) du produit|
|language|entity|NOT NULL|La langue (autre entité) du produit|
|etat|entity|NOT NULL|L'état' (autre entité) du produit|

## Catégories (`category`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la catégorie|
|name|VARCHAR(64)|NOT NULL|Le nom de la catégorie|
|subtitle|VARCHAR(64)|NULL|Le sous-titre/slogan de la catégorie|
|picture|VARCHAR(128)|NULL|L'URL de l'image de la catégorie (utilisée en home, par exemple)|
|home_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage de la catégorie sur la home (0=pas affichée en home)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création de la catégorie|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la catégorie|

## Language (`language`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la langue|
|name|VARCHAR(64)|NOT NULL|Le nom de la langue|
|footer_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage de la langue dans le footer (0=pas affichée dans le footer)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création de la langue|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la langue|

## Etat du produit (`etat`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|name|VARCHAR(64)|NOT NULL|Le nom du type|
|footer_order|TINYINT(1)|NOT NULL, DEFAULT 0|L'ordre d'affichage du type dans le footer (0=pas affichée dans le footer)|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création de l'etat|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de l'etat|