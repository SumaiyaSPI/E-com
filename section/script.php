    <!-- Plugins JS -->
    <script src="assets/js/plugins.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script>
              new WOW().init();
              </script> 
              <!--owlcarusol-->
              
         <script>


  


     
	
	
	
	

	<script src="assets/js/owl.carousel.min.js"></script>
<script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
				autoplay:false,
				autoplayTimeout:1000,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 1
                  },
                  1000: {
                    items: 1
                
                  }
                }
              })
            })
     </script>

<script>
  function GetUnique(item) {
    var outputArray = [];
    var classes = temp_c = [];
    var cols = ['col-md-1', 'col-md-2', 'col-md-3', 'col-md-4', 'col-md-6', 'col-md-12',
        'col-sm-1', 'col-sm-2', 'col-sm-3', 'col-sm-4', 'col-sm-6', 'col-sm-12',
        'col-lg-1', 'col-lg-2', 'col-lg-3', 'col-lg-4', 'col-lg-6', 'col-lg-12',
        'col-xs-1', 'col-xs-2', 'col-xs-3', 'col-xs-4', 'col-xs-6', 'col-xs-12',
        'col-xl-1', 'col-xl-2', 'col-xl-3', 'col-xl-4', 'col-xl-6', 'col-xl-12'];
    $(item).each(function() {
        var temp = $(item + ' > div').attr('class').split(/\s+/);
        for (var i = 0; i < temp.length; i++) {
            classes.push(temp[i]);
        }
    });
    for (var i = 0; i < classes.length; i++) {
        temp_c = classes[i].split('-');
        if (temp_c.length == 2) {
            temp_c.push('');
            temp_c[2] = temp_c[1];
            temp_c[1] = 'xs';
            classes[i] = temp_c.join("-");
        }
        if ($.inArray(classes[i], outputArray) == -1) {
            if ($.inArray(classes[i], cols)) {
                outputArray.push(classes[i]);
            }
        }
    }
    return outputArray;
}

function setcss(cls, item, item_inner) {
    var a = [];
    var b = ['', '', '', '', '', ''];
    var c = d = f = g = 0;
    var e = ['xl', 'lg', 'md', 'sm', 'xs'];
    var h = [1200, 992, 768, 567, 0];
    var i = '';
    var l = [];
    for (var i = 0; i < cls.length; i++) {
        var temp = cls[i].split('-');
        if (temp.length == 3) {
          switch (temp[1]) {
            case 'xl':
                d = 0; break;
            case 'lg':
                d = 1; break;
            case 'md':
                d = 2; break;
            case 'sm':
                d = 3; break;
            case 'xs':
                d = 4; 
          }
          b[d] = temp[2]; 
        }
    }
    for (var j = 0; j < b.length; j++) {
        if (b[j] != '') {
            if (c == 0) {
                c = (12 / b[j]);
            }
            f = 12 / b[j];
            g = 100 / f;
            i = item_inner + " > .carousel-item.active.carousel-item-right," + item_inner + " > .carousel-item.carousel-item-next {-webkit-transform: translate3d(" + g + "%, 0, 0);transform: translate3d(" + g + ", 0, 0);left: 0;}" + item_inner + " > .carousel-item.active.carousel-item-left," + item_inner + " > .carousel-item.carousel-item-prev {-webkit-transform: translate3d(-" + g + "%, 0, 0);transform: translate3d(-" + g + "%, 0, 0);left: 0;}" + item_inner + " > .carousel-item.carousel-item-left, " + item_inner + " > .carousel-item.carousel-item-prev.carousel-item-right, " + item_inner + " > .carousel-item.active {-webkit-transform: translate3d(0, 0, 0);transform: translate3d(0, 0, 0);left: 0;}";
            if (f > 1) {
                for (k = 0; k < (f - 1); k++) {
                    l.push(item + " .cloneditem-" + k);
                }
                if (l.length) {
                    i = i + l.join(',') + "{display: block;}";
                }
                l = [];
            }
            if (h[j] != 0) {
                i = "@media all and (min-width: " + h[j] + "px) and (transform-3d), all and (min-width:" + h[j] + "px) and (-webkit-transform-3d) {" + i + "}";
            }
            $('#slider-css').prepend(i);
        }
    }
    $(item).each(function() {
        var itemToClone = $(this);
        for (var i = 0; i < (c - 1); i++) {
            itemToClone = itemToClone.next();
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }
            itemToClone.children(':first-child').clone()
                .addClass("cloneditem-" + (i))
                .appendTo($(this));
        }
    });
}


//Use Different Slider IDs for multiple slider
$(document).ready(function() {
    var item = '#slider-1 .carousel-item';
    var item_inner = "#slider-1 .carousel-inner";
    classes = GetUnique(item);
    setcss(classes, item, item_inner);
    
    
    var item_1 = '#slider-2 .carousel-item';
    var item_inner_1 = "#slider-2 .carousel-inner";
    classes = GetUnique(item_1);
    setcss(classes, item_1, item_inner_1);
});
</script>


