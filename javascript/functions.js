
// get event pos, from mouse or touch
var getEventPos = function(e, offset) {
  
  offset = offset || false;
  
  var clickX, clickY;
  
  clickX = e.touches === undefined ? e.pageX : e.touches.length != 0 ? e.touches[0].pageX : e.changedTouches[0].pageX;
  clickY = e.touches === undefined ? e.pageY : e.touches.length != 0 ? e.touches[0].pageY : e.changedTouches[0].pageY;
  
  if(offset) {
    clickX -= offset.offset().left;
    clickY -= offset.offset().top;
  }
  
  return new S.Coord(clickX, clickY);
  
}