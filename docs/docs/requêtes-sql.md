# Requêtes mbook

## Pied de page

<details><summary>Les 5 états pour la liste du footer</summary>

```sql
SELECT *
FROM `etat`
WHERE `footer_order` > 0
ORDER BY `footer_order` 
LIMIT 5
```

</details>

<details><summary>Les 5 langues pour la liste du footer</summary>

```sql
SELECT *
FROM `language`
WHERE `footer_order` > 0
ORDER BY `footer_order` > 0
LIMIT 8
```

</details>

<details><summary>Les 5 categories mises en avant par order d'apparition</summary>

```sql
SELECT *
FROM `category`
ORDER BY `created_at`
LIMIT 5
```

</details>

<details><summary>Les données d'unne catégorie en fonction de son id</summary>

```sql
SELECT *
FROM `category`
WHERE `id` = 1
```

</details>


<details><summary>La liste des produits qui appartiennent à une catégorie</summary>

```sql
SELECT *
FROM `product`
WHERE `category_id` = 5
```

</details>

<details><summary>La liste des produits qui appartiennent à une catégorie avec l'etat de chaque produit</summary>

```sql
SELECT `product`.*,`etat`.`name` AS `etat_name`
FROM `product`
INNER JOIN `etat` ON `product`.`etat_id` = `etat`.`id`
WHERE `category_id` = 6

```

</details>

<details><summary>La liste des informations d'un état en fonction de son id</summary>

```sql
SELECT *
FROM   `etat`
WHERE  `id` = 6

```

</details>

<details><summary>La liste des produits qui sont d'un etat donné </summary>

```sql
SELECT *
FROM   `product`
WHERE  `etat_id` = 6

```

</details>

<details><summary>Les informations d'une langue en fonction de son id</summary>

```sql
SELECT *
FROM   `language`
WHERE  `id` = 6

```

</details>


<details><summary>La liste des produits qui ont un language donné</summary>

```sql
SELECT *
FROM   `product`
WHERE  `etat_id` = 6

```

</details>

<details><summary>La liste des produits qui ont un language donné avec l'etat du produit</summary>

```sql
SELECT `product`.*, `etat`.`name` AS `etat_name`
FROM `product`
INNER JOIN `etat` ON `product`.`etat_id` = `etat`.`id`
WHERE `language_id` = 4

```

</details>

<details><summary>Les données d'un produit à partir de son id</summary>

```sql
SELECT *
FROM   `product`
WHERE  `id` = 4

```

</details>

<details><summary>Les données d'un produit à partir de son id</summary>

```sql
SELECT *
FROM   `product`
WHERE  `id` = 4

```

</details>

<details><summary>Les données d'un produit à partir de son id et le nom de la marque et le nom de la category</summary>

```sql
SELECT `product`.*, `language`.`name` AS `language_name`, `category`.`name` AS `category_name`
FROM   `product`
INNER JOIN `language` ON `product`.`language_id` = `language`.`id`
INNER JOIN `category` ON `product` .`category_id` = `category`.`id`
WHERE  `product`.`id` = 4

```

</details>