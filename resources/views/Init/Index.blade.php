@php
    $subm = 0;
    $imgr = env('PATH_IMG_STORE');
    use App\Models\Init\Opciones;
@endphp

@extends('layouts.Linit')

@section('content')

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">

<style>
    .d-flex{display:flex!important}
    .flex-center{justify-content:center;align-items:center}
    .flex-column{align-items:flex-start;justify-content:center}

    .Optioms:target {
        scroll-margin-block-start: 120px;
        scroll-margin-block-end: 120px;
        border: 1px dashed #00c42a;
        color: #00c42a;
        font-weight: 600;
    }



    .Optioms {
        font-size: 22px;
        background-color: #FFF;
        border-radius: 0px 10px 0px 10px;
        padding: 15px 15px 15px 25px ;
        color: #000;
        
    }

    .Optioms + div {

        background-color: #b90000;
        height: 700px;
        
    }
 


</style>

    <div class="WH-100" style="background-color: #F0F0F0;">

        {{-- Seccion menu --}}
        @section('Menu')
            @foreach ($Kat as $link)
                @foreach ($Group as $Gp)
                    @if ($Gp->category == $link->id)
                        <a  class="al mex" data-code="{{ $link->id }}" href="#{{$link->name_categ}}">
                            <div class="Pr-25">
                                <div class="option_m Opt_ord">
                                    <div class="ovh">
                                        <img class="rotate" src="{{ asset('Imgs/menu/Punters.png')}}" alt="" width="25"> 
                                    </div> 
                                    <span class="option_mt"> {{$link->name_categ}}</span> 
                                </div>
                            </div> 
                         </a>    
{{--                         <div>
                            <a  class="al mex" data-code="{{ $link->id }}" href="#{{$link->name_categ}}"> {{$link->name_categ}} </a>
                        </div> --}}
                    @endif
                @endforeach
            @endforeach
        @endsection

        <div class="container-x">
            <div class="flags" id="Rflag">
                {{-- <p>Window resized <span id="demo">0</span> times.</p> --}}    
                @foreach ($Kat as $K) {{-- Categorias --}}
                    <div >
                        @foreach ($Group as $Gd)
                            @if ($Gd->category == $K->id)
                                <div class="Pt-30">
                                    <div class="Pd-10"></div>
                                    <div class="Pt-5 Pb-5 ffp Optioms dsf" id="{{ $K->name_categ }}"> 
                                        <img src='/Imgs/Clients/N_car.png' alt="" width="30" height="30"> 
                                        <span class="Pl-10 ">{{ $K->name_categ }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    
                        <div id="Tit_{{$K->id}}" style="background-color: #F0F0F0; border-bottom-right-radius: 15px; width: 100%; display: flex; flex-wrap: wrap; align-items: center;">
                            @foreach ($Pro as $item) {{-- Categorias --}}
                                @if ($item->category == $K->id)

                                    <script>
                                        Color = an.Color()
                                        itr = document.getElementById("Tit_"+{{$K->id}});
                                        itr.style.borderRight = '1px dashed #FFF';
                                        itr.style.borderBottom = '1px dashed #FFF'; 
                                        itr.style.backgroundColor = '#F3F3F3';                                         
                                        itr.style.paddingTop = '20px';
                                        itr.style.paddingBottom = '20px';
                                    </script>

                                    @if ($item->type_items === 'BASIC')

                                        <div class="Box-cart Sombra-2">
                                            <div class="tac WH-100" style="height: 200px; overflow: hidden;">
                                                <img class="iPush" src="{{$imgr}}/{{$item->image}}" alt="image" height="300">
                                            </div>
                                            <div class="tac WH-100 Pd-10 fsa-20 fwa-60 ffp">{{ $item->title }}</div>
                                            <div style="height: 70px; overflow: hidden;">
                                                <div class="tex-g4 fsa-14 Pl-30 Pr-30"> {{ $item->Ingredients }} </div>
                                            </div>
                                            <div class="dsf Pl-30 Pr-3">
                                                <div class="WH-40">
                                                    <div class="fsa-13 fwa-60 Pl-10" style="color: #ec790e">Total price</div>
                                                    <div class="fsa-25 fwa-60 ffp"><span style="color: #f8cb37; font-size: 20px;">$ </span>{{number_format($item->Price, 0, ',', '.')}}</div>
                                                </div>
                                                <div class="WH-60 Pr-30 Pt-10 ">
                                                    <div class="poin" style="height: 45px; line-height: 22px; width: 95%; background-color: #ffffff; border: 1px dashed #6b6b6b; border-radius: 0px 15px 15px 15px; line">
                                                        <div class="Jdcc Pt-10">
                                                            <div class="Pl-5 tw fsa-14 fwa-60 tn">- Titofood -</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @else

                                        <div class="Box-cart Sombra-2">
                                            <div class="tac WH-100" style="height: 200px; overflow: hidden;">
                                                <img class="iPush" src="{{$imgr}}/{{$item->image}}" alt="image" height="300">
                                            </div>
                                            <div class="tac WH-100 Pd-10 fsa-20 fwa-60 ffp">{{ $item->title }}</div>
                                            <div style="height: 70px; overflow: hidden;">
                                                <div class="tex-g4 fsa-14 Pl-30 Pr-30"> {{ $item->Ingredients }} </div>
                                            </div>
                                            <div class="dsf Pl-30 Pr-3">
                                                <div class="WH-40">
                                                    <div class="fsa-13 fwa-60 Pl-10" style="color: #ec790e">Total price</div>
                                                    <div class="fsa-25 fwa-60 ffp"><span style="color: #f8cb37; font-size: 20px;">$ </span > <span id="Price_{{$item->id}}">{{number_format($item->Price, 0, ',', '.')}}</span> </div>
                                                </div>
                                                <div class="WH-60 Pr-30">
                                                    @php
                                                        $Option = Opciones::where('product_id', $item->id)
                                                                        ->orderBy('name_option', 'desc')
                                                                        ->get();
                                                    @endphp

                                                    <div class="Pd-5"></div>
                                                    <select name="tipo_item" id="Selector_{{$item->id}}" class="Sel-inp fsa-14" onchange="UpdatePrice(this, {{$item->id}});">

                                                        @foreach ($Option as $opt)
                                                            <option value="{{$opt->price_option}}">{{ $opt->name_option }}</option>   
                                                        @endforeach
                         
                                                    </select>

                                                </div>
                                            </div>
                                        </div>

                                    @endif  
                                @endif
                            @endforeach
                        </div>     
                    </div>  
                @endforeach
            </div>
        </div>
        <div class="Pd-40"></div>
    </div>
        <style>

            .Box-cart{
                width: 385px;
                height: 400px;
                background-color: #FFF;
                margin: 15px;
                border-radius: 15px;
            }

            .container-x{
                width: 100%;
                background-color: #F0F0F0;
                display: flex; 
                justify-content: center; 
                align-items: center;
            }

            .flags{
                width: 1400px;
                background-color: #F0F0F0;
                padding: 0px 0px 0px 65px;
            }

            /* ---------- Responsive -------- */
            @media only screen and (min-width: 1px) and (max-width: 620px) {

                .Box-cart{
                    background-color: #ffffff;
                    width: 100%;
                }
                .flags{
                    width: 100%;
                    background-color: #F0F0F0;
                    padding: 0px 5px;
                }
            
            }


            /* ---------- Responsive -------- */
            @media only screen and (min-width: 620px) and (max-width: 764px) {

                .Box-cart{
                    background-color: #ffffff;
                    width: 100%;
                }
                .flags{
                    width: 100%;
                    background-color: #F0F0F0;
                    padding: 0px 30px;
                }
            
            }
            
            @media only screen and (min-width: 764px) and (max-width: 990px) {

                .Box-cart{
                    background-color: #ffffff;
                    width: 45.8%;
                }
                .flags{
                    width: 100%;
                    background-color: #F0F0F0;
                    padding: 0px 0px 0px 15px;
                }

            }
            
            @media only screen and (min-width: 990px) and (max-width: 1200px) {

                .Box-cart{
                    background-color: #ffffff;
                    width: 46%;
                }

                .flags{
                    width: 900px;
                    background-color: #F0F0F0;
                    padding: 0px 0px 0px 10px;
                }
            
            }

            @media only screen and (min-width: 1200px) and (max-width: 1399px) {

                .Box-cart{
                    background-color: #ffffff;
                    width: 500px;
                }

                .flags{
                    width: 1070px;
                    background-color: #F0F0F0;
                    padding: 0px 0px 0px 5px;
                }
            
            }

        </style>



{{--     <div class="WH-100">
        @include('layouts.footer')
    </div> --}}

    <script>
/* 
        window.addEventListener("resize", myFunction);

        var x = 0;

        function myFunction() {
            var txt = x += 1;
            document.getElementById("demo").innerHTML = window.innerWidth;
            //document.getElementById("Rflag").style.paddingLeft = (window.innerWidth) - (window.innerWidth-1) +'px';
        } */
        an.show_details("Lqpd", "SMC", "DP", '20');
        an.HideM("clos-m", "SMC", "DP"); 

        function UpdatePrice(Selec, idr){
            var sleTex = Selec.options[Selec.selectedIndex].innerHTML;
            var selVal = Selec.value;
            Tex = document.getElementById("Price_"+idr);
            Tex.innerHTML = new Intl.NumberFormat('de-DE').format(selVal) ;
        }


    </script>
    
@endsection