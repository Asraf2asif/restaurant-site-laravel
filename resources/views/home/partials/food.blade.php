<!-- Food Area starts -->
    <section class="food-area section-padding">
      <div class="section-top">
        <h3><span class="style-change">we serve</span> <br />delicious food</h3>
        <p class="pt-3">
          They're fill divide i their yielding our after have him fish on there for
          greater man moveth, moved Won't together isn't for fly divide mids fish
          firmament on net.
        </p>
      </div>
      <div class="section-foods">
        @foreach ($fooddata as $data)
        <div class="single-food mt-5">
          <div class="food-img">
            <img src={{ $data['img'] }} class="" alt={{ $data['name'] }} />
          </div>
          <div class="food-content">
            <div class="d-flex justify-content-between">
              <h5>{{ $data['name'] }}</h5>
              <span class="style-change">${{ $data['price'] }}</span>
            </div>
            <p class="pt-3">{{ $data['desc'] }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- Food Area End -->
