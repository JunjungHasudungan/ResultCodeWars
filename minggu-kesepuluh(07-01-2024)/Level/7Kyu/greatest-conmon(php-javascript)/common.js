function mygcd(x,y){
    while (y != 0) {
        let sisa = x % y;
        x = y;
        y = sisa;
    }
    return x
  }

  let x = 60;
  let y = 12;
  console.log(mygcd(x, y));