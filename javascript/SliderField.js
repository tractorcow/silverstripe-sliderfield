
(function($){
	$.entwine('ss', function($) {
		$('input.slider').entwine({
			getMin: function() {
				return this.data('min')
			},
			getMax: function() {
				return this.data('max')
			},
			getOrientation: function() {
				return this.data('orientation');
			},
			limitValue: function() {
				var val = this.getCleanVal();
				if(isNaN(val)) val = 0;
				val = Math.max(this.getMin(), Math.min(this.getMax(), val));
				this.val(val);
				return val;
			},
			getCleanVal: function(){
				return parseInt(this.val().replace(/,/g, ""))
			}
			onmatch: function() {
				var self = this;
				var val = self.limitValue();
				// setup slider controller
				$("<div class='slide-controller'></div>")
					.insertAfter(this)
					.slider({
						orientation: self.getOrientation(),
						range: "min",
						value: val,
						min: self.getMin(),
						max: self.getMax(),
						slide: function( event, ui ) {
							self.val( ui.value );
						}
					});
			},
			onchange: function() {
				this
					.siblings('.slide-controller')
					.slider("value", this.limitValue());
			}
		});
	});
})(jQuery);
