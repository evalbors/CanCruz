@extends('templates.basic-layout')

@section('content')

<main>

            <section>
                <div class="h2texto">
                    <h2>La Masía</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>
                </div>
            </section>

            <section class="img-text-intro">
                <img src="https://canplans.files.wordpress.com/2019/12/img_4506_lowres.jpg?w=438&h=292&zoom=2" alt="Can Planes house">
                <div>
                    <p>El projecte de recuperació de la Masia de Can Plans 
                        i el seu entorn s’ha fet amb l’antic principi de la masia, 
                        és a dir, amb  l’autogestió dels recursos propis i dels 
                        voltants. Però també tal com som ara al segle XXI: en versió 
                        “5.0”. aprofitant les noves tecnologies sense intervenir 
                        en la construcció original i preservant el medi. Respectant-los 
                        i  assegurant-ne la conservació, tot amb l’objectiu de garantir 
                        la millor convivència amb els seus habitants i els seus hostes.

                    </p>
                </div>
            </section>

            <section class="quote-text">
                <h3>Reconstrución de la masía</h3>
                <p>Totes les estances i actuacions re-constructives a l’edifici 
                    s’han fet amb materials de l’època: pedra, calç, bigues de fusta, 
                    terres hidràulics, entre d’altres. Elements recuperats principalment 
                    d’enderrocs i de la pedrera propera de pedra vermella del Figaró. 
                    Tractats amb vernissos i pintures a l’aigua, ecològics, 
                    amb absència de coles fenòliques i altres agents químics agressius. 
                    Tot per tal d’assolir una atmosfera el menys contaminada possible.</p>
            </section>


            <section class="gallery">  
                <div class="container">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                      </ol>
                  
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner">
                        <div class="item active">
                          <img src="https://canplans.files.wordpress.com/2015/12/mobil-fede-1753.jpg?w=1280" alt="La masía de Can Plans">
                        </div>
                  
                        <div class="item">
                          <img src="https://canplans.files.wordpress.com/2015/12/20150428_1450421.jpg?w=1280" alt="La masía de Can Plans">
                        </div>
                      
                        <div class="item">
                          <img src="https://canplans.files.wordpress.com/2018/09/img_20180213_095212.jpg?w=1280"  alt="La masía de Can Plans">
                        </div>
                      </div>
                  
                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </section>

            <section>
                <div class="img-text-right">
                    <img
                        src="https://canplans.files.wordpress.com/2019/06/img_4494_lowres.jpg?w=1400&h="
                        alt="house inside"/>
                    <div class="text-square-half">
                        <h3>
                            Proyecto
                        </h3>
                        <p>
                            El projecte de recuperació de la Masia de Can Plans 
                            i el seu entorn s’ha fet amb l’antic principi de la masia, 
                            és a dir, amb  l’autogestió dels recursos propis i dels 
                            voltants. Però també tal com som ara al segle XXI: 
                            en versió “5.0”. aprofitant les noves tecnologies 
                            sense intervenir en la construcció original i preservant el medi. 
                            Respectant-los i  assegurant-ne la conservació, tot amb 
                            l’objectiu de garantir la millor convivència amb els seus 
                            habitants i els seus hostes
                        </p>
                    </div>
                </div>
                <div class="img-text-left">

                    <img src="https://canplans.files.wordpress.com/2019/06/img_4435_lowres.jpg?w=867&h=&zoom=2"
                    alt="house inside">

                    <div class="text-square-half">
                        <h3>
                            Reconstrucción
                        </h3>
                        <p>
                            Totes les estances i actuacions re-constructives a l’edifici 
                            s’han fet amb materials de l’època: pedra, calç, bigues de fusta, 
                            terres hidràulics, entre d’altres. Elements recuperats principalment 
                            d’enderrocs i de la pedrera propera de pedra vermella del Figaró. 
                            Tractats amb vernissos i pintures a l’aigua, ecològics, 
                            amb absència de coles fenòliques i altres agents químics agressius. 
                            Tot per tal d’assolir una atmosfera el menys contaminada possible.
                        </p>

                    </div>
                </div>
            </section>

            <section class="subtitle-text-2col">
                <h3>Lorem ipsum amet, consectetur adipiscing elit.</h3>
                <div class="text-2col">
                    <div class="col">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec gravida malesuada lorem id porta. Nam volutpat ligula elementum arcu blandit placerat.
                            Duis ac neque eu ante elementum dictum eu sed ante. Pellentesque sodales po.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec gravida malesuada lorem id porta. Nam volutpat ligula elementum arcu blandit placerat. Duis ac neque eu ante elementum dictum eu sed ante. Pellentesque sodales po.</p>
                    </div>
                    <div class="col"> 
                        <p class="col">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec gravida malesuada lorem id porta.
                            Nam volutpat ligula elementum arcu blandit placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Donec gravida malesuada lorem id porta. Nam volutpat ligula elementum arcu blandit placerat.
                            Duis ac neque eu ante elementum dictum eu sed ante. Pellentesque sodales po.
                        </p>
                    </div>
                </div>
            </section>



        </main>

@endsection
