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
    solved = ["tile0", "tile1", "tile2", "tile3", "tile4", "tile5", "tile6", "tile7", "tile8"];
    current = [];
    tiles = document.getElementsByClassName("tile");
    for (var i = 0; i<tiles.length; i++){
        current.push(tiles[i].id);
    }
    console.log(solved);
    console.log(current);
    if(current.every((val, index) => val === solved[index])){
        setTimeout(function() { alert("Jigsaw Solved! Congrats!"); }, 250);
    }
}