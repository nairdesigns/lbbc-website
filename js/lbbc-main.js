$(document).ready(function(){
	
	// Dropdown Menu
	$(function () {
	  var $win = $(window);
	  $win.resize(function () {
	      if ($win.width() > 768)
	          $(".navbar-nav > .dropdown > a").attr("data-toggle", "");
	      else
	          $(".navbar-nav > .dropdown > a").attr("data-toggle", "dropdown");
	  }).resize();
	  $(".dropdown-menu").find("input, button").each(function () {
	      $(this).click(function (e) {
	          e.stopPropagation();
	      });
	  });
	});    

	// Google Map
    
         

	// Sticky Nav
	$(window).scroll(function(){ // when user scrolls
    
        if($(window).scrollTop() > 720) {
           $('body:not(#ministries) .header-container-wrapper').addClass('sticky');
        } 
        else{
           $('body:not(#ministries) .header-container-wrapper').removeClass('sticky');
        }
    });        
    
    $(function() {

          'use strict';

          $(document).on('show.bs.tab', '.nav-tabs-responsive [data-toggle="tab"]', function(e) {
            var $target = $(e.target);
            var $tabs = $target.closest('.nav-tabs-responsive');
            var $current = $target.closest('li');
            var $parent = $current.closest('li.dropdown');
            $current = $parent.length > 0 ? $parent : $current;
            var $next = $current.next();
            var $prev = $current.prev();
            var updateDropdownMenu = function($el, position){
              $el
                .find('.dropdown-menu')
                .removeClass('pull-xs-left pull-xs-center pull-xs-right')
                .addClass( 'pull-xs-' + position );
            };

            $tabs.find('>li').removeClass('next prev');
            $prev.addClass('prev');
            $next.addClass('next');
            
            updateDropdownMenu( $prev, 'left' );
            updateDropdownMenu( $current, 'center' );
            updateDropdownMenu( $next, 'right' );
          });

        });

        $(function() {
            $('.collapse.in').prev('.panel-heading').addClass('active');
            $('#accordion, #accordion2, #accordion3, #accordion4, #accordion5, #accordion6, #accordion7, #accordion8')
            .on('show.bs.collapse', function(a) {
              $(a.target).prev('.panel-heading').addClass('active');
            })
            .on('hide.bs.collapse', function(a) {
              $(a.target).prev('.panel-heading').removeClass('active');
            });
        });
    

	
	        
});