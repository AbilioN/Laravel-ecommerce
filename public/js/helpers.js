function dropdowns(){
    var dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(function(d){
        var toggle=d.querySelector('.dropdown-toggle');
        var menu=d.querySelector('.dropdown-menu');
        hideDropDownMenu(d);
        toggle.addEventListener('click' , function(e){
            e.preventDefault();
            toggleDropDownMenu(d);
        });
        document.addEventListener('click' , function(e){
            if(!isElementInside(e.target, menu) && !isElementInside(e.target,toggle)){
                hideDropDownMenu(d);
            }
        });

        if(d.classList.contains('a-dropdown')){
            var menu_items = menu.querySelectorAll('.menu-item');
            menu_items.forEach(function(menu_item){
                menu_item.addEventListener('click', function(e){
                    e.preventDefault();
                    var text = e.target.dataset.text;
                    toggle.querySelector('.toggle-text').textContent = text;
                });
            });
        }
    });

}
function toggleDropDownMenu(d){
    var menu=d.querySelector('.dropdown-menu');
    if(menu.classList.contains('hide')){
        menu.classList.remove('hide');
    }else{
        menu.classList.add('hide');
    }
}
function hideDropDownMenu(d){
    var menu = d.querySelector('.dropdown-menu');
    menu.classList.add('hide');

}
// function isElementInside(clickedElem,)