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

<main class="breakfast">
    <div class="container">
        <section class="breakfast">
            <h2>Breakfast Recipes</h2>
                <div class="recipe-container">
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/breakfast/charisse-kenion-Zyx6a0ReB18-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Totam, cumque. Velit accusamus possimus, sequi amet sunt 
                                        mollitia ratione accusantium facere pariatur error temporibus, 
                                        dicta ullam deleniti in, sit magnam nulla?</p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/breakfast/joseph-gonzalez-zcUgjyqEwe8-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem ipsum dolor sit.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Laudantium dolores nobis repellat molestiae ab quisquam qui maxime similique 
                                        non eius corporis molestias nulla aliquid eligendi enim, nostrum, praesentium 
                                        tempora assumenda.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/breakfast/dan-gold-uhCgfivFP6o-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque nobis tempore recusandae! 
                                        A nemo inventore repellat, veritatis fugiat culpa pariatur id enim eius in, voluptates, 
                                        fugit sapiente ipsum rerum dignissimos!
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/breakfast/charisse-kenion-Zyx6a0ReB18-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Totam, cumque. Velit accusamus possimus, sequi amet sunt 
                                        mollitia ratione accusantium facere pariatur error temporibus, 
                                        dicta ullam deleniti in, sit magnam nulla?</p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/breakfast/charisse-kenion-Zyx6a0ReB18-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Totam, cumque. Velit accusamus possimus, sequi amet sunt 
                                        mollitia ratione accusantium facere pariatur error temporibus, 
                                        dicta ullam deleniti in, sit magnam nulla?</p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/breakfast/charisse-kenion-Zyx6a0ReB18-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Totam, cumque. Velit accusamus possimus, sequi amet sunt 
                                        mollitia ratione accusantium facere pariatur error temporibus, 
                                        dicta ullam deleniti in, sit magnam nulla?</p>
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