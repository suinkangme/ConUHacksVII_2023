function displayRandomImages_color() {
    const imgArray = [
    { src: "img/color/0.png" },
    { src: "img/color/1.png" },
    { src: "img/color/2.png" },
    { src: "img/color/3.png" },
    { src: "img/color/4.png" },
    { src: "img/color/5.png" },
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
document.getElementById("color_img").appendChild(newImage);
}
