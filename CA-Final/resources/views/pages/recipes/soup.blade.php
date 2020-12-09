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

<main class="soup-page">
    <div class="container">
        <section class="soup">
            <h2>Soup Recipes</h2>
                <div class="recipe-container">
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/soup/do-mee-SH8_JmrsQcw-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum temporibus adipisci molestiae 
                                        amet vitae nobis nihil voluptatibus hic, error tempore eum in nostrum quisquam deleniti nemo 
                                        enim veritatis quia minima.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/soup/eric-zhu-a-gPTenlS0U-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus iusto asperiores esse temporibus 
                                        culpa reprehenderit? Accusantium quibusdam aspernatur, architecto cumque cum itaque quam hic facere 
                                        laudantium dicta error fugit? Ratione.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/soup/jade-aucamp-OMcrCX6wDpU-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate placeat quia provident perferendis 
                                        tempore id commodi unde consectetur quisquam harum voluptates rerum nam sint vel non, adipisci 
                                        reprehenderit dolorum quibusdam.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/soup/jade-aucamp-OMcrCX6wDpU-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate placeat quia provident perferendis 
                                        tempore id commodi unde consectetur quisquam harum voluptates rerum nam sint vel non, adipisci 
                                        reprehenderit dolorum quibusdam.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/soup/jade-aucamp-OMcrCX6wDpU-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate placeat quia provident perferendis 
                                        tempore id commodi unde consectetur quisquam harum voluptates rerum nam sint vel non, adipisci 
                                        reprehenderit dolorum quibusdam.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/soup/jade-aucamp-OMcrCX6wDpU-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate placeat quia provident perferendis 
                                        tempore id commodi unde consectetur quisquam harum voluptates rerum nam sint vel non, adipisci 
                                        reprehenderit dolorum quibusdam.
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