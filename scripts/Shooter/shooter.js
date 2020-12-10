const canvas = document.querySelector('canvas')
const c = canvas.getContext('2d')
const StartBtn = document.querySelector('#StartBtn')
const ScoreEl = document.querySelector('#ScoreEl')
const modal = document.querySelector('#modal')
const MainScore = document.querySelector('#MainScore')
canvas.width = innerWidth
canvas.height = innerHeight

class Player {
    constructor(x, y, radius, color) {
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
    }
    draw() {
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        c.fillStyle = this.color
        c.fill()
    }
}

class Projectile {
    constructor(x, y, radius, color, velocity) {
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.velocity = velocity
    }
    draw() {
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        c.fillStyle = this.color
        c.fill()
    }
    update() {
        this.draw()
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
    }
}
class Enemy {
    constructor(x, y, radius, color, velocity) {
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.velocity = velocity
    }
    draw() {
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        c.fillStyle = this.color
        c.fill()
    }
    update() {
        this.draw()
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
    }
}
const friction = 0.98
class Particle {
    constructor(x, y, radius, color, velocity) {
        this.x = x
        this.y = y
        this.radius = radius
        this.color = color
        this.velocity = velocity
        this.alpha = 1
    }
    draw() {
        c.save()
        c.globalAlpha = this.alpha
        c.beginPath()
        c.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false)
        c.fillStyle = this.color
        c.fill()
        c.restore()
    }
    update() {
        this.draw()
        this.velocity.x *= friction
        this.velocity.y *= friction
        this.x = this.x + this.velocity.x
        this.y = this.y + this.velocity.y
        this.alpha -= 0.01
    }
}

let projectiles = []
let enemies = []
let particles = []
let player = new Player(canvas.width / 2, canvas.height / 2, 10, 'white')

function reset() {
    projectiles = []
    enemies = []
    particles = []
    player = new Player(canvas.width / 2, canvas.height / 2, 10, 'white')
    score = 0
    ScoreEl.innerHTML = score
    MainScore.innerHTML = score
}
function spawnEnemies() {
    setInterval(() => {
        const radius = Math.random() * (30 - 7) + 7
        let x;
        let y;
        if (Math.random() < 0.5) {
            x = Math.random() < 0.5 ? 0 - radius : canvas.width + radius
            y = Math.random() * canvas.height
        }
        else {
            x = Math.random() * canvas.width
            y = Math.random() < 0.5 ? 0 - radius : canvas.height + radius
        }
        const color = `hsl(${Math.random() * 360},50%,50%)`
        const angle = Math.atan2(canvas.height / 2 - y, canvas.width / 2 - x)
        const velocity = {
            x: Math.cos(angle),
            y: Math.sin(angle)
        }
        enemies.push(new Enemy(x, y, radius, color, velocity))
    }, 1000)
}

let animationId
let score = 0
function animate() {
    animationId = requestAnimationFrame(animate)
    c.fillStyle = 'rgba(0,0,0,0.1)'
    c.fillRect(0, 0, canvas.width, canvas.height)
    player.draw()
    particles.forEach((particle, index) => {
        if (particle.alpha <= 0) {
            particles.splice(index, 1)
        } else {
            particle.update()
        }
    })

    projectiles.forEach((projectile, index) => {
        projectile.update()
        if (projectile.x - projectile.radius < 0 || projectile.x - projectile.radius > canvas.width || projectile.y + projectile.radius < 0 || projectile.y - projectile.radius > canvas.height) {
            setTimeout(() => {
                projectiles.splice(index, 1)
            }, 0);
        }
    })
    //endGame
    enemies.forEach((enemy, index) => {
        enemy.update()
        const playerdist = Math.hypot(player.x - enemy.x, player.y - enemy.y)
        if (playerdist - enemy.radius - player.radius < 1) {
            cancelAnimationFrame(animationId)
            modal.style.display = 'flex'
            MainScore.innerHTML = score
        }
        projectiles.forEach((projectile, projectileindex) => {
            const dist = Math.hypot(projectile.x - enemy.x, projectile.y - enemy.y)
            //Projectile Hits Enemy
            if (dist - enemy.radius - projectile.radius < 1) {

                //Explosions
                for (let i = 0; i < enemy.radius * 2; i++) {
                    particles.push(new Particle(projectile.x, projectile.y, Math.random() * 2, enemy.color, { x: (Math.random() - 0.5) * (6), y: (Math.random() - 0.5) * (6) }))
                }
                if (enemy.radius - 10 > 5) {
                    //Increase score
                    score += 100
                    ScoreEl.innerHTML = score

                    gsap.to(enemy, {
                        radius: enemy.radius - 10
                    })
                    setTimeout(() => {
                        projectiles.splice(projectileindex, 1)
                    }, 0)
                } else {
                    //Increase score
                    score += 250
                    ScoreEl.innerHTML = score
                    setTimeout(() => {
                        enemies.splice(index, 1)
                        projectiles.splice(projectileindex, 1)

                    }, 0)
                }
            }
        })
    })
}

addEventListener('click', (event) => {
    const angle = Math.atan2(event.clientY - canvas.height / 2, event.clientX - canvas.width / 2)
    const velocity = {
        x: Math.cos(angle) * 5,
        y: Math.sin(angle) * 5
    }
    projectiles.push(new Projectile(
        canvas.width / 2, canvas.height / 2, 5, 'white', velocity
    ))
})

StartBtn.addEventListener('click', () => {
    reset()
    animate()
    spawnEnemies()
    modal.style.display = 'none'
})
