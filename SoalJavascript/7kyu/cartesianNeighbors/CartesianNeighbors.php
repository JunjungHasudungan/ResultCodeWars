<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal Cartesian Neighbors</title>
</head>
<body id="cartesianNeighbors">
    <p id="result"></p>
</body>
<script>
    // the function should return [(1,1),(1,2),(1,3),(2,1),(2,3),(3,1),(3,2),(3,3)];

    function cartesianNeighbor(x, y) {
        const neighbors  = [];
        for (let deltaX = -1; deltaX <= 1; deltaX++) {
            for (let deltaY = -1; deltaY <= 1; deltaY++) {
                const newX = x + deltaX;
                const newY = y + deltaY;
            neighbors.push([newX, newY]);
            }
        }
        return neighbors.filter((params) => params + '' != [x,y] + '');
        // document.getElementById("result").innerHTML = "Hasil: " + JSON.stringify(neighbors);
    }
    cartesianNeighbor(2, 2);
</script>
</html>