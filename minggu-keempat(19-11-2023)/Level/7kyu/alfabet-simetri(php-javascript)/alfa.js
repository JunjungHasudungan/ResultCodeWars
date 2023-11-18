function solve(arr) {
    let result = [] // tempat penampung hasil
    const alphabet = Array.from("abcdefghijklmnopqrstuvwxyz") // membuat alpabet menjadi array
    arr.forEach(element => { // melakukan iterasi / mengeluarkan nilai pada elemen
        let counter = 0
        for (let index = 0; index < element.length; index++) {
            if(element[index].toLowerCase() === alphabet[index].toLocaleLowerCase()) {
                counter++
            }
        }
        result.push(counter)
    });
    return result
}

    let arr = ["abode","ABc","xyzD"]
    solve(arr)
