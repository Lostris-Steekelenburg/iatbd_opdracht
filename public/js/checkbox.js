let checkbox_hond = document.getElementById('hond');
let checkbox_kat = document.getElementById('kat');
let huisdier_soort_lijst = document.getElementsByTagName('li');

checkbox_hond.checked = true;
checkbox_kat.checked = true;

checkbox_hond.addEventListener('change', function(){
    if(checkbox_hond.checked){
        for(let i = 0; i < huisdier_soort_lijst.length; i++){
            if(huisdier_soort_lijst[i].dataset.soortHuisdier == 'hond'){
                huisdier_soort_lijst[i].style.display = '';
            }
        }
    }
    else{
        for(let i = 0; i < huisdier_soort_lijst.length; i++){
            if(huisdier_soort_lijst[i].dataset.soortHuisdier == 'hond'){
                huisdier_soort_lijst[i].style.display = 'none';
            }
        }
    }
});

checkbox_kat.addEventListener('change', function(){
    if(checkbox_kat.checked){
        for(let i = 0; i < huisdier_soort_lijst.length; i++){
            if(huisdier_soort_lijst[i].dataset.soortHuisdier == 'kat'){
                huisdier_soort_lijst[i].style.display = '';
            }
        }
    }else{
        for(let i = 0; i < huisdier_soort_lijst.length; i++){
            if(huisdier_soort_lijst[i].dataset.soortHuisdier == 'kat'){
                huisdier_soort_lijst[i].style.display = 'none';
            }
        }
    }
});



    