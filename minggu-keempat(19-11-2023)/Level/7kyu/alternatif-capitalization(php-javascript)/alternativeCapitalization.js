function capitalize(s){

    // value string konversi ke array dilanjut ke mapping(membuat array baru), lakukan validasi menggunakan operator tenari 
        const uppercase = s.split("").map((value, index) => index % 2  ? value.toUpperCase() : value).join("");
        const lowercase = s.split("").map((value, index) => index % 2 ? value.toUpperCase() : value).join("");

    return [uppercase, lowercase];

  };

  const s = "abcdef";
let result = capitalize(s);
console.log(result)
