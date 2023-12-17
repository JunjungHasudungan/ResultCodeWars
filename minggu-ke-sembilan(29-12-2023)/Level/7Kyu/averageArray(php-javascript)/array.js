function avgArray(arr) {
    let result = []; // var collect result array
    for (let index = 0; index < arr[0].length; index++) {
        let arrTemp = [];
        for (let index_2 = 0; index_2 < arr.length; index_2++) {
            arrTemp.push(arr[index_2][index]);
        }
        result.push(arrTemp.reduce((a, b) => a + b) / arr.length);
    }
    return result;
  }

  let arr =  [ [1, 2, 3, 4], [5, 6, 7, 8]]
avgArray(arr)