<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Laravel Notify v3</title>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <!-- Custom built theme - This already includes Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('vendor/mckenziearts/laravel-notify/css/demo.css') }}">
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="h-screen text-gray-500 transition duration-100 ease-in-out bg-gray-50 font-body">

  <div class="bg-white">
    <header class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
      <div class="flex items-center justify-between py-6 border-b border-gray-200">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            @include('notify::layout.logo')
          </div>
          <h5 class="ml-3 text-2xl font-medium leading-6 text-gray-600 sm:text-4xl">
            Laravel <strong class="font-semibold text-pink-500">Notify</strong>
            <span class="ml-1 text-base font-semibold text-pink-500">v2.0</span>
          </h5>
        </div>
        <div>
          <a href="https://github.com/mckenziearts/laravel-notify" class="inline-flex justify-center leading-6 text-gray-400 transition duration-150 ease-in-out hover:text-gray-600">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd"
                    d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z"
                    clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </header>
  </div>

  <main>
    <div class="relative overflow-hidden bg-white">
      <div class="relative max-w-screen-xl px-4 py-8 mx-auto sm:py-12 sm:px-6 lg:px-8 md:py-20 xl:py-24">
        <svg class="absolute hidden transform -translate-x-1/2 -translate-y-10 lg:block left-full" width="404" height="784" fill="none" viewBox="0 0 404 784">
          <defs>
            <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
            </pattern>
          </defs>
          <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)"></rect>
        </svg>
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
          <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
            <span class="inline-flex items-center px-3 py-1 text-base font-medium leading-5 text-pink-800 bg-pink-100 rounded-full">
              <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-pink-400" fill="currentColor" viewBox="0 0 8 8">
                <circle cx="4" cy="4" r="3" />
              </svg>
              Version 2.0
            </span>
            <h2 class="mt-1 text-4xl font-extrabold leading-10 tracking-tight text-gray-900 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl">
              Notify for Laravel
            </h2>
            <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl">
              Version 2 is Here 🤩 ! Laravel Notify is a package that lets you add custom notifications to your project. A diverse range of notification design with
              <a href="https://tailwindcss.com" class="font-semibold text-gray-900">TailwindCSS</a> and <a href="https://tailwindui.com" class="font-semibold text-gray-900">TailwindUI</a>.
            </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
              <div class="rounded-md shadow">
                <a href="https://github.com/mckenziearts/laravel-notify"
                   class="flex items-center justify-center w-full px-6 py-3 text-base font-medium leading-5 text-white transition duration-150 ease-in-out bg-pink-600 border border-transparent rounded-md hover:bg-pink-500 focus:outline-none focus:shadow-outline-red md:py-4 md:text-lg md:px-10">
                  Getting Started
                </a>
              </div>
            </div>
          </div>
          <div class="relative mt-12 sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
            <svg class="absolute top-0 origin-top transform scale-75 -translate-x-1/2 -translate-y-8 left-1/2 sm:scale-100 lg:hidden" width="640" height="784" fill="none"
                 viewBox="0 0 640 784">
              <defs>
                <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                </pattern>
              </defs>
              <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor"></rect>
              <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)"></rect>
            </svg>
            <div class="relative w-full mx-auto mt-32 rounded-lg md:mt-0 lg:max-w-md">
              <img class="relative mx-auto animate-bounce" width="490" src="{{ asset('/vendor/mckenziearts/laravel-notify/images/notifications.png') }}" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div x-data="{ connectify_notification: 'success' }" class="relative py-16 overflow-hidden bg-cool-gray-100 lg:py-24">
      <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
          <div class="relative">
            <h4 class="text-2xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
              Connectity Notification
            </h4>
            <p class="mt-3 text-lg leading-7 text-gray-500">
              Connectity Notification can be used to notify your users that they no longer have an internet
              connection to perform the action they started.
            </p>
            <div class="flex items-center mt-10 space-x-6">
              <div class="flex items-center">
                <input id="connectify_success" name="connectify_notifications" x-model="connectify_notification" type="radio"
                       class="w-4 h-4 text-pink-600 transition duration-150 ease-in-out form-radio focus:shadow-outline-red" value="success">
                <label for="connectify_success" class="ml-2">
                  <span class="block text-sm font-medium leading-5 text-gray-700 cursor-pointer">Success</span>
                </label>
              </div>
              <div class="flex items-center">
                <input id="connectify_error" name="connectify_notifications" x-model="connectify_notification" type="radio"
                       class="w-4 h-4 text-pink-600 transition duration-150 ease-in-out form-radio focus:shadow-outline-red" value="danger">
                <label for="connectify_error" class="ml-2">
                  <span class="block text-sm font-medium leading-5 text-gray-700 cursor-pointer">Error</span>
                </label>
              </div>
            </div>
          </div>
          <div class="relative mt-10 lg:mt-0">
            <div
                 x-show="connectify_notification === 'success'"
                 x-description="Notification panel, show/hide based on alert state."
                 x-transition:enter="transform ease-out duration-300 transition"
                 x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                 x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                 style="display: none">
              <h5 class="text-lg font-medium leading-6 text-gray-900">Success Notification</h5>
              <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                From your controller, call the flash method with a message and success type.
              </p>
              <pre>
                        <code class="language-php">connectify('success', 'Network Found', 'Laravel Notify v2 is insane 🔥 !');</code>
                    </pre>
              <div class="mt-4">
                <div class="w-full max-w-md bg-white border-t-4 border-green-600 rounded-lg shadow-lg pointer-events-auto">
                  <div class="relative overflow-hidden rounded-lg shadow-xs">
                    <div class="p-4">
                      <div class="flex items-start">
                        <div class="inline-flex items-center flex-shrink-0 p-2 text-sm text-white rounded-full bg-gradient-to-r from-green-600 to-green-800">
                          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 wifi">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                          </svg>
                        </div>
                        <div class="flex-1 w-0 ml-6">
                          <p class="text-base font-medium leading-5 text-green-600">
                            Network Found
                          </p>
                          <p class="mt-1 text-sm leading-5 text-gray-500">
                            Laravel Notify v2 is insane 🔥 !
                          </p>
                        </div>
                        <div class="flex flex-shrink-0 ml-4">
                          <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
                 x-show="connectify_notification === 'danger'"
                 x-description="Notification panel, show/hide based on alert state."
                 x-transition:enter="transform ease-out duration-300 transition"
                 x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                 x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                 style="display: none">
              <h5 class="text-lg font-medium leading-6 text-gray-900">Danger Notification</h5>
              <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                From your controller, call the flash method with a message and danger type.
              </p>
              <pre>
                        <code class="language-php">connectify('error', 'Network Not Found', 'Connection could not be established. Please try again!');</code>
                    </pre>
              <div class="mt-4">
                <div class="w-full max-w-md bg-white border-t-4 border-red-600 rounded-lg shadow-lg pointer-events-auto">
                  <div class="relative overflow-hidden rounded-lg shadow-xs">
                    <div class="p-4">
                      <div class="flex items-start">
                        <div class="inline-flex items-center flex-shrink-0 p-2 text-sm text-white rounded-full bg-gradient-to-r from-red-600 to-red-800">
                          <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 x">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                          </svg>
                        </div>
                        <div class="flex-1 w-0 ml-6">
                          <p class="text-base font-medium leading-5 text-red-600">
                            Network Not Found
                          </p>
                          <p class="mt-1 text-sm leading-5 text-gray-500">
                            Connection could not be established. Please try again!
                          </p>
                        </div>
                        <div class="flex flex-shrink-0 ml-4">
                          <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="relative py-16 overflow-hidden lg:py-24">
      <svg class="absolute hidden transform translate-x-1/2 translate-y-12 lg:block right-full" width="404" height="784" fill="none" viewBox="0 0 404 784">
        <defs>
          <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
          </pattern>
        </defs>
        <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)"></rect>
      </svg>
      <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
        <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-12 lg:items-center">
          <div class="lg:col-start-2">
            <h4 class="text-2xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
              Toast Notification
            </h4>
            <p class="mt-3 text-lg leading-7 text-gray-500">
              Toast Notification can be used to inform the user after the actions he has performed (CRUD actions).
              From your application, call the flash method with a message and type.
            </p>
            <ul class="mt-8 space-y-4">
              <li>
                <div>
                  <h5 class="text-lg font-medium leading-6 text-gray-900">Success Toast</h5>
                  <div class="mt-2">
                    <pre><code class="language-php">notify()->success('You have successfully logged in');</code></pre>
                  </div>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="text-lg font-medium leading-6 text-gray-900">Warning Toast</h5>
                  <div class="mt-2">
                    <pre><code class="language-php">notify()->warning('Please charge your mobile phone');</code></pre>
                  </div>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="text-lg font-medium leading-6 text-gray-900">Info Toast</h5>
                  <div class="mt-2">
                    <pre><code class="language-php">notify()->info('You have new subscribers');</code></pre>
                  </div>
                </div>
              </li>
              <li>
                <div>
                  <h5 class="text-lg font-medium leading-6 text-gray-900">Danger Toast</h5>
                  <div class="mt-2">
                    <pre><code class="language-php">notify()->error('Some error here please try again');</code></pre>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="relative mt-10 -mx-4 lg:mt-0 lg:col-start-1">
            <svg class="absolute transform -translate-x-1/2 translate-y-16 left-1/2 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
              <defs>
                <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                  <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                </pattern>
              </defs>
              <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)"></rect>
            </svg>
            <div class="relative space-y-4">
              <div class="w-full max-w-md mx-auto bg-white border-l-4 border-green-600 rounded-lg shadow-lg pointer-events-auto">
                <div class="relative overflow-hidden rounded-lg shadow-xs">
                  <div class="p-4">
                    <div class="flex items-start">
                      <div class="inline-flex items-center flex-shrink-0 p-2 text-sm text-white bg-green-600 rounded-full">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 check">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                      </div>
                      <div class="flex-1 w-0 ml-4">
                        <p class="text-base font-medium leading-5 text-green-600">
                          Success
                        </p>
                        <p class="mt-1 text-sm leading-5 text-gray-500">
                          You have successfully logged in.
                        </p>
                      </div>
                      <div class="flex flex-shrink-0 ml-4">
                        <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full max-w-md mx-auto bg-white border-l-4 border-yellow-400 rounded-lg shadow-lg pointer-events-auto">
                <div class="relative overflow-hidden rounded-lg shadow-xs">
                  <div class="p-4">
                    <div class="flex items-start">
                      <div class="inline-flex items-center flex-shrink-0 p-2 text-sm text-white bg-yellow-400 rounded-full">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 exclamation">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                      </div>
                      <div class="flex-1 w-0 ml-4">
                        <p class="text-base font-medium leading-5 text-yellow-400">
                          Warning
                        </p>
                        <p class="mt-1 text-sm leading-5 text-gray-500">
                          Please charge your mobile phone.
                        </p>
                      </div>
                      <div class="flex flex-shrink-0 ml-4">
                        <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full max-w-md mx-auto bg-white border-l-4 border-blue-600 rounded-lg shadow-lg pointer-events-auto">
                <div class="relative overflow-hidden rounded-lg shadow-xs">
                  <div class="p-4">
                    <div class="flex items-start">
                      <div class="inline-flex items-center flex-shrink-0 p-2 text-sm text-white bg-blue-600 rounded-full">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 exclamation-circle">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                      </div>
                      <div class="flex-1 w-0 ml-4">
                        <p class="text-base font-medium leading-5 text-blue-600">
                          Info
                        </p>
                        <p class="mt-1 text-sm leading-5 text-gray-500">
                          You have new subscribers.
                        </p>
                      </div>
                      <div class="flex flex-shrink-0 ml-4">
                        <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="w-full max-w-md mx-auto bg-white border-l-4 border-red-600 rounded-lg shadow-lg pointer-events-auto">
                <div class="relative overflow-hidden rounded-lg shadow-xs">
                  <div class="p-4">
                    <div class="flex items-start">
                      <div class="inline-flex items-center flex-shrink-0 p-2 text-sm text-white bg-red-600 rounded-full">
                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 x">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                      </div>
                      <div class="flex-1 w-0 ml-4">
                        <p class="text-base font-medium leading-5 text-red-600">
                          Danger
                        </p>
                        <p class="mt-1 text-sm leading-5 text-gray-500">
                          Some error here please try again
                        </p>
                      </div>
                      <div class="flex flex-shrink-0 ml-4">
                        <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                          <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div x-data="{ drake_notification: 'success' }" class="relative py-16 overflow-hidden bg-orange-400 lg:py-24">
      <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-start">
          <div class="relative">
            <h4 class="text-2xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
              Drake Notification
            </h4>
            <p class="mt-3 text-lg leading-7 text-white">
              Drake Notification can be used to notify your users that they have a bad action request.
            </p>
            <div class="flex items-center mt-10 space-x-6">
              <div class="flex items-center">
                <input id="drake_success" name="drake_notifications" x-model="drake_notification" type="radio"
                       class="w-4 h-4 text-pink-600 transition duration-150 ease-in-out form-radio focus:shadow-outline-red" value="success">
                <label for="drake_success" class="ml-2">
                  <span class="block text-sm font-medium leading-5 text-white cursor-pointer">Success</span>
                </label>
              </div>
              <div class="flex items-center">
                <input id="drake_error" name="drake_notifications" x-model="drake_notification" type="radio"
                       class="w-4 h-4 text-pink-600 transition duration-150 ease-in-out form-radio focus:shadow-outline-red" value="danger">
                <label for="drake_error" class="ml-2">
                  <span class="block text-sm font-medium leading-5 text-white cursor-pointer">Error</span>
                </label>
              </div>
            </div>
          </div>
          <div class="relative mt-10 lg:mt-0">
            <div
                 x-show="drake_notification === 'success'"
                 x-description="Notification panel, show/hide based on alert state."
                 x-transition:enter="transform ease-out duration-300 transition"
                 x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                 x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                 style="display: none">
              <h5 class="text-lg font-medium leading-6 text-gray-900">Success Notification</h5>
              <p class="mt-2 mb-4 text-base leading-6 text-gray-50">
                From your controller, call the flash method with a message and success type.
              </p>
              <pre>
                        <code class="language-php">drakify('success');</code>
                    </pre>
              <div class="mt-4">
                <div class="w-full max-w-sm bg-white rounded-md shadow-lg pointer-events-auto">
                  <div class="relative h-48 overflow-hidden rounded-md shadow-xs">
                    <img class="absolute inset-0" src="{{ asset('/vendor/mckenziearts/laravel-notify/images/drake-success.jpg') }}" alt="">
                    <div class="absolute inset-0 bg-green-500 opacity-75"></div>
                    <div class="relative z-10 p-4">
                      <div class="flex items-start">
                        <div class="flex flex-col p-4 space-y-3 sm:p-6">
                          <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-white rounded-full">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-green-600 check">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                          </span>
                          <h4 class="text-xl font-semibold leading-6 text-white">Success</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
                 x-show="drake_notification === 'danger'"
                 x-description="Notification panel, show/hide based on alert state."
                 x-transition:enter="transform ease-out duration-300 transition"
                 x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                 x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                 style="display: none">
              <h5 class="text-lg font-medium leading-6 text-gray-900">Danger Notification</h5>
              <p class="mt-2 mb-4 text-base leading-6 text-gray-50">
                From your controller, call the flash method with a message and danger type.
              </p>
              <pre>
                        <code class="language-php">drakify('error');</code>
                    </pre>
              <div class="mt-4">
                <div class="w-full max-w-sm bg-white rounded-md shadow-lg pointer-events-auto">
                  <div class="relative h-48 overflow-hidden rounded-md shadow-xs">
                    <img class="absolute inset-0" src="{{ asset('/vendor/mckenziearts/laravel-notify/images/drake-error.jpg') }}" alt="">
                    <div class="absolute inset-0 bg-red-500 opacity-75"></div>
                    <div class="relative z-10 p-4">
                      <div class="flex justify-end">
                        <div class="flex flex-col p-4 space-y-3 text-right sm:p-6">
                          <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-white rounded-full">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 text-red-600 check">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                          </span>
                          <h4 class="text-xl font-semibold leading-6 text-white">Error</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div x-data="{ smiley_notification: 'success' }" class="relative py-16 overflow-hidden bg-cool-gray-100 lg:py-24">
      <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
        <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-12 lg:items-center">
          <div class="relative lg:col-start-2">
            <h4 class="text-2xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
              Smiley Notification
            </h4>
            <p class="mt-3 text-lg leading-7 text-gray-500">
              Smiley notification can be user to display notification messages to users who like smileys.
            </p>
            <div class="flex items-center mt-10 space-x-6">
              <div class="flex items-center">
                <input id="smiley_success" name="smiley_notification" x-model="smiley_notification" type="radio"
                       class="w-4 h-4 text-pink-600 transition duration-150 ease-in-out form-radio focus:shadow-outline-red" value="success">
                <label for="smiley_success" class="ml-2">
                  <span class="block text-sm font-medium leading-5 text-gray-700 cursor-pointer">Success</span>
                </label>
              </div>
              <div class="flex items-center">
                <input id="smiley_error" name="smiley_notification" x-model="smiley_notification" type="radio"
                       class="w-4 h-4 text-pink-600 transition duration-150 ease-in-out form-radio focus:shadow-outline-red" value="danger">
                <label for="smiley_error" class="ml-2">
                  <span class="block text-sm font-medium leading-5 text-gray-700 cursor-pointer">Error</span>
                </label>
              </div>
            </div>
          </div>
          <div class="relative mt-10 lg:mt-0 lg:col-start-1">
            <div
                 x-show="smiley_notification === 'success'"
                 x-description="Notification panel, show/hide based on alert state."
                 x-transition:enter="transform ease-out duration-300 transition"
                 x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                 x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                 style="display: none">
              <h5 class="text-lg font-medium leading-6 text-gray-900">Success Notification</h5>
              <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                From your controller, call the flash method with a message and success type.
              </p>
              <pre>
                        <code class="language-php">smilify('success', 'Laravel Notify v2 is insane 🔥 !');</code>
                    </pre>
              <div class="mt-4">
                <div class="w-full max-w-md bg-white rounded-lg shadow-lg pointer-events-auto">
                  <div class="relative overflow-hidden rounded-lg shadow-xs">
                    <div class="p-4">
                      <div class="flex items-start">
                        <div class="inline-flex items-center flex-shrink-0 text-2xl text-white rounded-full">
                          <span>👍</span>
                        </div>
                        <div class="flex-1 w-0 ml-6">
                          <p class="text-base font-medium leading-5 text-green-600">
                            Success !
                          </p>
                          <p class="mt-1 text-sm leading-5 text-gray-500">
                            Laravel Notify v2 is insane 🔥 !
                          </p>
                        </div>
                        <div class="flex flex-shrink-0 ml-4">
                          <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
                 x-show="smiley_notification === 'danger'"
                 x-description="Notification panel, show/hide based on alert state."
                 x-transition:enter="transform ease-out duration-300 transition"
                 x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                 x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                 style="display: none">
              <h5 class="text-lg font-medium leading-6 text-gray-900">Danger Notification</h5>
              <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                From your controller, call the flash method with a message and danger type.
              </p>
              <pre>
                        <code class="language-php">smilify('error', 'Bad request appear please try again');</code>
                    </pre>
              <div class="mt-4">
                <div class="w-full max-w-md bg-white rounded-lg shadow-lg pointer-events-auto">
                  <div class="relative overflow-hidden rounded-lg shadow-xs">
                    <div class="p-4">
                      <div class="flex items-start">
                        <div class="inline-flex items-center flex-shrink-0 text-2xl text-white rounded-full">
                          <span>🙅🏽‍♂️</span>
                        </div>
                        <div class="flex-1 w-0 ml-6">
                          <p class="text-base font-medium leading-5 text-red-600">
                            Error !
                          </p>
                          <p class="mt-1 text-sm leading-5 text-gray-500">
                            Bad request appear please try again
                          </p>
                        </div>
                        <div class="flex flex-shrink-0 ml-4">
                          <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div x-data="{ emoticon_notification: 'success' }" class="relative py-16 overflow-hidden bg-white lg:py-24">
      <div class="relative max-w-xl px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-screen-xl">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 lg:items-center">
          <div class="relative">
            <h4 class="text-2xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
              Emoticon Notification
            </h4>
            <p class="mt-3 text-lg leading-7 text-gray-500">
              Emoticon notification can be user to display notification messages to users who like emoticons :D.
            </p>
            <div class="flex items-center mt-10 space-x-6">
              <div class="flex items-center">
                <input id="emoticon_success" name="emoticon_notification" x-model="emoticon_notification" type="radio"
                       class="w-4 h-4 text-pink-600 transition duration-150 ease-in-out form-radio focus:shadow-outline-red" value="success">
                <label for="emoticon_success" class="ml-2">
                  <span class="block text-sm font-medium leading-5 text-gray-700 cursor-pointer">Success</span>
                </label>
              </div>
              <div class="flex items-center">
                <input id="emoticon_error" name="emoticon_notification" x-model="emoticon_notification" type="radio"
                       class="w-4 h-4 text-pink-600 transition duration-150 ease-in-out form-radio focus:shadow-outline-red" value="danger">
                <label for="emoticon_error" class="ml-2">
                  <span class="block text-sm font-medium leading-5 text-gray-700 cursor-pointer">Error</span>
                </label>
              </div>
            </div>
          </div>
          <div class="relative mt-10 lg:mt-0">
            <div
                 x-show="emoticon_notification === 'success'"
                 x-description="Notification panel, show/hide based on alert state."
                 x-transition:enter="transform ease-out duration-300 transition"
                 x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                 x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                 style="display: none">
              <h5 class="text-lg font-medium leading-6 text-gray-900">Success Notification</h5>
              <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                From your controller, call the flash method with a message and success type.
              </p>
              <pre>
                        <code class="language-php">emotify('success', 'You are awesome. Your data successfully saved. Great Job :) !');</code>
                    </pre>
              <div class="mt-4">
                <div class="w-full max-w-md rounded-lg shadow-lg pointer-events-auto bg-gradient-to-r from-teal-500 via-green-500 to-green-800">
                  <div class="relative overflow-hidden rounded-lg shadow-xs">
                    <div class="p-4">
                      <div class="flex items-start">
                        <div class="inline-flex items-center flex-shrink-0 text-2xl text-white rounded-full">
                          <svg fill="none" viewBox="0 0 40 40" stroke="currentColor" class="w-12 h-12 emoticon-success">
                            <path d="M19.995 4.5A15.498 15.498 0 0 1 32.89 28.606 15.5 15.5 0 1 1 19.995 4.5z" fill="#F7F7F7" stroke="#137230" />
                            <path d="M14.232 22.382c-.253 0-.43.355-.332.673.5 1.667 2.171 5.858 6.318 5.858s5.859-4.227 6.37-5.908c.1-.323-.078-.678-.334-.678l-12.022.055z" fill="#034915" />
                            <path d="M20.153 32.27c2.492 0 4.512-1.496 4.512-3.34 0-1.846-2.02-3.342-4.512-3.342-2.493 0-4.513 1.496-4.513 3.341 0 1.846 2.02 3.341 4.513 3.341z" fill="#137230" />
                            <path d="M24.98 18.78s-.029-2.485 2.178-2.485c2.206 0 2.16 2.46 2.16 2.46m-18.634.026s-.029-2.486 2.18-2.486c2.208 0 2.16 2.466 2.16 2.466" stroke="#137230"
                                  stroke-miterlimit="10" stroke-linecap="round" />
                            <g opacity=".6" fill="#137230">
                              <path d="M8.8 24.73a2.327 2.327 0 1 0 0-4.654 2.327 2.327 0 0 0 0 4.655zM31.203 24.73a2.327 2.327 0 1 0 0-4.654 2.327 2.327 0 0 0 0 4.655z" />
                            </g>
                          </svg>
                        </div>
                        <div class="flex-1 w-0 ml-6">
                          <p class="text-sm leading-5 text-white">
                            You are awesome. Your data successfully saved. Great Job :) !
                          </p>
                        </div>
                        <div class="flex flex-shrink-0 ml-4">
                          <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
                 x-show="emoticon_notification === 'danger'"
                 x-description="Notification panel, show/hide based on alert state."
                 x-transition:enter="transform ease-out duration-300 transition"
                 x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
                 x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
                 style="display: none">
              <h5 class="text-lg font-medium leading-6 text-gray-900">Danger Notification</h5>
              <p class="mt-2 mb-4 text-base leading-6 text-gray-500">
                From your controller, call the flash method with a message and danger type.
              </p>
              <pre>
                        <code class="language-php">emotify('error', 'It seems your file is too big, try reducing the file size and try again.');</code>
                    </pre>
              <div class="mt-4">
                <div class="w-full max-w-md rounded-lg shadow-lg pointer-events-auto bg-gradient-to-r from-orange-500 via-red-500 to-red-800">
                  <div class="relative overflow-hidden rounded-lg shadow-xs">
                    <div class="p-4">
                      <div class="flex items-start">
                        <div class="inline-flex items-center flex-shrink-0 text-2xl text-white rounded-full">
                          <svg fill="none" viewBox="0 0 40 40" stroke="currentColor" class="w-12 h-12 emoticon-error">
                            <path d="M30.96 9.04c6.053 6.053 6.053 15.867 0 21.92-6.053 6.053-15.867 6.053-21.92 0-6.053-6.053-6.053-15.867 0-21.92 6.053-6.053 15.867-6.053 21.92 0z" fill="#F7F7F7"
                                  stroke="#E52828" />
                            <path d="M11 14l4.05 2.01L11.032 18M29 18l-3.959-2.008L28.968 14" stroke="#E52828" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M14 26s1.269-4 6.028-4C24.787 22 26 25.968 26 25.968" stroke="#E52828" stroke-miterlimit="10" stroke-linecap="round" />
                          </svg>
                        </div>
                        <div class="flex-1 w-0 ml-6">
                          <p class="text-sm leading-5 text-white">
                            It seems your file is too big, try reducing the file size and try again.
                          </p>
                        </div>
                        <div class="flex flex-shrink-0 ml-4">
                          <button class="inline-flex text-white transition duration-150 ease-in-out focus:outline-none focus:text-gray-50">
                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                              <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-12 bg-gray-900">
      <div class="max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <h3 class="mt-2 text-3xl font-extrabold leading-8 tracking-tight text-white sm:text-4xl sm:leading-10">
            Dark Mode
          </h3>
          <p class="max-w-2xl mt-4 text-lg leading-7 text-gray-300 lg:mx-auto">
            Some awesome stuff. Active dark mode by update your configuration at <code class="p-1 text-red-800 bg-red-100 rounded font-italic">config/notify.php</code> and set
            <code>NOTIFY_THEME</code> to <span class="text-gray-500">'dark'</span>.
          </p>
          <div class="max-w-2xl mt-6 text-xl leading-7 text-gray-300 lg:mx-auto">
            <pre>
                    <code class="language-php">'theme' => env('NOTIFY_THEME', 'dark'),</code>
                </pre>
          </div>
        </div>

        <div class="mt-16">
          <ul class="space-y-5 md:space-y-0 md:grid md:grid-cols-3 md:col-gap-8 md:row-gap-10">
            <li>
              <div>
                <h4 class="text-lg font-medium leading-6 text-gray-100">Connectity Notification</h4>
                <div class="mt-4">
                  <div class="w-full max-w-md bg-gray-800 border-t-4 border-green-600 rounded-lg shadow-lg pointer-events-auto">
                    <div class="relative overflow-hidden rounded-lg shadow-xs">
                      <div class="p-4">
                        <div class="flex items-start">
                          <div class="inline-flex items-center flex-shrink-0 p-2 text-sm text-white rounded-full bg-gradient-to-r from-green-600 to-green-800">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 wifi">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0" />
                            </svg>
                          </div>
                          <div class="flex-1 w-0 ml-6">
                            <p class="text-base font-medium leading-5 text-green-600">
                              Network Found
                            </p>
                            <p class="mt-1 text-sm leading-5 text-white">
                              Laravel Notify v2 is insane 🔥 !
                            </p>
                          </div>
                          <div class="flex flex-shrink-0 ml-4">
                            <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                              <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div>
                <h4 class="text-lg font-medium leading-6 text-gray-100">Toast Notification</h4>
                <div class="mt-4">
                  <div class="w-full max-w-md bg-gray-800 border-l-4 border-green-600 rounded-lg shadow-lg pointer-events-auto">
                    <div class="relative overflow-hidden rounded-lg shadow-xs">
                      <div class="p-4">
                        <div class="flex items-start">
                          <div class="inline-flex items-center flex-shrink-0 p-2 text-sm text-white bg-green-600 rounded-full">
                            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5 check">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                          </div>
                          <div class="flex-1 w-0 ml-4">
                            <p class="text-base font-medium leading-5 text-green-600">
                              Success
                            </p>
                            <p class="mt-1 text-sm leading-5 text-white">
                              Laravel Notify v2 is insane 🔥 !
                            </p>
                          </div>
                          <div class="flex flex-shrink-0 ml-4">
                            <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                              <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div>
                <h4 class="text-lg font-medium leading-6 text-gray-100">Smiley Notification</h4>
                <div class="mt-4">
                  <div class="w-full max-w-md bg-gray-800 rounded-lg shadow-lg pointer-events-auto">
                    <div class="relative overflow-hidden rounded-lg shadow-xs">
                      <div class="p-4">
                        <div class="flex items-start">
                          <div class="inline-flex items-center flex-shrink-0 text-2xl text-white rounded-full">
                            <span>👍</span>
                          </div>
                          <div class="flex-1 w-0 ml-6">
                            <p class="text-base font-medium leading-5 text-green-600">
                              Success !
                            </p>
                            <p class="mt-1 text-sm leading-5 text-white">
                              Laravel Notify v2 is insane 🔥 !
                            </p>
                          </div>
                          <div class="flex flex-shrink-0 ml-4">
                            <button class="inline-flex text-gray-400 transition duration-150 ease-in-out focus:outline-none focus:text-gray-500">
                              <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                      clip-rule="evenodd" />
                              </svg>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <footer class="max-w-screen-xl px-4 py-5 mx-auto sm:px-6 lg:px-8">
    <div class="flex items-center space-x-2 text-gray-500">
      <p>&copy; {{ date('Y') }} - <a href="https://github.com/mckenziearts/laravel-notify" class="font-medium" target="_blank">Laravel <span
                class="font-semibold text-pink-600">Notify</span></a> v2.0</p>
      <a class="github-button" href="https://github.com/mckenziearts/laravel-notify/issues" data-icon="octicon-issue-opened" aria-label="Issue mckenziearts/laravel-notify on GitHub">Issues</a>
      <a class="github-button" href="https://github.com/mckenziearts/laravel-notify" data-icon="octicon-star" data-show-count="true"
         aria-label="Star mckenziearts/laravel-notify on GitHub">Star</a>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="{{ asset('vendor/mckenziearts/laravel-notify/js/app.js') }}"></script>
  @include('notify::components.notify')
  @notifyJs

</body>

</html>
