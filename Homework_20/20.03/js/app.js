var url = "https://jsonplaceholder.typicode.com/posts";
var blogs = "";
var numberOfShownBlogs = 0;
var container = document.querySelector(".blog-container");

fetch(url)
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    //console.log(data);
    blogs = data;
    for (var i = 0; i < data.length; i++) {
      if (i <= 4) {
        var blogBox = document.createElement("div");
        blogBox.classList.add("container", "blog-box");
        var blogNum = document.createElement("div");
        blogNum.classList.add("number", "rounded-circle");
        var blogTitle = document.createElement("h2");
        blogTitle.classList.add("blog-title", "text-white");
        var blogText = document.createElement("p");
        blogText.classList.add("blog-text", "text-white");

        blogNum.textContent = blogs[i].id;
        blogTitle.textContent = blogs[i].title;
        blogText.textContent = blogs[i].body;

        blogBox.appendChild(blogNum);
        blogBox.appendChild(blogTitle);
        blogBox.appendChild(blogText);
        container.appendChild(blogBox);

        numberOfShownBlogs++;
        //console.log(numberOfShownBlogs);
      } else {
        break;
      }
    }
  });

function getMore() {
  var nextLimit = numberOfShownBlogs + 4;

  for (var j = numberOfShownBlogs; j <= nextLimit; j++) {
    var blogBox = document.createElement("div");
    blogBox.classList.add("container", "blog-box");
    var blogNum = document.createElement("div");
    blogNum.classList.add("number", "rounded-circle");
    var blogTitle = document.createElement("h2");
    blogTitle.classList.add("blog-title", "text-white");
    var blogText = document.createElement("p");
    blogText.classList.add("blog-text", "text-white");

    blogNum.textContent = blogs[j].id;
    blogTitle.textContent = blogs[j].title;
    blogText.textContent = blogs[j].body;

    blogBox.appendChild(blogNum);
    blogBox.appendChild(blogTitle);
    blogBox.appendChild(blogText);
    container.appendChild(blogBox);

    numberOfShownBlogs++;
  }

  if (numberOfShownBlogs >= blogs.length) {
    return;
  }
}

function showSpinners() {
  var spinner1 = document.querySelector("#spinner1");
  var spinner2 = document.querySelector("#spinner2");
  var spinner3 = document.querySelector("#spinner3");

  spinner1.style.display = "";
  spinner2.style.display = "";
  spinner3.style.display = "";
}

function load() {
  setTimeout(getMore, 1000);
  showSpinners();
}

function searchBlogs() {
  var input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  var cards = document.querySelectorAll(".blog-box");

  for (i = 0; i < cards.length; i++) {
    var cardTitle = cards[i].querySelector(".blog-title");
    var titleText = cardTitle.textContent || cardTitle.innerText;
    var cardText = cards[i].querySelector(".blog-text");
    var cardTextValue = cardText.textContent || cardText.innerText;

    if (
      titleText.toUpperCase().indexOf(filter) > -1 ||
      cardTextValue.toUpperCase().indexOf(filter) > -1
    ) {
      cards[i].style.display = "";
    } else {
      cards[i].style.display = "none";
    }
  }
}
