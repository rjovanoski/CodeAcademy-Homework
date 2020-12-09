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

<main class="recipes-page">
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
                </div>
        </section>

        <section class="bread">
            <h2>Bread Recipes</h2>
                <div class="recipe-container">
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/bread/amy-meegan-Jb2n5VQWiQo-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam minus eum laborum. 
                                        Voluptas, velit repudiandae! Consequuntur quos eum deleniti id atque maxime, praesentium, 
                                        amet laboriosam alias dolorem, cupiditate debitis nulla.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/bread/andrew-wong-59zgPU1aTgY-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Optio, eius, deleniti exercitationem itaque nam dolorem qui asperiores ex incidunt tempore 
                                        fugiat magnam molestiae non facere. Explicabo ipsa sunt repudiandae eaque.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/bread/kate-remmer-RZn4_FzNUCY-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est adipisci perspiciatis 
                                        necessitatibus vero accusamus harum, doloribus, ratione aut quas iure hic dolores 
                                        sequi cum libero odio saepe recusandae illo repudiandae.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                </div>
        </section>

        <section class="burger">
            <h2>Burger Recipes</h2>
                <div class="recipe-container">
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/burger/amirali-mirhashemian-9hIJ4ZLMnZA-unsplash.jpg') }}" alt="">
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
                            <img src="{{ asset('img/burger/jakub-kapusnak-4hgYULBzVEE-unsplash.jpg') }}" alt="">
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

        <section class="meat">
            <h2>Meat Recipes</h2>
                <div class="recipe-container">
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/meat/alex-munsell-auIbTAcSH6E-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, veniam. 
                                        Aliquam consequuntur modi sapiente dicta inventore tenetur sequi illum voluptas 
                                        ipsa cupiditate perferendis recusandae, ratione sunt cum quas aperiam minima.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/meat/emiliano-vittoriosi-OFismyezPnY-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam cumque iste, 
                                        nam laudantium quo architecto ea magnam mollitia atque provident. Dignissimos autem, 
                                        illum id veniam beatae amet voluptas. Dicta, hic.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/meat/mgg-vitchakorn-IiZ2Gqxm5Pg-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem ipsum dolor sit amet.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci doloremque 
                                        consectetur necessitatibus nulla dicta commodi.
                                        Rerum blanditiis quidem ad magni, iste minima cupiditate sunt itaque ab corporis assumenda incidunt facere?
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                </div>
        </section>

        <section class="pasta">
            <h2>Pasta Recipes</h2>
                <div class="recipe-container">
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/pasta/jason-leung-AUAuEgUxg5Q-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis commodi velit rem, 
                                        fugiat ipsam, facere suscipit eos atque perferendis pariatur officia nisi ratione 
                                        et accusantium molestiae. Velit esse illo veniam!
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/pasta/jason-leung-jaImjDc1PaE-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum dolor.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae facere maxime sed vitae!
                                        Quod et eveniet, nemo earum quisquam accusamus veniam. Deleniti veritatis excepturi repellendus,
                                        tempora ut dolore non. Molestias.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                    <div class="recipe-box">
                        <div class="recipe-image">
                            <img src="{{ asset('img/pasta/olayinka-babalola-r01ZopTiEV8-unsplash.jpg') }}" alt="">
                        </div>
                            <div class="recipe-name">
                                <h3>Lorem, ipsum.</h3>
                            </div>
                                <div class="recipe-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis libero maxime similique minima natus 
                                        omnis, hic, doloribus laborum quisquam distinctio quam, accusantium quis provident totam cum reiciendis!
                                        Ducimus, laudantium nostrum.
                                    </p>
                                </div>
                                    <div class="recipe-link">
                                        <a href="">See recipe</a>
                                    </div>
                    </div>
                </div>
        </section>

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
                </div>
        </section>

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
                </div>
        </section>

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
                </div>
        </section>
    </div>
</main>

@endsection