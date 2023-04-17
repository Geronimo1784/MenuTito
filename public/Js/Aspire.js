var Tmpp = [];
var ARS = [];
var ARSUP = [];
var Sect = 0;
var URLH;
var URLJ = window.location.host;
if(URLJ == "127.0.0.1:8001"){ URLH = "http://storing.imgs.com/"; } else { URLH = "http://storing.titofood.com/"; }

const formatterPeso = new Intl.NumberFormat('es-CO', {
    style: 'currency',
    currency: 'COP',
    minimumFractionDigits: 0
});

var an = {

    Color : () => {
        var simbolos, color;
        simbolos = "6789ABCDEF";
        color = "#";
    
        for(var i = 0; i < 6; i++){
            color = color + simbolos[Math.floor(Math.random() * 10)];
        }
    
        return color;
    },

    Dit : (a) => {
     
        $("." + a).on("click", function(){

            dt = $(this).attr("data-code");

            itr = document.getElementById("Tit_"+Sect);

            if(itr){
                itr.style.borderRight = '1px dashed #FFFFFF';
                itr.style.borderBottom = '1px dashed #FFFFFF';                 
            }

            itr = document.getElementById("Tit_"+dt);
            itr.style.borderRight = '1px dashed #00c42a';
            itr.style.borderBottom = '1px dashed #00c42a'; 
            Sect = dt;

        });
    },


    show_details : (a ,modal, box, code) => {

        $("." + a).on("click", function(){
            $("." + modal).show();
            $("." + box).show();
            dt = $(this).attr("data-code");
            di = $(this).attr("data-img");

            $("#Crs01 img").remove(); $("#Crs02 img").remove();
            $("#Crs03 img").remove(); $("#Crs04 img").remove();
            $.ajax({
                type:"GET",
                url: 'Detail-item'+'/'+dt,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },   
                success: function (data) {

                    Bb = data['B'];

                    $('#img-details').attr('src', di);
                    $('#Ttdtl').html(data['A'][0].title);
                    $('#dsdtl').html(data['A'][0].description);
                    $('#Isdtl').html(data['A'][0].Ingredients);

                    if(data['A'][0].slider_1 != ""){
                        $("#Crs01").append("<img src='"+URLH + data['A'][0].slider_1+"' class='d-block w-100'>");
                    }
                    if(data['A'][0].slider_2 != ""){
                        $("#Crs02").append("<img src='"+URLH + data['A'][0].slider_2+"' class='d-block w-100'>");
                    }
                    if(data['A'][0].slider_3 != ""){
                        $("#Crs03").append("<img src='"+URLH + data['A'][0].slider_3+"' class='d-block w-100'>");
                    }
                    if(data['A'][0].slider_4 != ""){
                        $("#Crs04").append("<img src='"+URLH + data['A'][0].slider_4+"' class='d-block w-100'>");
                    }

                },
                error: function (xhr) {
                    console.log(xhr);
                }
            });



        });

    },


    fi : (i,f) => {
        document.getElementById(i).innerHTML = f;
    },


    HideM : (a ,modal, box, code) => {

        $("." + a).on("click", function(){ 

            $("." + modal).hide();
            $("." + box).hide();
            $("#djoys").html('1');
            document.body.style.overflow = 'auto';
            
        });

    },

   




}

$( document ).ready(function() {

    an.show_details("Lqpd", "SMC", "DP", '20');
    an.HideM("clos-m", "SMC", "DP"); 

});

window.Sup_der = async function(msg, time , type) {
    return await Swal.fire({
        text: msg,
        icon: type,
        toast: true,
        buttonsStyling: false,
        showConfirmButton: false,
        position: "top-right",
        timerProgressBar: true,
        timer: time,
        animation: true,
        didOpen: (toast) => {
            //toast.addEventListener('mouseenter', Swal.stopTimer);
            //toast.addEventListener('mouseleave', Swal.resumeTimer);
        }
    });
};






