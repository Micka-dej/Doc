# Doc

# BEM

* block
* Element `__`
* modifiers `--`


```html
<ul class="heaverNav headerNav--xmas">
  <li class="headerNav_item">
  <a href="/about" class="headerNav_itemLink">A propos</a>
  </li>

  <li class="headerNav__item">
  <a href="/home" class="headerNav_itemLink--active">Accueil</a>
  </li>

  <li class="headerNav_item">
  <a href="/account" class="headerNav_itemLink headerNav_itemLink--isDisabled">Mon compte</a>
  </li>

</ul>

```scss

  .headerNav {
        display:flex;
        justify-content:space-between;

  --xmas {
        background:red;
    }

  __item {
        list-style:none;
}

  __itemLink {
      text-decoration:none;
}

  --isDisabled {
      color:grey;
  }

  --isActive {
      color:green;
  }
}


# PSEUDO ATTRIBUT === after @ before

les pseudos attributes before et after sont essentiellement utilisées pour
ajouter des élements a votre DOM pour décorer sans que cela est un impact sur le référencemment ou votre HTML.


```
<section class="cover">
  <h2 class="cover_title">Présentation</h2>

</section>

### ATTENTION ###
* IL EST OBLIGATOIRE D'AVOIR UN CONTENT ''; AFIN QUE VOS AFTER/BEFORE SAFFICHENTS.
* VOUS POUVEZ LEURS DONNEZ UNE TAILLE, UNE POSITION (ABSOLUTE PAR RAPPORT A SON PARENT)
* ESSENTIELLEMENT UTILISE POUR LA DECORATION.

```html
.cover {
  __title {
      font-size:24px;
      color:#bbb;
      text-align:center;
      position:relative;
    @::before,
    @::after {
      content :'';
      position:absolute;
      top :0;
      display:block;
      width:50px;
      height:50px;
      background:green;
    }

    @:before {
      left:0;
    }

    @::after {
      right:0;
    }
  }
```

## Unité de mesure ##


### REM
L'unité de mesure REM est basée sur la taille de l'element racine du HTMl.
Par défaut , la taille du <html> est de 16px, ce qui veut dire que 1rem = 16px.
Pour éviter de devoir faire des calculs afin de respecter les tailles relatives à votre maquette,
vous pouvez ré-écrire cette font-size  afin que 1 rem = 10px

Les proportions et tailles vont se scaler en fonction du zoom sur la page. ( chose impossible )


```css
html {
  font-size:62.5%;
}

.mainTitle {
  font-size:2.4 rem;
}

.cover {
  width: 32rem;
}
```


### EM
LE 'EM' à contrario du 'REM' se base quant à lui sur la taille de son parent direct. ( pas son grand-parent).

### %

Les valeurs attribuées de cette façon permettent d'avoir une valeur proportionnelle à la taille de la fenêtre du navigateur ou à l'élément parent de celui pour lequel vous utilisez cette unité. Si vous utilisez des pourcentages dans une propriété liée à la taille des caractères, la valeur obtenue est proportionnelle à la taille de la police par défaut (1"em").
Lorsque vous définissez une valeur en %, vous devez utiliser un nombre entier.


### FR

La première colonne dont la taille est en pixels ne bouge pas. Seules les deux autres colonnes en fr se redimensionnement dynamiquement. Si on devait effectuer ce réglage en %, ce serait beaucoup plus complexe car le pourcentage serait relatif à la largeur totale du parent.

### VH 
Pourcentage de hauteur du viewport (le viewport est égal à 100 vh).
Le viewport représente la partie visible au sein de la fenêtre du navigateur.

### LES DISPLAY :

**display: none**
l'élement est supprimé ( invisible )

**display: inline**
Afficher un élément comme un inline élément (comme ```<span>```).
Les propriétés height et width n'auront aucun effet sur ce display.

**display: block**
Afficher un élément comme un block élément (comme ```<p>```)

### FONT-FACE

@font-face
- @import (URL)
- ```<link>``` (lien)

# GRID LAYOUT

Le concept général de Grid Layout (ou "positionnement en grille") est de diviser virtuellement l'espace en zones majeures dans une page ou une application. Concrètement et schématiquement, il s'agira de découper en lignes et en colonnes comme nous le ferions pour un tableau de mise en page.

On y trouve d'ailleurs de nombreuses références d'affichage "tabulaire" avec lignes et colonnes, rowspan et colspan. En cela, ce schéma de positionnement est très similaire aux tableaux HTML ou aux rendus de type display: table, display: table-cell et autre display: table-row.

```html
.container {
  display: grid;

  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-template-rows: 100px 200px 100px;

  grid-template-areas:
        "head head2 . side"
        "main main2 . side"
        "footer footer footer footer";
}
```

# Types de positionnement

Un élément positionné est un élément dont la propriété de position calculée est ###relative, ###absolute, ###fixed ou ###sticky.
Un élément positionné de façon relative est un élément dont la propriété de position calculée est relative. Dans ce cas, les propriétés top ou bottom indiquent le décalage vertical à appliquer et left ou right indiquent le décalage horizontal.

Un élément positionné de façon ###absolue est un élément dont la propriété de position calculée est absolute ou fixed. Dans ce cas, les propriétés top, bottom, right et left indiquent les distances entre les bords de l'élément et les bords du bloc englobant (c'est-à-dire l'ancêtre par rapport auquel l'élément est positionné). Si l'élément possède des marges, elles sont ajoutées aux décalages.

Un élément positionné en ###adhérence est un élément dont la propriété de position calculée vaut sticky. Un tel élément se comporte comme un élément positionné de façon relative jusqu'à ce que son bloc englobant dépasse un seuil donné (par exemple fourni par la valeur de top) au sein du conteneur puis il se comporte ensuite comme un élément fixe jusqu'à atteindre le bord opposé du bloc englobant.
