%[if %("%id=uid%" != "")%]%
document.addEventListener('DOMContentLoaded',function(){
    document.querySelector('#%id=uid%').querySelectorAll('.accordion-collapse').forEach(function(element){
        element.setAttribute('data-bs-parent', '#%id=uid%');
    });
});
%[endif]%