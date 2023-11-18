function strangeCoach(players) {
  // tempat penampung objek
  let group_player = {};
  
  players.forEach(player => { // melakukan iterasi / mengeluarkan semua nilai element array
      let first_char = player[0]; // inisial / memberi nilai pada element pertama
      if (!(group_player[first_char])) {
          group_player[first_char] = 0;
      }
      group_player[first_char]++;
  });


  let create_team = Object.keys(group_player).filter(function(value) {
      return group_player[value] >= 5;
  });
  

    if(create_team.length > 0) {
        create_team.sort();
        return create_team.join('')
    }else {
        return 'forfeit'
    }
  }

  let players = [ 
      "babic", "keksic", "boric", "bukic", "sarmic", "balic", "kruzic", "hrenovkic", 
      "beslic", "boksic", "krafnic", "pecivic", "klavirkovic", "kukumaric", "sunkic", 
      "kolacic", "kovacic", "prijestolonasljednikovic"
  ];
  strangeCoach(players);
