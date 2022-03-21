<?php
    if( (!isset($_GET['article'])) || $_GET['article'] == 1) {
        
        $bg = 'assets/img/post-bg.jpg';
        $color = "green";
        $title = 'Planche de surf';
        $subtitle = 'Comment bien la choisir ?';
        $content = 'Vous commencez à prendre vos premières <b>vagues</b> et souhaitez passer le cap dans la pratique de votre sport préféré ? Sans doute le moment est-il venu de vous offrir votre première planche de surf ! Petit bémol : il existe presqu’autant de modèle que de shapers… Aussi, choisir sa planche de surf peut s’avérer un peu plus compliqué qu’on ne le croit au premier abord.

        Quel shape est fait pour vous ? Quel type de vagues voulez-vous surfer ? Comment va-t-elle se comporter à la rame ? Quid du poids et de la <a href="#">taille</a> ?

        Tous ces éléments – vous l’aurez devinez – et bien d’autres encore, vont être déterminant pour votre montée en niveau. Dans cet article, on vous livre tous les secrets pour choisir la planche de surf en adéquation avec votre niveau et vos objectifs !

        <style>
            .test {
                color: ' . $color . ';
            }
        </style>

        1. Pourquoi choisir sa planche de surf ?
        2. Quels sont les différents types de planche de surf ? 
        3. Comment choisir sa planche de surf ?
        4. Où acheter sa <span class="test">planche de surf</span> ?';
    }

    else if($_GET['article'] == 2) {

        $bg = 'assets/img/post-bg.jpg';
        $color = "green";
        $title = 'Planche de surf';
        $subtitle = 'Comment bien la choisir ?';
        $content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, culpa facere. Praesentium aliquam, ex dolores quos voluptatem nemo doloremque aspernatur incidunt quis atque ab suscipit? Voluptates laudantium sapiente numquam ab.';
    }

    else if($_GET['article'] == 3) {

        $bg = 'assets/img/post-bg.jpg';
        $color = "green";
        $title = 'Planche de Lorem ipsium';
        $subtitle = 'Comment bien choisir du Lorem Ipsium ?';
        $content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, culpa facere. Praesentium aliquam, ex dolores quos voluptatem nemo doloremque aspernatur incidunt quis atque ab suscipit? Voluptates laudantium sapiente numquam ab. Beau Lorem Ipsium';
    }

    else {

        $bg = 'assets/img/post-bg.jpg';
        $color = "green";
        $title = 'Erreur 404';
        $subtitle = "il y'a pas d'article";
        $content = 'VIDE';
    }