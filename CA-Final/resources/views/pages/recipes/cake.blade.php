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

<main class="cake">
    <div class="container">
        <section class="cake">
            <h2>Cake Recipes</h2>
                <div class="recipe-container">
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/cake/869347.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, perferendis 
                                        illum animi repellat laboriosam, non nam ipsum quaerat blanditiis dolorem ea maxime in 
                                        numquam ratione magni aliquam minus ex repudiandae.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/cake/jacob-schwartz-enVg_Vtsw1c-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt fugiat veritatis reprehenderit 
                                        accusamus iste. Velit eos, debitis dolores quo aut quam, asperiores quas hic consequuntur accusantium 
                                        veritatis a incidunt nemo.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/cake/mike-meeks-zk-fclJdGas-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem ipsum dolor sit.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi nemo, iure enim tenetur illo voluptatum 
                                        alias quaerat quia ducimus iste! Adipisci corrupti placeat laborum asperiores architecto! In, laboriosam odio?
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/cake/mike-meeks-zk-fclJdGas-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem ipsum dolor sit.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi nemo, iure enim tenetur illo voluptatum 
                                        alias quaerat quia ducimus iste! Adipisci corrupti placeat laborum asperiores architecto! In, laboriosam odio?
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/cake/mike-meeks-zk-fclJdGas-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem ipsum dolor sit.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi nemo, iure enim tenetur illo voluptatum 
                                        alias quaerat quia ducimus iste! Adipisci corrupti placeat laborum asperiores architecto! In, laboriosam odio?
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/cake/mike-meeks-zk-fclJdGas-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem ipsum dolor sit.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit animi nemo, iure enim tenetur illo voluptatum 
                                        alias quaerat quia ducimus iste! Adipisci corrupti placeat laborum asperiores architecto! In, laboriosam odio?
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