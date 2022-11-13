# Routes

## Sprint 1

| URL | HTTP Method | Controller | Method | Title | Content | Comment |
|--|--|--|--|--|--|--|
| `/` | `GET` | `MainController` | `homeAction` | Mbook| 5 categories | - |
| `/mentions-legales/` | `GET` | `MainController` | `legalMentionsAction` | Mentions légales | Legal mentions | - |
| `/catalogue/categorie/[id]` | `GET` | `CatalogController` | `categoryAction` | Current category name | Category name and all products from this category | [id] stands for category id |
| `/catalogue/etat/[id]` | `GET` | `CatalogController` | `etatAction` | Current etat name | Etat name and all products from this etat | [id] stands for etat id |
| `/catalogue/language/[id]` | `GET` | `CatalogController` | `languageAction` | Current  language name | Language name and all products from this language | [id] stands for language id |
| `/catalogue/produit/[id]` | `GET` | `CatalogController` | `productAction` | Current product name  | Product name and  all other product details (price, picture, rate, category, brand) | [id] stands for product id |
