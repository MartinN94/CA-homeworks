var url = "https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json";

var heroesObj = [
    { name: "Molecule Man", imgUrl: "https://upload.wikimedia.org/wikipedia/en/thumb/5/5f/Molecule_Man.jpg/250px-Molecule_Man.jpg", readMoreUrl: "https://en.wikipedia.org/wiki/Molecule_Man" },
    { name: "Madame Uppercut", imgUrl: "https://upload.wikimedia.org/wikipedia/en/thumb/b/be/Madame-Web.png/250px-Madame-Web.png", readMoreUrl: "https://en.wikipedia.org/wiki/Madame_Web" },
    { name: "Eternal Flame", imgUrl: "https://vignette.wikia.nocookie.net/marvel-cinematic-universe/images/7/7b/Eternal_Flame.png", readMoreUrl: "https://marvelcinematicdatabase.fandom.com/wiki/Eternal_Flame" }
];

fetch(url).then(response => {
    return response.json()
}).then(data => {
    //console.log(data);
    printHeading(data);
    printCards(data);
})

function printHeading (data){
    var card = document.querySelector(".one");
    var card2 = document.querySelector(".two");


    var name = document.createElement("h2");
    name.textContent = data.squadName;
    card.appendChild(name);

    var town = document.createElement("p");
    town.textContent = data.homeTown;
    card.appendChild(town);

    var tower = document.createElement("h5");
    tower.className = ("text-center");
    tower.textContent = data.secretBase;
    card2.appendChild(tower);

    var formed = document.createElement("p");
    formed.className = ("text-center");
    formed.textContent = data.formed;
    card2.appendChild(formed);
}



function printCards(data) {
    var heroes = data['members'];

    for(i = 0; i < heroes.length; i++) {
      var container = document.querySelector('.heroes');
      
      var myCard = document.createElement("div");
      myCard.className = ("card");
      
      var myCardBody = document.createElement("div");
      myCardBody.className = ("card-body");

      var myH2 = document.createElement('h4');
      myH2.textContent = heroes[i].name;

      var myPara1 = document.createElement('p');
      myPara1.textContent = 'Age: ' + heroes[i].age;    
      myPara1.textContent = 'Age: ' + heroes[i].age;     
      
      var myPara2 = document.createElement('p');
      myPara2.textContent = 'Secret identity: ' + heroes[i].secretIdentity;

      var myPara3 = document.createElement('h5');
      myPara3.textContent = 'Powers:';

      var myList = document.createElement('ul');
      myList.classList = ("list-group", "list-group-flush");



      var superPowers = heroes[i].powers;
      
      
      for(j = 0; j < superPowers.length; j++) {
        var listItem = document.createElement('li');
        listItem.className = ("list-group-item");
        listItem.textContent = superPowers[j];
        myList.appendChild(listItem);

      }

      myCardBody.appendChild(myH2);
      myCardBody.appendChild(myPara1);
      myCardBody.appendChild(myPara2);
      myCardBody.appendChild(myPara3);
      myCardBody.appendChild(myList);

      myCard.appendChild(myCardBody);

      container.appendChild(myCard);
    }
  }

