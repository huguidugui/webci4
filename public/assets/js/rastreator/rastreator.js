const img1 = document.getElementById('img1');
const img2 = document.getElementById('img2');
const img3 = document.getElementById('img3');
const img4 = document.getElementById('img4');
const img5 = document.getElementById('img5');
const img6 = document.getElementById('img6');
const img7 = document.getElementById('img7');

const blanco1 = document.getElementById('blanco1');
const blanco2 = document.getElementById('blanco2');


const elemento = document.getElementById("wraper-outsides");


/***  DOBLEs START ******************************* */
/* const img1WPdown = new Waypoint({
    element: img1,
    handler: function(direction) {
        if ( direction === "down" ) {
            img1.classList.remove("d-none")
            img1.classList.add("animate__animated")
            img1.classList.add("animate__fadeInDown")
        } 
    },
    offset: "-15%"
});

const img1WPup = new Waypoint({
    element: img1,
    handler: function(direction) {
        if ( direction === "up" ) {
            img1.classList.remove("animate__animated")
            img1.classList.remove("animate__fadeInDown")
            img1.classList.add("d-none")
        }
    },
    offset: "85%"
});

const img2WPdown = new Waypoint({
    element: img2,
    handler: function(direction) {
        if ( direction === "down" ) {
            img2.classList.remove("d-none")
            img2.classList.add("animate__animated")
            img2.classList.add("animate__fadeInDown")
        } 
    },
    offset: "-30%"
});

const img2WPup = new Waypoint({
    element: img2,
    handler: function(direction) {
        if( direction === "up" ) {
            img2.classList.remove("animate__animated")
            img2.classList.remove("animate__fadeInDown")
            img2.classList.add("d-none")
        }
    },
    offset: "60%"
});

const img3WPdown = new Waypoint({
    element: img3,
    handler: function(direction) {
        if ( direction === "down" ) {
            img3.classList.remove("d-none")
            img3.classList.add("animate__animated")
            img3.classList.add("animate__fadeInDown")
        }
    },
    offset: "-50%"
});

const img3WPup = new Waypoint({
    element: img3,
    handler: function(direction) {
        if( direction === "up" ) {
            img3.classList.remove("animate__animated")
            img3.classList.remove("animate__fadeInDown")
            img3.classList.add("d-none")
        }
    },
    offset: "85%"
});

const img4WPdown = new Waypoint({
    element: img4,
    handler: function(direction) {
        if ( direction === "down" ) {
            img4.classList.remove("d-none")
            img4.classList.add("animate__animated")
            img4.classList.add("animate__fadeInDown")
        }
    },
    offset: "-95%"
});
const img4WPup = new Waypoint({
    element: img4,
    handler: function(direction) {
        if( direction === "up" ) {
            img4.classList.remove("animate__animated")
            img4.classList.remove("animate__fadeInDown")
            img4.classList.add("d-none")
        }
    },
    offset: "15%"
}); */

/***  DOBLEs END ******************************* */

const img1WP = new Waypoint({
    element: elemento,
    handler: function(direction) {
        if ( direction === "down" ) {
            img1.classList.remove("d-none")
            img1.classList.add("animate__animated")
            img1.classList.add("animate__fadeInDown")
        } else if( direction === "up" ) {
            img1.classList.remove("animate__animated")
            img1.classList.remove("animate__fadeInDown")
            img1.classList.add("d-none")
        }
    },
    offset: -450
}); 

const img2WP = new Waypoint({
    element: elemento,
    handler: function(direction) {
        if ( direction === "down" ) {
            img2.classList.remove("d-none")
            img2.classList.add("animate__animated")
            img2.classList.add("animate__fadeInDown")
        } else if( direction === "up" ) {
            img2.classList.remove("animate__animated")
            img2.classList.remove("animate__fadeInDown")
            img2.classList.add("d-none")
        }
    },
    offset: -900
});

const blanco1WP = new Waypoint({
    element: elemento,
    handler: function(direction) {
        if ( direction === "down" ) {
            blanco1.classList.remove("d-none")
            blanco1.classList.add("animate__animated")
            blanco1.classList.add("animate__fadeInDown")
        } else if( direction === "up" ) {
            blanco1.classList.remove("animate__animated")
            blanco1.classList.remove("animate__fadeInDown")
            blanco1.classList.add("d-none")
        }
    },
    offset: -1350
});

const img3WP = new Waypoint({
    element: elemento,
    handler: function(direction) {
        if ( direction === "down" ) {
            img3.classList.remove("d-none")
            img3.classList.add("animate__animated")
            img3.classList.add("animate__fadeInDown")
        } else if( direction === "up" ) {
            img3.classList.remove("animate__animated")
            img3.classList.remove("animate__fadeInDown")
            img3.classList.add("d-none")
        }
    },
    offset: -1800
});

const img4WP = new Waypoint({
    element: elemento,
    handler: function(direction) {
        if ( direction === "down" ) {
            img4.classList.remove("d-none")
            img4.classList.add("animate__animated")
            img4.classList.add("animate__fadeInDown")
        } else if( direction === "up" ) {
            img4.classList.remove("animate__animated")
            img4.classList.remove("animate__fadeInDown")
            img4.classList.add("d-none")
        }
    },
    offset: -2250
});
const blanco2WP = new Waypoint({
    element: elemento,
    handler: function(direction) {
        if ( direction === "down" ) {
            blanco2.classList.remove("d-none")
            blanco2.classList.add("animate__animated")
            blanco2.classList.add("animate__fadeInDown")
        } else if( direction === "up" ) {
            blanco2.classList.remove("animate__animated")
            blanco2.classList.remove("animate__fadeInDown")
            blanco2.classList.add("d-none")
        }
    },
    offset: -2700
});

const img5WP = new Waypoint({
    element: elemento,
    handler: function(direction) {
        if ( direction === "down" ) {
            img5.classList.remove("d-none")
            img5.classList.add("animate__animated")
            img5.classList.add("animate__fadeInDown")
        } else if( direction === "up" ) {
            img5.classList.remove("animate__animated")
            img5.classList.remove("animate__fadeInDown")
            img5.classList.add("d-none")
        }
    },
    offset: -3150
});

const img6WP = new Waypoint({
    element: elemento,
    handler: function(direction) {
        if ( direction === "down" ) {
            img6.classList.remove("d-none")
            img6.classList.add("animate__animated")
            img6.classList.add("animate__fadeInDown")
        } else if( direction === "up" ) {
            img6.classList.remove("animate__animated")
            img6.classList.remove("animate__fadeInDown")
            img6.classList.add("d-none")
        }
    },
    offset: -3555
});
/* 



const img7WP = new Waypoint({
    element: elemento,
    handler: function(direction) {
        if ( direction === "down" ) {
            img7.classList.remove("d-none")
            img7.classList.add("animate__animated")
            img7.classList.add("animate__fadeInDown")
        } else if( direction === "up" ) {
            img7.classList.remove("animate__animated")
            img7.classList.remove("animate__fadeInDown")
            img7.classList.add("d-none")
        }
    },
    offset: "-99%"
}); */