function smallEnough(a, limit) {
    return Math.max(...a) <= limit;
  }

  a=  [66, 101];
  limit = 200;
  console.log(smallEnough(a, limit))