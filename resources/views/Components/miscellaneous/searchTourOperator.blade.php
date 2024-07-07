@forelse ($tourPackages as $tourPackage)
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="package-item">
            <div class="overflow-hidden">
                <img class="img-fluid w-100" src="{{ asset($tourPackage->cover_image) }}" alt="">
            </div>
            <div class="d-flex border-bottom">
                <small class="flex-fill text-center border-end py-2"><i
                        class="fa fa-map-marker-alt text-primary me-2"></i>Thailand</small>
                <small class="flex-fill text-center border-end py-2"><i
                        class="fa fa-calendar-alt text-primary me-2"></i>3 days</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>2
                    Person</small>
            </div>
            <div class="text-center p-4">
                <h4 class="mb-0 text-truncate">{{ $tourPackage->title }}</h4>
                <h5 class="mb-0 text-secondary">
                    {{ $tourPackage->price ? '₹ ' . $tourPackage->price : 'Free' }}</h5>
                <div class="mb-3">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                </div>
                <p class="text-truncate">{{ $tourPackage->description ?? 'Null' }}</p>
                <div class="d-flex justify-content-center mb-2">
                    <a href="#" class="btn btn-sm btn-primary px-3 border-end"
                        style="border-radius: 30px 0 0 30px;">Read More</a>
                    <a href="#" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Book
                        Now</a>
                </div>
            </div>
        </div>
    </div>
@empty
    <h4 class="text-secondary text-center wow fadeInUp" data-wow-delay="0.1s"><i class="fa fa-exclamation-triangle"></i>
        No Package found.</h4>
@endforelse
