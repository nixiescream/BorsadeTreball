$('.message_pri').change(function(){
    console.log("asada")
    if($(this).val() == 'alumne'){
        var div = document.createElement('div');
        div.innerHTML = $('#blockOfStuff').innerHTML;
        document.getElementById('selection').appendChild(div);
    }
});
