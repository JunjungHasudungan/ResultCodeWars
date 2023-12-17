function multiplyAll(arr) {
    return newValue => arr.map(value => value * newValue)
}
let arr =  [1, 2, 3];
multiplyAll(arr)