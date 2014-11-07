Sprite = Class.extend({

 	canvas : document.createElement("canvas"),
  ctx = canvas.getContext('2d'),
 	x:0,
 	y:0,
  init: function(width, height) {
    //this._super();
      		
  	canvas.width  = width;
  	canvas.height = height;
       
		this.asset.ref = this;
      this.asset.onload = function() {
	      	console.log(" menu loaded! ");
	        // draw image at its original size      	
     	};
      this.asset.src = "assets/menu.png";
    },

    getCanvas: function() {
    	    	return this.canvas;
    }
});