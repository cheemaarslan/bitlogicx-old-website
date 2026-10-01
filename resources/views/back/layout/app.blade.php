<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="_token" content="{{ csrf_token() }}" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />
    {{-- @php
        $setting = App\Models\Setting::first();
    @endphp --}}
    <title>Admin-Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    {{-- <link rel="icon" type="image/x-icon" href="{{$setting->app_favicon}}" /> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('back/assets/css/demo.css') }}" />
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/toastr/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('back/assets/vendor/libs/flatpickr/flatpickr.min.css') }}">
    <!-- Helpers -->
    <script src="{{ asset('back/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ asset('back/assets/js/config.js') }}"></script>
    @yield('css')
    <style>

      .select2-container--default .select2-selection--multiple{
        height: 40px !important;
        padding-top: 5px !important;
        padding-left:5px !important;
      }

      .select2-container--default .select2-selection--single{
        height: 40px !important;
        padding-top: 5px !important;
      }

      .select2-container--default .select2-selection--single .select2-selection__arrow{
        margin-top:5px !important;
      }

      .my-class{

        font-size: 14px !important;

      }

      .my-link-class{

        
      }

      .suggestions {
        position: absolute;
        z-index: 1;
        width: 600px;
        background-color: white;
        border-top: none;
        border-bottom: 2px solid paleturquoise;
        border-left: 2px solid paleturquoise;
        border-right: 2px solid paleturquoise;
        list-style: none;
        padding: 0;
        margin: 0;
        top: 62px;
        left: 1px;
        font-size: 14px !important;

        
        
      }
      .suggestions li {
        padding: 10px 20px;
        font-size: 20px;
       
      }
      .suggestions li:hover {
        background-color: lightgray;
        cursor: pointer;
      }
      .suggestions .active {
        background-color: lightgray;
        cursor: pointer;
      }
    </style>
  </head>

  <body>

    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
          @include('back.layout.sidebar')
          <div class="layout-page">
              @include('back.layout.header')
              <div class="content-wrapper mt-4">
                <div class="container-fluid">
                  @include('back.layout.errors')
                  @include('back.layout.status')
                  @yield('content')
                </div>
              </div>
          </div>
      </div>
    </div>
    <script src="{{ asset('back/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/js/bootstrap.js') }}"></script>

    <script src="{{ asset('back/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/toastr/js/toastr.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ asset('back/assets/vendor/libs/flatpickr/flatpickr.min.js') }}"></script>

    <script src="{{ asset('back/assets/vendor/js/menu.js') }}"></script>
    <script src="{{ asset('back/assets/js/extended-ui-perfect-scrollbar.js') }}"></script>

    <script src="{{ asset('back/assets/js/main.js') }}"></script>

    <script src="{{ asset('back/assets/js/dashboards-analytics.js') }}"></script>
    @yield('script')
    @stack('script')
    @yield('modal')
    <script>
        window.addEventListener('alert', event => {
            if (event.detail.type == "success") {
                toastr.success(event.detail.message, event.detail.title, {
                    positionClass: "toast-bottom-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                });

            } else {
                toastr.error(event.detail.message, event.detail.title, {
                    positionClass: "toast-bottom-right",
                    timeOut: 5e3,
                    closeButton: !0,
                    debug: !1,
                    newestOnTop: !0,
                    progressBar: !0,
                    preventDuplicates: !0,
                    onclick: null,
                    showDuration: "300",
                    hideDuration: "1000",
                    extendedTimeOut: "1000",
                    showEasing: "swing",
                    hideEasing: "linear",
                    showMethod: "fadeIn",
                    hideMethod: "fadeOut",
                    tapToDismiss: !1
                });
            }

        });
    </script>
    <script>
        var suggestions = [{
                value: "Setting",
                link: "{{ route('setting.index') }}"
            },
            {
                value: 'Template',
                link: "{{ route('template.index') }}"
            },
            {
                value: 'View All Contact',
                link: "{{ route('contact.index') }}"
            },
            {
                value: 'View All Applications',
                link: "{{ route('application.index') }}"
            },
            {
                value: 'Create Project',
                link: "{{ route('project.create') }}"
            },
            {
                value: 'View All Projects',
                link: "{{ route('project.index') }}"
            },
            {
                value: 'Create Service',
                link: "{{ route('service.create') }}"
            },
            {
                value: 'View All Services',
                link: "{{ route('service.index') }}"
            },
            {
                value: 'Create Process',
                link: "{{ route('process.create') }}"
            },
            {
                value: 'View All Process',
                link: "{{ route('process.index') }}"
            },
            {
                value: 'Create Team',
                link: "{{ route('team.create') }}"
            },
            {
                value: 'View All Team',
                link: "{{ route('team.index') }}"
            },
        ];

        // Get the search input and suggestion list elements
        var searchInput = document.getElementById('search');
        var suggestionList = document.querySelector('.suggestions');



        // Add an event listener for the input event on the search input
        searchInput.addEventListener('input', function() {
            // Get the value of the search input
            var searchValue = this.value;

            if (searchValue.length) {

                // Clear the suggestion list
                suggestionList.innerHTML = '';
                var matchFound = false;

                // Loop through the suggestions array and add a new li element for each suggestion
                for (var i = 0; i < suggestions.length; i++) {
                    var suggestion = suggestions[i];

                    // Only add suggestions that match the search value
                    if (suggestion.value.toLowerCase().indexOf(searchValue.toLowerCase()) !== -1) {
                        matchFound = true;
                        var suggestionElement = document.createElement('li');
                        suggestionElement.className = 'my-class';
                        suggestionElement.innerHTML = '<a class="my-link-class" href="' + suggestion.link + '">' + suggestion.value +
                            '</a>';
                        suggestionList.appendChild(suggestionElement);
                    }
                }
                if (!matchFound) {
                    var noResult = document.createElement('li');
                    noResult.innerHTML = 'No Results Found';
                    suggestionList.appendChild(noResult);
                }
            } else {
                suggestionList.innerHTML = '';
            }

        });
        var currentSuggestion = -1;

        searchInput.addEventListener('keydown', function(e) {
            var suggestionElements = suggestionList.getElementsByTagName('li');
            if (suggestionElements.length > 0) {
                if (e.keyCode === 38) { // up arrow key
                    if (currentSuggestion > 0) {
                        currentSuggestion--;
                    }
                } else if (e.keyCode === 40) { // down arrow key
                    if (currentSuggestion < suggestionElements.length - 1) {
                        currentSuggestion++;
                    }
                } else if (e.keyCode === 13) { // enter key
                    window.location.href = suggestionElements[currentSuggestion].getElementsByTagName("a")[0].href;
                }
                for (var i = 0; i < suggestionElements.length; i++) {
                    suggestionElements[i].classList.remove('active');
                }
                suggestionElements[currentSuggestion].classList.add('active');
                searchInput.value = suggestionElements[currentSuggestion].innerText;
            }
        });

        // Add an event listener for the click event on the suggestion list
        suggestionList.addEventListener('click', function(event) {
            // If the clicked element is an anchor tag, set the value of the search input to the clicked suggestion and submit the form
            if (event.target.tagName === 'A') {
                searchInput.value = event.target.innerText;
                suggestionList.innerHTML = '';
                // You can add code here to submit the form
            }
        });
    </script>
  </body>
</html>
