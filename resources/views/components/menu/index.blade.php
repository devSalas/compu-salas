<aside class="fixed h-screen w-60 px-8 bg-neutral-950">
  <div class="flex flex-col gap-4">
    <h1 class="text-neutral-200 text-2xl py-8">
      <span class="text-violet-500">Compu</span>salas
    </h1>
    <nav class="flex flex-col">
      <x-menu.menu-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
        <x-icon.user />
        Profile
      </x-menu.menu-link>
      <x-menu.menu-link href="">
        <x-icon.search />
        Search
      </x-menu.menu-link>
      <x-menu.menu-link :href="route('favorites')" :active="request()->routeIs('favorites')">
        <x-icon.heart />
        Favorites
      </x-menu.menu-link>
      <x-menu.menu-link :href="route('cart')" :active="request()->routeIs('cart')">
        <x-icon.cart />
        Cart
      </x-menu.menu-link>
    </nav>
    <div>
      <h4 class="text-neutral-200 font-semibold text-xl py-4">Categorias</h4>
      <nav class="flex flex-col">
        <x-menu.menu-link href="">
          Laptop
        </x-menu.menu-link>
        <x-menu.menu-link href="">
          Rams
        </x-menu.menu-link>
      </nav>

    </div>
  </div>
</aside>