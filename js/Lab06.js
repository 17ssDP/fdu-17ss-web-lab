let container = document.getElementsByClassName("flex-container justify")[0];
createContainer(container);

function createContainer(container) {
  let item;
  let h2, h2_node;
  let p, p_node;
  let inner_box;
  let h3, h3_node;
  let button, button_node;
  for (var i = 0; i < 4; i++) {
    item = document.createElement("div");
    item.className = "item";
    h2 = document.createElement("h2");
    h2_node = document.createTextNode(countries[i].name);
    h2.appendChild(h2_node);
    item.appendChild(h2);
    p = document.createElement("p");
    p_node = document.createTextNode(countries[i].continent);
    p.appendChild(p_node);
    item.appendChild(p);
    inner_box = document.createElement("div");
    inner_box.className = "inner-box";
    h3 = document.createElement("h3");
    h3_node = document.createTextNode("City");
    h3.appendChild(h3_node);
    inner_box.appendChild(h3);
    inner_box.appendChild(createUl(countries[i].cities));
    item.appendChild(inner_box);
    inner_box = document.createElement("div");
    inner_box.className = "inner-box";
    h3 = document.createElement("h3");
    h3_node = document.createTextNode("Popular Photos");
    h3.appendChild(h3_node);
    inner_box.appendChild(h3);
    inner_box.appendChild(createPhotos(countries[i].photos));
    item.appendChild(inner_box);
    button = document.createElement("button");
    button_node = document.createTextNode("Visit");
    button.appendChild(button_node);
    item.appendChild(button);
    container.appendChild(item);
  }
}

function createUl(cities) {
  let ul = document.createElement("ul");
  let li, li_node;
  for (var i = 0; i < cities.length; i++) {
    li = document.createElement("li");
    li_node = document.createTextNode(cities[i]);
    li.appendChild(li_node);
    ul.appendChild(li);
  }
  return ul;
}

function createPhotos(photos) {
  let photo = document.createElement("div");
  let img;
  for (var i = 0; i < photos.length; i++) {
    img = document.createElement("img");
    img.src = "images/" + photos[i];
    img.alt = photos[i];
    img.className = "photo";
    photo.appendChild(img);
  }
  return photo;
}