function seaSick(x) {
    const jumlahPerubahan = (x.match(/_~/g) || []).length + (x.match(/~_/g) || []).length;
    const panjangString = x.length;
    const batasPerubahan = 0.2 * panjangString;

    if (jumlahPerubahan > batasPerubahan) {
        return "Throw Up";
    } else {
        return "No Problem";
    }
}

const x = '';
console.log(seaSick(x));