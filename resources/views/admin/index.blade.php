<x-admin.index :user="$user" :isAdmin="$isAdmin" :testimonial="$testimonial">
  @include("admin.pages.home.quickaction")
  @include("admin.pages.home.tabledisplay1", ["testimonial" => $testimonial])
</x-admin.index>
