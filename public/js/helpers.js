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
function isElementInside(clickedElem, element){
    if(clickedElem==element){
        return true;
    }
    if(clickedElem.parentNode){
        return isElementInside(clickedElem.parentNode, element);
    }else{
        return false;
    }
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

function uuid(){
    return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c){
        var r = Math.random() * 16 | 0, v = c =='x' ? r : (r & 0x3 | 0x8);
        return v.toString(16);  
    });
}

function getObjectLength(object){
    var length = 0;
    for(var i in object){
        length++;
    }
    return length;
}
function getObjectType(object){
    var type = typeof object;
    return type.toLowerCase();
}

function compareObjects(obj1, obj2, ignoreAttributs = []){
    var obj1length = getObjectLength(obj1);
    var obj2length = getObjectLength(obj2);
    if(obj1length != obj2length){
        return false;
    }
    for(var i in obj1){
        if(ignoreAttributs.includes(i)){
            continue;
        }

        var value1type = getObjectType(obj1[i]);
        var value2type = getObjectType(obj2[i]);

        if(value1type == value2type){
            if(value1type == 'object'){
                return compareObjects(obj1[i],obj2[i] , ignoreAttributs);
            }else{
                if(obj1[i] != obj2[i]){
                    return false;
                }
            }
        }else{
            return false;
        }


    }
}