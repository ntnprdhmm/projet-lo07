@extends('template/app')

@section('title')
    Publications Institut Charles Delaunay
@stop

@section('content')
    @include("../include/navbar")
    <div class="container" ng-app="myApp">

        <div class="jumbotron">
            <h1>Publications des chercheurs de l'UTT </h1>
            <p>Bienvenue ! Ici vous trouverez l'ensemble des publications de recherche des enseignants-chercheurs de l'UTT.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Accèder aux publications</a></p>
        </div>

        <div>
            <h1>Présentation de L'ICD</h1>

            <p class="lead">L'nstitut Charles Delaunay est composé de 8 équipes de recherche : </p>

            <table class="table table-striped table-bordered">
                <tr>
                    <td>CREIDD</td>
                    <td>Centre de Recherches et d'Etudes Interdisciplinaires sur le Développement Durable</td>
                </tr>
                <tr>
                    <td>ERA</td>
                    <td>Environnement de Réseaux Autonomes</td>
                </tr>
                <tr>
                    <td>GAMMA3</td>
                    <td>Génération Automatique de Maillage et Méthodes Avancées</td>
                </tr>
                <tr>
                    <td>LASMIS</td>
                    <td>Systèmes Mécaniques et Ingénierie Simultanée</td>
                </tr>
                <tr>
                    <td>LM2S</td>
                    <td>Modélisation et Sûreté des Systèmes</td>
                </tr>
                <tr>
                    <td>LNIO</td>
                    <td>Nanotechnologie et Instrumentation Optique</td>
                </tr>
                <tr>
                    <td>LOSI</td>
                    <td>Optimisation des Systèmes Industriels</td>
                </tr>
                <tr>
                    <td>Tech-CICO</td>
                    <td>Technologies pour la Coopération, l'Interaction et les Connaissances dans les collectifs</td>
                </tr>
            </table>
        </div>

    </div>
@stop