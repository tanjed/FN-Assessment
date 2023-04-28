class BlueSquareAnimation {
    constructor(squareElement) {
        this.squareElement = squareElement;
        this.squareX = 0;
        this.squareY = 50;
        this.moveRight = true;
        this.moveDown = true;
        this.windowWidth = window.innerWidth - this.squareElement.clientWidth;
        this.windowHeight = window.innerHeight - this.squareElement.clientHeight;

        //Change these values for smoother animation 
        this.moveFromX = 10; //in px
        this.moveFromY = 10; //in px
        this.moveInterval = 1; //in sec
    }

    start() {
        this.intervalId = setInterval(() => {
            this.moveSquare();
        }, this.moveInterval * 1000);
    }

    moveSquare() {
        //Moving on X axis
        if (this.moveRight) {
            this.squareX += this.moveFromX;
            if (this.squareX >= this.windowWidth) this.moveRight = false;
        } 
        else {
            this.squareX -= this.moveFromX;
            if (this.squareX <= 0) this.moveRight = true;
        }

        //Moving on Y axis
        if (this.moveDown) {
            this.squareY += this.moveFromY;
            if (this.squareY >= this.windowHeight) this.moveDown = false;
        } 
        else {
            this.squareY -= this.moveFromY;
            if (this.squareY <= 0) this.moveDown = true;
        }
        
        //setting square co-ordinate
        this.squareElement.style.top = `${this.squareY}px`;
        this.squareElement.style.left = `${this.squareX}px`;
    }
}

const squareElement = document.getElementById('square');
const blueSquareAnimation = new BlueSquareAnimation(squareElement);
blueSquareAnimation.start();