    /*################################
          Carregar imagem no file
    #################################*/    
    var openFile = function(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('preview');
            $("#image_post").hide();
            $("#preview").show();
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    };