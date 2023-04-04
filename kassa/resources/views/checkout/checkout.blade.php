@vite("resources/css/app.css")
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
<link rel="" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

<div class="container mt-4 p-0">
    <div class="row px-md-4 px-2 pt-4">
        <div class="col-lg-8">
            <p class="pb-2 fw-bold">Order</p>

            @include('checkout.components.items')

            @include('checkout.components.summary')

            @include('checkout.components.delivery')

            @include('checkout.components.service')

        </div>
    </div>
</div>
