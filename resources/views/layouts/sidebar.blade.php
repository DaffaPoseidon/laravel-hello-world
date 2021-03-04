@extends('layouts.master')
@section('sidebar')

(function ($, window, document, undefined) {

	var name = 'glide',
		defaults = {

			// {Int or Bool} False for turning off autoplay
			autoplay: 4000,
			// {Bool} Pause autoplay on mouseover slider
			hoverpause: true,

			// {Bool} Circual play
			circular: true,

			// {Int} Animation time
			animationDuration: 500,
			// {String} Animation easing function
			animationTimingFunc: 'cubic-bezier(0.165, 0.840, 0.440, 1.000)',

			/**
			 * {Bool or String} Show/hide/appendTo arrows
			 * True for append arrows to slider wrapper
			 * False for not appending arrows
			 * Id or class name (e.g. '.class-name') for appending to specific HTML markup
			 */
			arrows: true,
			// {String} Arrows wrapper class
			arrowsWrapperClass: 'slider-arrows',
			// {String} Main class for both arrows
			arrowMainClass: 'slider-arrow',
			// {String} Right arrow
			arrowRightClass: 'slider-arrow--right',
			// {String} Right arrow text
			arrowRightText: '',
			// {String} Left arrow
			arrowLeftClass: 'slider-arrow--left',
			// {String} Left arrow text
			arrowLeftText: '',

			/**
			 * {Bool or String} Show/hide/appendTo bullets navigation
			 * True for append arrows to slider wrapper
			 * False for not appending arrows
			 * Id or class name (e.g. '.class-name') for appending to specific HTML markup
			 */
			navigation: true,
			// {Bool} Center bullet navigation
			navigationCenter: true,
			// {String} Navigation class
			navigationClass: 'slider-nav',
			// {String} Navigation item class
			navigationItemClass: 'slider-nav__item',
			// {String} Current navigation item class
			navigationCurrentItemClass: 'slider-nav__item--current',

			// {Bool} Slide on left/right keyboard arrows press
			keyboard: true,

			// {Int or Bool} Touch settings
			touchDistance: 60,

			// {Function} Callback before plugin init
			beforeInit: function() {},
			// {Function} Callback after plugin init
			afterInit: function() {},

			// {Function} Callback before slide change
			beforeTransition: function() {},
			// {Function} Callback after slide change
			afterTransition: function() {}

		};

@endsection