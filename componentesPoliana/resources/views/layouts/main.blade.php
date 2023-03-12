<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>

	<!-- CSS files -->
	<link href="public/dist/css/tabler.min.css?1674944402" rel="stylesheet" />
	<link href="public/dist/css/tabler-flags.min.css?1674944402" rel="stylesheet" />
	<link href="public/dist/css/tabler-payments.min.css?1674944402" rel="stylesheet" />
	<link href="public/dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet" />
	<link href="public/dist/css/demo.min.css?1674944402" rel="stylesheet" />

	<style>
		@import url('https://rsms.me/inter/inter.css');

		:root {
			--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
		}

		body {
			font-feature-settings: "cv03", "cv04", "cv11";
		}
	</style>

	<!-- CSS extras-->

	<link rel="stylesheet" href="public/css/bootstrap.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>
    <script src="./dist/js/demo-theme.min.js?1674944402"></script>

    @yield('content')

    <!-- Libs JS -->
	<script src="./dist/libs/nouislider/dist/nouislider.min.js?1674944402" defer></script>
	<script src="./dist/libs/litepicker/dist/litepicker.js?1674944402" defer></script>
	<script src="./dist/libs/tom-select/dist/js/tom-select.base.min.js?1674944402" defer></script>
	<!-- Tabler Core -->
	<script src="./dist/js/tabler.min.js?1674944402" defer></script>
	<script src="./dist/js/demo.min.js?1674944402" defer></script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			window.noUiSlider && (noUiSlider.create(document.getElementById('range-simple'), {
				start: 20,
				connect: [true, false],
				step: 10,
				range: {
					min: 0,
					max: 100
				}
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			window.noUiSlider && (noUiSlider.create(document.getElementById('range-connect'), {
				start: [60, 90],
				connect: [false, true, false],
				step: 10,
				range: {
					min: 0,
					max: 100
				}
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			window.noUiSlider && (noUiSlider.create(document.getElementById('range-color'), {
				start: 40,
				connect: [true, false],
				step: 10,
				range: {
					min: 0,
					max: 100
				}
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			window.Litepicker && (new Litepicker({
				element: document.getElementById('datepicker-default'),
				buttonText: {
					previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
					nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			window.Litepicker && (new Litepicker({
				element: document.getElementById('datepicker-icon'),
				buttonText: {
					previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
					nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			window.Litepicker && (new Litepicker({
				element: document.getElementById('datepicker-icon-prepend'),
				buttonText: {
					previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
					nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			window.Litepicker && (new Litepicker({
				element: document.getElementById('datepicker-inline'),
				buttonText: {
					previousMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 6l-6 6l6 6" /></svg>`,
					nextMonth: `<!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 6l6 6l-6 6" /></svg>`,
				},
				inlineMode: true,
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var el;
			window.TomSelect && (new TomSelect(el = document.getElementById('select-tags'), {
				copyClassesToDropdown: false,
				dropdownClass: 'dropdown-menu ts-dropdown',
				optionClass: 'dropdown-item',
				controlInput: '<input>',
				render: {
					item: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
					option: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var el;
			window.TomSelect && (new TomSelect(el = document.getElementById('select-tags-advanced'), {
				copyClassesToDropdown: false,
				dropdownClass: 'dropdown-menu ts-dropdown',
				optionClass: 'dropdown-item',
				controlInput: '<input>',
				render: {
					item: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
					option: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var el;
			window.TomSelect && (new TomSelect(el = document.getElementById('select-users'), {
				copyClassesToDropdown: false,
				dropdownClass: 'dropdown-menu ts-dropdown',
				optionClass: 'dropdown-item',
				controlInput: '<input>',
				render: {
					item: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
					option: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var el;
			window.TomSelect && (new TomSelect(el = document.getElementById('select-optgroups'), {
				copyClassesToDropdown: false,
				dropdownClass: 'dropdown-menu ts-dropdown',
				optionClass: 'dropdown-item',
				controlInput: '<input>',
				render: {
					item: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
					option: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var el;
			window.TomSelect && (new TomSelect(el = document.getElementById('select-people'), {
				copyClassesToDropdown: false,
				dropdownClass: 'dropdown-menu ts-dropdown',
				optionClass: 'dropdown-item',
				controlInput: '<input>',
				render: {
					item: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
					option: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var el;
			window.TomSelect && (new TomSelect(el = document.getElementById('select-countries'), {
				copyClassesToDropdown: false,
				dropdownClass: 'dropdown-menu ts-dropdown',
				optionClass: 'dropdown-item',
				controlInput: '<input>',
				render: {
					item: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
					option: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var el;
			window.TomSelect && (new TomSelect(el = document.getElementById('select-labels'), {
				copyClassesToDropdown: false,
				dropdownClass: 'dropdown-menu ts-dropdown',
				optionClass: 'dropdown-item',
				controlInput: '<input>',
				render: {
					item: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
					option: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var el;
			window.TomSelect && (new TomSelect(el = document.getElementById('select-countries-valid'), {
				copyClassesToDropdown: false,
				dropdownClass: 'dropdown-menu ts-dropdown',
				optionClass: 'dropdown-item',
				controlInput: '<input>',
				render: {
					item: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
					option: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var el;
			window.TomSelect && (new TomSelect(el = document.getElementById('select-countries-invalid'), {
				copyClassesToDropdown: false,
				dropdownClass: 'dropdown-menu ts-dropdown',
				optionClass: 'dropdown-item',
				controlInput: '<input>',
				render: {
					item: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
					option: function(data, escape) {
						if (data.customProperties) {
							return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
						}
						return '<div>' + escape(data.text) + '</div>';
					},
				},
			}));
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			let sliderTriggerList = [].slice.call(document.querySelectorAll("[data-slider]"));
			sliderTriggerList.map(function(sliderTriggerEl) {
				let options = {};
				if (sliderTriggerEl.getAttribute("data-slider")) {
					options = JSON.parse(sliderTriggerEl.getAttribute("data-slider"));
				}
				let slider = noUiSlider.create(sliderTriggerEl, options);
				if (options['js-name']) {
					window[options['js-name']] = slider;
				}
			});
		});
	</script>

</body>

</html>