function numberOfPairs(gloves) {
    let result = 0; // penampung hasil
    const countItem = {}; // objek untuk menghitung value item yang sama

    // Menghitung jumlah kemunculan setiap nilai dalam array
    gloves.forEach(item => {
        countItem[item] = (countItem[item] || 0) + 1;
    });

    // Looping untuk menghitung pasangan
    for (const item in countItem) {
        result += Math.floor(countItem[item] / 2);
    }

    return result; // kembalikan hasil
}

let gloves = ["red", "green", "red", "blue", "blue"];
console.log(numberOfPairs(gloves))