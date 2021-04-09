

let checkbox_gereedschap = document.getElementById("gereedschap");
let checkbox_elektronica = document.getElementById("elektronica");
let checkbox_meubilair = document.getElementById("meubilair");
let checkbox_schoonmaakspullen = document.getElementById("schoonmaakspullen");
let checkbox_hardware = document.getElementById("hardware");
let button = document.getElementsByClassName("productCard__btnSection");
//filter alle list elementen, pak alleen diegene met de class a-popup (dus niet de nav)
let list_of_products = [].filter.call(document.getElementsByTagName('li'), el => el.className.indexOf('a-popup') >= 0);




function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            list_of_products[i].style.display = '';
        } else {
            list_of_products[i].style.display = 'none';
        }
    }
}




//GEREEDSCHAP

checkbox_gereedschap.addEventListener("change", function(){
    if(checkbox_gereedschap.checked){
        for(let i = 0; i < list_of_products.length; i++)
        {
            if(list_of_products[i].dataset.kindOfProduct !== "Gereedschap")
            {
                list_of_products[i].style.display = 'none';
            }
        }
    }
    
    if(!checkbox_gereedschap.checked){
        for(let i = 0; i < list_of_products.length; i++)
        {
            list_of_products[i].style.display = '';
        }
    }

});


//ELEKTRONICA

checkbox_elektronica.addEventListener("change", function(){
    if(checkbox_elektronica.checked){
        for(let i = 0; i < list_of_products.length; i++)
        {
            if(list_of_products[i].dataset.kindOfProduct !== "Elektronica")
            {
                list_of_products[i].style.display = 'none';
            }
        }
    }
    
    if(!checkbox_elektronica.checked){
        for(let i = 0; i < list_of_products.length; i++)
        {
            list_of_products[i].style.display = '';
        }
    }

});

//MEUBILAIR

checkbox_meubilair.addEventListener("change", function(){
    if(checkbox_meubilair.checked){
        for(let i = 0; i < list_of_products.length; i++)
        {
            if(list_of_products[i].dataset.kindOfProduct !== "Meubilair")
            {
                list_of_products[i].style.display = 'none';
            }
        }
    }
    
    if(!checkbox_meubilair.checked){
        for(let i = 0; i < list_of_products.length; i++)
        {
            list_of_products[i].style.display = '';
        }
    }

});

//SCHOONMAAKSPULLEN

checkbox_schoonmaakspullen.addEventListener("change", function(){
    if(checkbox_schoonmaakspullen.checked){
        for(let i = 0; i < list_of_products.length; i++)
        {
            if(list_of_products[i].dataset.kindOfProduct !== "Schoonmaakspullen")
            {
                list_of_products[i].style.display = 'none';
            }
        }
    }
    
    if(!checkbox_schoonmaakspullen.checked){
        for(let i = 0; i < list_of_products.length; i++)
        {
            list_of_products[i].style.display = '';
        }
    }

});


//HARDWARE

checkbox_hardware.addEventListener("change", function(){
    if(checkbox_hardware.checked){
        for(let i = 0; i < list_of_products.length; i++)
        {
            if(list_of_products[i].dataset.kindOfProduct !== "Hardware")
            {
                list_of_products[i].style.display = 'none';
            }
        }
    }
    
    if(!checkbox_hardware.checked){
        for(let i = 0; i < list_of_products.length; i++)
        {
            list_of_products[i].style.display = '';
        }
    }

});
