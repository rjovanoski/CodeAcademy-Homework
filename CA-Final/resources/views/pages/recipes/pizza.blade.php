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

<main class="pizza">
    <div class="container">
        <section class="pizza">
            <h2>Pizza Recipes</h2>
                <div class="recipe-container">
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/pizza/alan-hardman-SU1LFoeEUkk-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem ipsum dolor sit.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus rerum ratione reiciendis 
                                        inventore placeat eligendi perferendis aperiam eaque earum natus eveniet sequi assumenda maiores 
                                        quod esse cupiditate magnam, veniam doloribus.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/pizza/amber-engle-lHUdfk5WGXc-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit sequi dignissimos obcaecati a 
                                        molestias vel consequuntur earum? Totam exercitationem odio commodi sapiente asperiores. Voluptate 
                                        dolor sapiente ea ipsa magnam corrupti?
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/pizza/louis-hansel-shotsoflouis-cC0_UO1Obg4-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus fuga aliquam culpa sunt, illo ullam!
                                        Voluptas, cum asperiores. Error placeat atque dolores quae sequi officia explicabo nemo nam, libero sit?
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/pizza/louis-hansel-shotsoflouis-cC0_UO1Obg4-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus fuga aliquam culpa sunt, illo ullam!
                                        Voluptas, cum asperiores. Error placeat atque dolores quae sequi officia explicabo nemo nam, libero sit?
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/pizza/louis-hansel-shotsoflouis-cC0_UO1Obg4-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus fuga aliquam culpa sunt, illo ullam!
                                        Voluptas, cum asperiores. Error placeat atque dolores quae sequi officia explicabo nemo nam, libero sit?
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/pizza/louis-hansel-shotsoflouis-cC0_UO1Obg4-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus fuga aliquam culpa sunt, illo ullam!
                                        Voluptas, cum asperiores. Error placeat atque dolores quae sequi officia explicabo nemo nam, libero sit?
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