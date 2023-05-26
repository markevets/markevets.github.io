<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet"  href="estilos/estiloindex.css">
    </head>
    <body>
        <h1>Crocodile order form</h1>
    
        <form id="croc-form">
            <label>
                Species?
                <select name="species">
                    <option value="freshwater">Freshwater crocodile</option>
                    <option value="saltwater">Saltwater crocodile</option>
                    <option value="american">American crocodile</option>
                </select>
            </label>
            <button type="submit">Order</button>
        </form>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>

        var crocImages = {
            "american": "https://upload.wikimedia.org/wikipedia/commons/f/f2/Crocodylus_acutus_mexico_02-edit1.jpg",
            "saltwater": "https://upload.wikimedia.org/wikipedia/commons/c/ca/Crocodylus_porosus_4.jpg",
            "freshwater": "https://upload.wikimedia.org/wikipedia/commons/c/ce/Australia_Cairns_18.jpg"
        };
        
        // When the user submits the form,
        //   Check what species they ordered
        //   and display an image of it
        
        $("#croc-form").on("submit", function(event) {
            event.preventDefault();
            var $crocSpecies = $(this).find("[name=species]"); // scoped
            var crocSpecies = $crocSpecies.val();
            var $img = $("<img>");
            $img.width(400);
            $img.attr("src", crocImages[crocSpecies]); 
            $img.appendTo("body");
            
        });
        </script>
    </body>
</html>
