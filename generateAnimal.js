function displayRandomImages_animal() {
    const imgArray = [
    { src: "img/animal/0.jpg" },
    { src: "img/animal/1.jpg" },
    { src: "img/animal/2.jpg" },
    { src: "img/animal/3.jpg" },
    { src: "img/animal/4.jpg" },
    { src: "img/animal/5.jpg" },
    { src: "img/animal/6.jpg" },
    { src: "img/animal/7.jpg" },
    { src: "img/animal/8.jpg" },
    { src: "img/animal/9.jpg" },
    { src: "img/animal/10.jpg" },
    {src: "img/animal/11.jpg"},
];

    var arrayLength = imgArray.length;
    var newArray = [];
    for (var i = 0; i < arrayLength; i++) {
        newArray[i] = new Image();
        newArray[i].src = imgArray[i].src;
    }

  function getRandomNum(min, max)
  {
      imgNo = Math.floor(Math.random() * (max - min + 1)) + min;
      return newArray[imgNo];
  }

  var newImage = getRandomNum(0, newArray.length - 1);


  var images = document.getElementsByTagName('img');
  var l = images.length;
  for (var p = 0; p < l; p++) {
     images[0].parentNode.removeChild(images[0]);
  }
document.getElementById("animal_jpg").appendChild(newImage);
}
