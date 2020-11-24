var selectedTiles = []

function highlightTile(tile) {
    if(selectedTiles.includes(tile)){
        tile.style.border = "none";
        var index = selectedTiles.indexOf(tile);
        selectedTiles.splice(index, 1);
    }
    else{
        tile.style.border = "medium solid white";
        selectedTiles.push(tile);
    }
    if (selectedTiles.length == 2){
        swapTiles();
    }
}

function swapTiles(){
    tempTileID = selectedTiles[0].id;
    selectedTiles[0].id = selectedTiles[1].id;
    selectedTiles[1].id = tempTileID;

    selectedTiles[0].style.border = "none";
    selectedTiles[1].style.border = "none";

    selectedTiles = [];
    checkIfSolved();
}

function checkIfSolved(){
    solved = ["0", "1", "2", "3", "4", "5", "6", "7", "8"];
    current = [];
    tiles = document.getElementsByClassName("tile");
    for (var i = 0; i<tiles.length; i++){
        current.push(tiles[i].id.replace(/tile/, ""));
    }
    if(current.every((val, index) => val === solved[index])){
        setTimeout(function(){
            if(!alert("Jigsaw Solved! Congrats!")){
                window.location.reload();
                // window.location.replace("index.php?a=refresh");
            }
        }, 250)
    }
    updatePermFile(current);
}

function updatePermFile(current){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "./src/models/ajaxModel.php");
    xmlhttp.send(JSON.stringify(current))
}

function validateFile(file) {
    var FileSize = file.files[0].size / 1024 / 1024; // in MB
    if (FileSize > 2) {
        alert('File size exceeds 2 MB');
    }

    var fileType = file.files[0].type;
    if (fileType != "image/png" && fileType != "image/jpeg" && fileType != "image/gif"){
        alert("File must be PNG, JPG, or GIF");
    }
}



