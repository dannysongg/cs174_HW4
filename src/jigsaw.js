function highlightTile(tile) {
    var selected = tile;
    
    if(tile.style.border == "medium solid white"){
        tile.style.border = "none";
    }
    else{
        tile.style.border = "medium solid white";
    }
}
