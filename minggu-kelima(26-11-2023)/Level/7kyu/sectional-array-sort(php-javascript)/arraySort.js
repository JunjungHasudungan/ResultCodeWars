function sectSort(array, start, length = null) {
    length = length === null ? array.length - start : length;
    const arr = array.slice(start, start + length);
    arr.sort((a, b) => a - b);
    array.splice(start, length, ...arr);
    return array;
}

const inputArray = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3, 5];
const startIndex = 2;
const result = sectSort(inputArray, startIndex);

console.log(result);
