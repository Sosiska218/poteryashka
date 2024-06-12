@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-black-300 dark:border-black-700 dark:bg-black-900 dark:text-black-300 focus:border-white-500 dark:focus:border-white-600 focus:ring-white-500 dark:focus:ring-white-600 rounded-md shadow-sm']) !!}>
