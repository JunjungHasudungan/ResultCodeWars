function inviteMoreWomen(L) {
    // menghitung seluruh jumlah peserta pesta
    let countQuest = L.reduce((acc, currentValue) => acc + currentValue, 0); 
    return (countQuest > 0);
  }

  let L = [1, -1, 1];
 inviteMoreWomen(L)