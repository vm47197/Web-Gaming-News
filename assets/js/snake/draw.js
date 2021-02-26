const canvas = document.querySelector(".canvas");
const ctx = canvas.getContext("2d");
const scale = 20;
const rows = canvas.height / scale;
const columns = canvas.width / scale;
const StartBtn = document.querySelector('#StartBtn');
const modal = document.querySelector('#Snakemodal');
let MainScore = document.querySelector('#SnakeMainScore');
let EndButton = document.querySelector('#EndButton');
var snake;
var timer;


window.addEventListener('keydown', ((evt) => {
  const direction = evt.key.replace('Arrow', '');
  snake.changeDirection(direction);
}));

function Snake() {
  this.x = 0;
  this.y = 0;
  this.xSpeed = scale * 1;
  this.ySpeed = 0;
  this.total = 0;
  this.tail = [];

  this.draw = function() {
    ctx.fillStyle = "#FFFFFF";
    for (let i=0; i<this.tail.length; i++) {
      ctx.fillRect(this.tail[i].x,
        this.tail[i].y, scale, scale);
    }
    ctx.fillRect(this.x, this.y, scale, scale);
  }

  this.update = function() {
    for (let i=0; i<this.tail.length - 1; i++) {
      this.tail[i] = this.tail[i+1];
    }

    this.tail[this.total - 1] =
      { x: this.x, y: this.y };

    this.x += this.xSpeed;
    this.y += this.ySpeed;

    if (this.x > canvas.width) {
      this.x = 0;
    }

    if (this.y > canvas.height) {
      this.y = 0;
    }

    if (this.x < 0) {
      this.x = canvas.width;
    }

    if (this.y < 0) {
      this.y = canvas.height;
    }
    window.stop();
    return false;
  }

  this.changeDirection = function(direction) {
    switch(direction) {
      case 'Up':
        this.xSpeed = 0;
        this.ySpeed = -scale * 1;
        break;
      case 'Down':
        this.xSpeed = 0;
        this.ySpeed = scale * 1;
        break;
      case 'Left':
        this.xSpeed = -scale * 1;
        this.ySpeed = 0;
        break;
      case 'Right':
        this.xSpeed = scale * 1;
        this.ySpeed = 0;
        break;
    }
  }

  this.eat = function(fruit) {
    if (this.x === fruit.x &&
      this.y === fruit.y) {
      this.total++;
      return true;
    }
    MainScore.innerHTML = this.total;
    return false;
  }

  this.checkCollision = function() {
    for (var i=0; i<this.tail.length; i++) {
      if (this.x === this.tail[i].x &&
        this.y === this.tail[i].y) {
        this.total = 0;
        this.tail = [];
        clearInterval(timer);
        modal.style.display = 'flex';
        EndButton.style.display = 'none';
        console.log(this.total)
      }
    }
  }
}
$(document).ready(function () {
  clearInterval(timer);
  EndButton.style.display = 'none';
});
StartBtn.addEventListener('click', () =>{

  modal.style.display = 'none';
  EndButton.style.display = 'block';
  (function setup() {
    fruit = new Fruit();
    snake = new Snake();
    fruit.pickLocation();
  
      timer = setInterval(() => {
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      fruit.draw();
      snake.update();
      snake.draw();
      if (snake.eat(fruit)) {
        fruit.pickLocation();
      }
      snake.checkCollision();
      document.querySelector('.score')
        .innerText = snake.total;
    }, 80);
  }());

})
EndButton.addEventListener('click',()=> {
  clearInterval(timer);
  modal.style.display = 'flex';
  EndButton.style.display = 'none';
})