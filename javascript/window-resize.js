
WindowResize = {
  
  timer: null,
  
  init: function() {
    
    var that = this;
    
    that.window = $(window);
    
    that.window.resize(function(){
      clearTimeout(that.timer);
      that.timer = setTimeout(function(){that.resizeOver();}, 500);
    });
    
  },
  
  resizeOver: function() {
    this.window.trigger('resizeOver', {
      width: this.window.width(),
      height: this.window.height()
    });
  }
  
}
