@extends('layouts.master')

@section('content')

<div class="hero">
    <div class="container">
        <div class="main-heading">
            <h1 class="title">Title</h1>
            <h2 class="recipes">Recipes</h2>
        </div>
    </div>
</div>

<main class="vegan">
    <div class="container">
        <section class="vegan">
            <h2>Burger Recipes</h2>
                <div class="recipe-container">
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/vegan/brooke-lark-oaz0raysASk-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                        Dignissimos ab quos, est recusandae, quisquam delectus similique cumque quo vitae quis maiores 
                                        debitis eius odio laborum et excepturi veniam adipisci possimus.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/vegan/deryn-macey-kPLccIMtS8E-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem ipsum dolor sit amet.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis fuga sunt nam voluptatem, 
                                        dignissimos quaerat molestiae culpa officia odio adipisci, sint exercitationem repellat modi 
                                        ab qui ratione nisi cumque dolor.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/vegan/jannis-brandt-8manzosDSGM-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, libero? Hic consequuntur, 
                                        facilis voluptatum, deleniti consequatur, voluptas dolores dolore facere praesentium nisi 
                                        soluta laboriosam accusamus enim a. Illum, iusto natus.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/vegan/monika-grabkowska-N-xhCO5gY7s-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, libero? Hic consequuntur, 
                                        facilis voluptatum, deleniti consequatur, voluptas dolores dolore facere praesentium nisi 
                                        soluta laboriosam accusamus enim a. Illum, iusto natus.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/burger/nicolas-perondi-ghcdPQEImhY-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, libero? Hic consequuntur, 
                                        facilis voluptatum, deleniti consequatur, voluptas dolores dolore facere praesentium nisi 
                                        soluta laboriosam accusamus enim a. Illum, iusto natus.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/burger/nicolas-perondi-ghcdPQEImhY-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, libero? Hic consequuntur, 
                                        facilis voluptatum, deleniti consequatur, voluptas dolores dolore facere praesentium nisi 
                                        soluta laboriosam accusamus enim a. Illum, iusto natus.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                </div>
        </section>
    </div>
</main>

@endsection