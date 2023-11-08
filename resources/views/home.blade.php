@extends('layout')

@section('main_title')
Home page
@endsection

@section('main_content')
<p>
Welcome to Cleaning in Lisbon - your trusted partner in the world of cleaning in Lisbon! We offer professional cleaning services that not only bring impeccable cleanliness to your home or office but also provide convenience, flexibility, and affordability. Our team of experienced cleaners guarantees high-quality cleaning and offers additional services to meet all your needs. Discover a world of carefree cleanliness with Cleaning in Lisbon today!

</p>



    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-size:cover; background-image: url('https://images.unsplash.com/photo-1528740561666-dc2479dc08ab?auto=format&fit=crop&q=80&w=1887&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Flexible Schedule and Convenience</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small></small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small></small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-size:cover; background-image: url('https://images.unsplash.com/photo-1593174260957-b4eba7b3820c?auto=format&fit=crop&q=80&w=1814&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Comprehensive Range of Services</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small></small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small></small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-size:cover; background-image: url('https://images.unsplash.com/photo-1603712725038-e9334ae8f39f?auto=format&fit=crop&q=80&w=2071&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Competitive Pricing</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
              
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small></small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small></small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
      <p class="fs-5 text-body-secondary">We offer affordable rates without compromising on quality. Our competitive pricing makes our services accessible to a broad range of clients, allowing them to enjoy a high standard of cleaning without overspending.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Basic</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">€10<small class="text-body-secondary fw-light">/hour</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Cleaning of basic surfaces in living rooms</li>
              <li>Vacuuming and floor mopping</li>
              <li>Kitchen cleaning: washing countertops, appliances.</li>
              <li>Bathroom cleaning: sink, toilet, bathtub, shower.</li>
            </ul>
            <a href="/about"><button type="button" class="w-100 btn btn-lg btn-outline-warning">Contact us</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Premium</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">€15<small class="text-body-secondary fw-light">/hour</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>All services from the Basic Tariff.</li>
              <li>Window and window frame cleaning.</li>
              <li>Furniture upholstery cleaning, including sofas.</li>
              <li>Carpet and curtain cleaning as needed.</li>
            </ul>
            <a href="/about"><button type="button" class="w-100 btn btn-lg btn-outline-warning">Contact us</button></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-warning">
          <div class="card-header py-3 text-bg-warning border-warning">
            <h4 class="my-0 fw-normal">Exclusive</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">€25<small class="text-body-secondary fw-light">/hour</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>All services from the Basic and Premium Tariffs.</li>
              <li>Floor polishing and protective coating.</li>
              <li>Deep cleaning of kitchen appliances.</li>
              <li>Deep bathroom cleaning, including disinfection.</li>
            </ul>
            <a href="/about"> <button type="button" class="w-100 btn btn-lg btn-warning">Contact us</button></a>
          </div>
        </div>
      </div>
    </div>



@endsection