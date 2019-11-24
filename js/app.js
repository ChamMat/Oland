// const app = {

//     init: function(){
//         app.creatListener();
//     },

//     creatListener:function(){
        
//         for(var i = 0; i<100; i+=1){
//             var tile = document.getElementById('tile'+ (parseInt(i+1)));

//             tile.addEventListener("click", app.handleTileClick);
//         }
//     },

//     handleTileClick:function(evt){
//         var tileId = evt.path[2].id.split("tile")[1];
//         console.log(tileId);
//         var personnage = evt.path[0].className;
//         personnage = personnage.split(" ");
//         personnage = personnage[1];
//         if(personnage.length >  0){
//             console.log("personnage ok");
//         }
//     }

// }

// document.addEventListener("DOMContentLoaded", app.init);