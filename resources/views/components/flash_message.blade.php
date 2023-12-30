<script src="//unpkg.com/alpinejs" defer></script>

@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 1000)" x-show="show">
  <p>
    {{ session('message') }}
  </p>
</div>
@endif