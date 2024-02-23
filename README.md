**Fiche Technique des Attributs et Relations des Entités**

---

### Entité: OurOrder

#### Attributs:

1. **idO (idO)**:
   - Type: integer
   - Description: Identifiant unique de la commande.
   
2. **stock (stock)**:
   - Type: Stock
   - Description: Référence vers l'entité Stock correspondant au produit de la commande.

3. **quantityO (quantityO)**:
   - Type: integer
   - Description: Quantité commandée du produit.

4. **statusO (statusO)**:
   - Type: string
   - Description: Statut de la commande (en attente, en cours, terminée, etc.).

5. **totalO (totalO)**:
   - Type: float
   - Description: Total de la commande calculé en multipliant la quantité commandée par le prix de vente du produit.

#### Relations:

- **ManyToOne Relation avec Stock (stock)**:
  - Type: ManyToOne
  - Description: Une commande est associée à un produit de l'inventaire (Stock).
  - Attributs: 
    - **id_st (id_st)**: Clé étrangère référençant l'identifiant du produit de l'inventaire (Stock).

---

### Entité: Stock

#### Attributs:

1. **idSt (idSt)**:
   - Type: integer
   - Description: Identifiant unique du produit de l'inventaire.

2. **name_st (name_st)**:
   - Type: string
   - Description: Nom du produit de l'inventaire.

3. **quantity_st (quantity_st)**:
   - Type: integer
   - Description: Quantité disponible du produit dans l'inventaire.

4. **image_st (image_st)**:
   - Type: string
   - Description: Chemin vers l'image du produit dans l'inventaire.

5. **date_d_ajout_st (date_d_ajout_st)**:
   - Type: datetime
   - Description: Date d'ajout du produit dans l'inventaire.

6. **buying_price (buying_price)**:
   - Type: float
   - Description: Prix d'achat du produit.

7. **selling_price (selling_price)**:
   - Type: float
   - Description: Prix de vente du produit.

#### Relations:

- **OneToMany Relation avec OurOrder (ourOrders)**:
  - Type: OneToMany
  - Description: Un produit de l'inventaire peut être associé à plusieurs commandes.
  - Attributs: 
    - **id_st (id_st)**: Clé étrangère référençant l'identifiant du produit de l'inventaire (Stock) dans la table des commandes (OurOrder).

- **ManyToOne Relation avec StoreHouse (storehouse)**:
  - Type: ManyToOne
  - Description: Un produit de l'inventaire est associé à un entrepôt (StoreHouse).
  - Attributs: 
    - **id_sh (id_sh)**: Clé étrangère référençant l'identifiant de l'entrepôt (StoreHouse).

---

### Entité: StoreHouse

#### Attributs:

1. **idSh (idSh)**:
   - Type: integer
   - Description: Identifiant unique de l'entrepôt.

2. **nameSh (nameSh)**:
   - Type: string
   - Description: Nom de l'entrepôt.

3. **locationSh (locationSh)**:
   - Type: string
   - Description: Emplacement de l'entrepôt.

4. **capacity (capacity)**:
   - Type: integer
   - Description: Capacité maximale de stockage de l'entrepôt.

5. **quantitySum (quantitySum)**:
   - Type: integer
   - Description: Somme totale des quantités de tous les produits dans l'entrepôt.

6. **isFull (isFull)**:
   - Type: boolean
   - Description: Indique si l'entrepôt est plein en fonction de sa capacité.

#### Relations:

- **OneToMany Relation avec Stock (stocks)**:
  - Type: OneToMany
  - Description: Un entrepôt peut contenir plusieurs produits de l'inventaire.
  - Attributs: 
    - **id_sh (id_sh)**: Clé étrangère référençant l'identifiant de l'entrepôt (StoreHouse) dans la table des produits de l'inventaire (Stock).

---

Ceci est une fiche technique décrivant les attributs et les relations des entités OurOrder, Stock et StoreHouse dans votre application Symfony. Les entités sont liées entre elles par des relations ManyToOne et OneToMany selon les besoins fonctionnels de votre application.