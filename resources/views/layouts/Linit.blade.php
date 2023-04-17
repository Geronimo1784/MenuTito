<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('css/Main.css')}}" />    
        <link rel="stylesheet" type="text/css" href="{{asset('css/Tables.css')}}" />    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="{{asset('Js/slider.js')}}"></script>
        <script src={{asset('Js/jquery.min.js')}}></script>
        <script src="{{asset('Js/Aspire.js')}}"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" href="{{asset('Imgs/menu/Logo_icon.png')}}"> 


        <title> ..:: Menú Dígital Titofood.com ::.. </title>
    </head>
    <body>

        <div id="Show-Modal-l" style="display: none; width: 100%; height: 100vh; background-color: #00000093; position: fixed; top: 0px; z-index: 200;"></div>
        <div id="Show-Modal-r" class="dsmr" style="display: none; width: 100%; height: 100vh; background-color: #00000093; position: fixed; top: 0px; z-index: 200;"></div>
        <div class="SMC" style="display: none; width: 100%; height: 100vh; background-color: #00000093; position: fixed; top: 0px; z-index: 200;"></div>
        <div class="SMSP" style="display: none; width: 100%; height: 100vh; background-color: #00000093; position: fixed; top: 0px; z-index: 1005;"></div>


        <style>

            circle {
            fill: #25d366;
            }
            path {
            fill: #fff;
            }
            .Box-What{
                width: 80px;
                height: 80px;
                position: fixed;
                z-index: 1001;
                right: 0%;
                top: calc(90% - 20px);
                margin-right: 10px;
                margin-bottom: 10px;
            }

        </style>

        <a href="https://wa.me/+573001452277?text=Hola Titofood, Quiero Pedir">
            <div class="Box-What">
                <svg width="80" height="80" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                <!-- Created with SVG-edit - https://github.com/SVG-Edit/svgedit-->
                <g class="layer">
                <title>Layer 1</title>
                <circle cx="40" cy="40" fill="#fff" id="svg_1" r="38" stroke="#000000" stroke-width="0"/>
                <path d="m57.81072,21.975c-4.48928,-4.5 -10.46786,-6.975 -16.82142,-6.975c-13.11429,0 -23.78571,10.67143 -23.78571,23.78571c0,4.18928 1.09286,8.28215 3.17143,11.89286l-3.375,12.32142l12.61072,-3.31072c3.47143,1.89642 7.38215,2.89286 11.36786,2.89286l0.01072,0c13.10358,0 24.01072,-10.67143 24.01072,-23.78571c0,-6.35357 -2.7,-12.32142 -7.18928,-16.82142l-0.00001,-0.00001l-0.00001,0l-0.00002,0.00001zm-16.82142,36.6c-3.55714,0 -7.03928,-0.95357 -10.07143,-2.75357l-0.71785,-0.42857l-7.47858,1.96072l1.99286,-7.29642l-0.47143,-0.75c-1.98215,-3.15 -3.02142,-6.78215 -3.02142,-10.52142c0,-10.89642 8.87143,-19.76786 19.77858,-19.76786c5.28215,0 10.24286,2.05714 13.97143,5.79642c3.72857,3.73928 6.02142,8.7 6.01072,13.98215c0,10.90714 -9.09642,19.77858 -19.99286,19.77858l0,-0.00002l-0.00001,0l-0.00001,-0.00001zm10.84286,-14.80714c-0.58928,-0.3 -3.51429,-1.73572 -4.06072,-1.92857c-0.54643,-0.20358 -0.94286,-0.3 -1.33928,0.3c-0.39642,0.6 -1.53214,1.92857 -1.88571,2.33572c-0.34286,0.39642 -0.69642,0.45 -1.28571,0.15c-3.49286,-1.74643 -5.78571,-3.11785 -8.08928,-7.07143c-0.61072,-1.05 0.61072,-0.975 1.74643,-3.24643c0.19286,-0.39642 0.09642,-0.73928 -0.05357,-1.03928c-0.15,-0.3 -1.33928,-3.225 -1.83214,-4.41429c-0.48215,-1.15714 -0.975,-0.99642 -1.33928,-1.01785c-0.34286,-0.02142 -0.73928,-0.02142 -1.13572,-0.02142c-0.39642,0 -1.03928,0.15 -1.58571,0.73928c-0.54643,0.6 -2.07858,2.03572 -2.07858,4.96072c0,2.925 2.13214,5.75357 2.42142,6.15c0.3,0.39642 4.18928,6.39642 10.15714,8.97858c3.77143,1.62857 5.25,1.76786 7.13572,1.48928c1.14643,-0.17143 3.51429,-1.43572 4.00714,-2.82857c0.49286,-1.39286 0.49286,-2.58215 0.34286,-2.82857c-0.13928,-0.26786 -0.53572,-0.41785 -1.125,-0.70714l-0.00001,-0.00001l0.00002,-0.00001l-0.00002,-0.00001z" fill="currentColor" id="svg_2"/>
                </g>
                </svg>
            </div>
        </a>


                {{-- Modal add Carriro --}}
                <div class="DP Sombra-3 Box_1024_768 Pd-10 dsn" >

                    <div id="Ttdtl" class="ffp fsa-20 fwa-60 Pl-20 tex-g8" style="position: absolute; top: 20px; left: 30px;">Agregar producto al carrito </div>
                    <div class="clos-m">
                        <img src="{{ asset('Imgs/menu/close.png')}}" alt="" width="25"> 
                    </div>
                    <div class="Pd-25"></div>
                    <div class="divider"></div>
         
                    <div class="dsf-col">
                        <div class="tac Col-50R"> 
                            <div class="Jdcc">
                                <div class="Img-det">
                                    <div class="WH-100">
        
                                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" id="Crs01" data-bs-interval="10000"> </div>
                                                <div class="carousel-item" id="Crs02" data-bs-interval="2000"> </div>
                                                <div class="carousel-item" id="Crs03"> </div>
                                                <div class="carousel-item" id="Crs04"> </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                                </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="PdR-5"></div>
                        <div class="Separtor">
                            <div style="height: 1px; background-color: #e4e4e4"></div>
                        </div>
                        <div class="PdR-5"></div>

                        <div class="Col-50R">
                            <div class="Pb-10">
                                <div class="tal fwa-60 fsa-16 ta">Descripción de producto</div>
                                <div id="dsdtl" class="Pd-10 taj tex-g5 fsa-14"></div>
                                <div class="Pd-5"></div>
                                <div class="tal fwa-60 fsa-16 tr">Ingredientes</div>
                                <div id="Isdtl" class="Pd-10 taj tex-g5 fsa-14"></div>
                            </div>
                        </div>
                    </div>
                </div>


        <div class="Sombra-3" style="height: 60px; background-color: #ffffff; z-index: 150; position: fixed; width: 100%;">
            <div class="container"> 
                <div> 
                    
                    {{-- Lado Izquerdo --}}
                    <div class="dsfr Just-l" style="width: 100%"> 
                        <div class="Min-menu WH-100">
                            <div class="dsf">
                                
                                <div class="h-35 WH-100 Pd-10">
                                    <div class="button" style="width: 40px">
                                        <img  src="/Imgs/Clients/Icons-Menu-blackb.png" alt="" width="35">
                                    </div>
                                </div>

                                <div class="d-flex Pd-7 cart"> </div>

                            </div>
                        </div> 
                    </div>
                </div> 
            </div>
        </div>


        <section>
            <div class="Pd-30"></div>

            {{-- Contenido dinamico página --}}
            @yield('content')
        </section> 



        {{-- Menu Izquierdo --}}

            <div class="mleft Sombra-m">
                    <div style="background-color: #ffffff;">
                        <div style="padding-top: 30px; padding-left: 40px;">
                            <div class="Sombra-l" style="width: 110px; height: 110px; background-color: #FFF; border-radius: 60px; overflow: hidden; padding: 5px;">
                                <img src="{{ asset('Imgs/img/Titor.png')}}" alt="" width="100">
                            </div>
                        </div>
                        <div class="Pl-35 Pt-10 fsa-27 fwa-60 tn">Titofood  </div>
                        <div class="Pl-35 fsa-15" style="color: #4e4e4e">El Tito ahora es food.</div> 
                        <div class="Pd-10"></div>
                    </div>

                    <div style="letter-spacing: 2px; font-size: 12px; font-weight: 700; padding: 15px;">
                        <span style="padding-left: 40px; color: #34bb38;">MENU</span> 
                    </div>

                <div style="padding: 5px 25px">
                    <section>
                        @yield('Menu')
                    </section>  
                </div>
            </div>





        <script>
          
            document.querySelector(".button").addEventListener("click", (e) => {
                e.stopPropagation();
                document.querySelector(".mleft").classList.add("slider_mleft");
                document.getElementById("Show-Modal-l").style.display = 'block';
            });

            document.querySelector(".cart").addEventListener("click", (e) => {
                e.stopPropagation();
                document.querySelector(".mright").classList.add("slider_right");
                document.getElementById("Show-Modal-r").style.display = 'block';
            });            
            
            document.addEventListener("click", (e) => {
                
                if (!e.target.classList.contains("mleft")) {
                    document.querySelector(".mleft").classList.remove("slider_mleft");
                    document.getElementById("Show-Modal-l").style.display = 'none';
                }

                if (e.target.classList.contains("dsmr")) {
                    document.querySelector(".mright").classList.remove("slider_right");
                    document.getElementById("Show-Modal-r").style.display = 'none';
                }                
                
            });


            
        
        </script>

        
        <style>
       
            .mleft {
                position: fixed;
                justify-content: center;
                align-items: center;
                color: #fff;
                top: 0px;
                left: -300%;
                width: 320px;
                height: 100vh;
                background: #fff;
                transition: all 0.5s;
                z-index: 1001;
            }
        
            .slider_mleft {
                left: 0%;
                display: block;
            }

        </style>   

    </body>
</html>