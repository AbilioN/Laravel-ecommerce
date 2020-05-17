define(function(){
    return class Request{
        send(url,method, data){
            method = method.toUpperCase();
            if(method =='POST')
                return this.post(url, data);
            else
                this.get(url,data);
            
        }
        get(url, data={}){
            var result = null;
            $.ajax({
                url: url,
                data: data,
                type:'GET',
                success:function(data){
                    result = data;
                },async:false
            });
            return result; 
        }
        post(url, data={}){
            data['_token'] = document.getElementById('csrf').getAttribute('content');
            var result = null;
            data = this.buildFormData(data);
            $.ajax({
                url:url,
                data:data,
                type:'POST',
                asyn:false,
                processData:false,
                contentType:false,
                success:function(data){
                    result = data;
                }
            });
            return result;
        }

        buildFormData(data){
            var formdata = new FormData()
            for(var i in data){
                formdata.set(i, data[i]);
            }
            return formdata;
        }
        delete(url, data = {}){
            data['_method'] = 'DELETE';
            return this.post(url,data);
        }
        put(url, data ={}){
            data['_method'] = 'PUT';
            return this.post(url,data);
        }
    }
});