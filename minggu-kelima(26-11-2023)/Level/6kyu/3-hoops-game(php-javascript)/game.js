function prizeCounter(s) {
    const streak = { 'R': 500, 'B': 300, 'G': 200 };
    const scoreAllStart = { 'R': 0, 'B': 0, 'G': 0 };
    let score = 0;
    let active = '';
    let last = '';
  
    for (const value of s) {
      if (value !== active) {
        score += 100;
      }
  
      if (last && last !== value) {
        scoreAllStart[last] = 0;
      }
  
      scoreAllStart[value]++;
  
      if (scoreAllStart[value] === 3 && value !== active) {
        score += streak[value];
        active = value;
      }
  
      last = value;
    }
  
    return score;
  }
  
   prizeCounter(['R', 'R', 'R', 'R']);
  