@props(['active' => false])


<a   class="{{ $active ?  'bg-gray-300 ' : '   hover:bg-gray-200 hover:text-gray-800'}} text-gray-600 rounded-md px-3 py-2 text-sm font-medium " aria-current="{{ $active ? 'page' : false }}"{{ $attributes }}>{{ $slot }}</a>    