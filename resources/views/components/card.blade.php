// this will merge extra classes we adding to x-card
<div {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-200 rounded p-6']) }}>
    {{ $slot }}
</div>
