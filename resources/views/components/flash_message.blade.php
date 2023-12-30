<script src="//unpkg.com/alpinejs" defer></script>

@if(session()->has('message'))
<div class="fixed-top bg-primary text-white text-center" x-data="{show: true}" x-init="setTimeout(() => show = false, 1000)" x-show="show">
  <p>
    {{ session('message') }}
  </p>
</div>
@endif