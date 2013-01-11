
// close method for views
Backbone.View.prototype.close = function() {

  if (this.beforeClose) {
      this.beforeClose();
  }

  this.remove();
  this.unbind();

}

// assign method for subviews
Backbone.View.prototype.assign = function (selector, view) {
  var selectors;

  if (_.isObject(selector)) {
    selectors = selector;
  }
  else {
    selectors = {};
    selectors[selector] = view;
  }

  if (!selectors) return;

  _.each(selectors, function (view, selector) {
    view.setElement(this.$(selector)).render();
  }, this);
}

// handle errors with ajax requests
Backbone.View.prototype.handleError = function(data) {
  
  if(data != null && data.error) {
    this.message = new ET.Error(data.error);
    return false;
  }
  return true;
  
}