
//Create Config File To pass default parameters
var config = {
    parent: '.col-12',
    type: Phaser.CANVAS,
    antialias: false,
    physics: {
        default: 'arcade',
        arcade: {
            gravity: { y: 300 },
            debug: false
        }
    },
    scale: {
        mode: Phaser.Scale.FIT,
        width: window.innerWidth,
        height: window.innerHeight
    },
    scene: {
        preload: preload,
        create: create,
        update: update,
    }

};

var game = new Phaser.Game(config);

//LOAD GAME ASSETS
function preload() {
    this.load.image('background', '/images/jumperimages/background.png');
    this.load.image('ground', '/images/jumperimages/ground.png');
    this.load.image('point', "/images/jumperimages/point.png");
    this.load.spritesheet('player', '/images/jumperimages/playersheet.png', { frameWidth: 16, frameHeight: 16 });
}


//CREATE THE GAME OBJECTS
var platforms;
var cursors;

function create() {
    //BACKGROUND IMAGE
    // var bg = this.add.tileSprite(0, 0, game.config.width, game.config.height, "background");
    // this.bg.setOrigin(0, 0);
    // this.bg.setScrollFactor(0);




    //Platforms
    platforms = this.physics.add.staticGroup();

    platforms.create(700, 680, 'ground').setScale(window.innerWidth, 2).refreshBody();

    platforms.create(900, 600, 'ground');
    platforms.create(750, 250, 'ground');
    platforms.create(750, 520, 'ground');
    platforms.create(750, 630, 'ground');

    //PLAYER
    player = this.physics.add.sprite(100, 450, 'player');
    player.setScale(3);

    player.setBounce(0.1);
    player.setCollideWorldBounds(true);

    this.anims.create({
        key: 'left',
        frames: this.anims.generateFrameNumbers('player', { start: 0, end: 1 }),
        frameRate: 10,
        repeat: -1
    });

    this.anims.create({
        key: 'right',
        frames: this.anims.generateFrameNumbers('player', { start: 3, end: 4 }),
        frameRate: 10,
        repeat: -1
    });

    this.anims.create({
        key: 'idle',
        frames: this.anims.generateFrameNumbers('player', { start: 2, end: 2 }),
        frameRate: 10
    })

    cursors = this.input.keyboard.createCursorKeys();

    //Checks collisions between player and static object
    this.physics.add.collider(player, platforms);


}


//UPDATE THE FRAMES OF THE GAME OBJECTS
function update() {
    if (cursors.left.isDown) {
        player.setVelocityX(-160);
        player.anims.play('left', true);
    }
    else if (cursors.right.isDown) {
        player.setVelocityX(160);
        player.anims.play('right', true);
    }
    else {
        player.setVelocityX(0);
        player.anims.play('idle');
    }

    if (cursors.up.isDown && player.body.touching.down) {
        player.setVelocityY(-300);
    }

}



