define(['request' , 'ajax-form' , 'list'],function(Request, AjaxForm, List){
    class Item{ 
        constructor(elem){
            this.elem = elem;
            this.selected = false;
            this.isMaster = this.elem.classList.contains('master')?true:false;
            this.deleteForm = null;
            this.deleteFormSubmitCallBack = null;
            this.initDeleteForm();
        }
        serverSelected(){
            var box = this.getSelectBox();
            if(!box)
                return false
            return box.classList.contains('.selected');    
        }  
        initDeleteForm(){
            var form = this.elem.querySelector('.delete-form');
            if(form){
                this.deleteForm = new AjaxForm();
                this.deleteForm.setForm(form);
                var this2 = this;
                this.deleteForm.onSend(function(f,result){
                    if(this2.deleteFormSubmitCallBack){
                        this2.deleteFormSubmitCallBack(result);
                    }
                });
                this.deleteForm.init();
            }
        }
        disableDeleteForm(){
            if(this.deleteForm){
                this.deleteForm.disableSubmit();
            }
        }
        enableDeleteForm(){
            if(this.deleteForm){
                this.deleteForm.enableSubmit();
            }
        }

        select(){
            var box = this.getSelectBox();

            if(!box){
                return;
            }

            box.classList.add('selected');
            this.selected=true;
            this.enableDeleteForm();
        }
        unselect(){
            var box = this.getSelectBox();
            if(!box){
                return;
            }
            box.classList.remove('selected');
            this.selected = false;
            this.enableDeleteForm();
        }
        onSelect(callback){
            var box = this.getSelectBox();
            if(box){
                var this2 = this;
                box.addEventListener('click' , function(e){
                    e.preventDefault();
                    callback(this2);
                });
            }
        }
        onDeleteFormSubmit(callback){
            this.deleteFormSubmitCallBack = callback;
            return this;
        }

        getId(){
            return this.elem.dataset.id;
        }
          
        isClientItem(){
            return this.elem.classList.contains('client-item')
        }

        clientDelete(){
            if(this.deleteForm)
                return true;
            return this.deleteForm.querySelector('.client-delete');
        }
        remove(){
            this.elem.remove();
            return this;
        }
        getSelectBox(){
            if(this.elem)
                return this.elem.querySelector('.select-box');
            
            return null;
        }
            
    }
    return class DataList{
      
        constructor(config = {}){
            this.config = config;
            this.elem = null;
            this.items = [];
            this.selectedIds = [];
            this.request = new Request();
            this.clearAllCallBack = null;
            this.insertedData = new List();
            this.insertForm = null;

        }

    }
});