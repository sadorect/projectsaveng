<x-frontend-layout>
    

<!-- Page Header Start -->
 <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
@include('livewire.frontend.partials.aboutSummary')

<!-- About End -->


<!-- Facts Start -->
@include('livewire.frontend.partials.facts')
<!-- Facts End -->


<!-- Team Start -->
@include('livewire.frontend.partials.team')
<!-- Team End -->


<!-- Testimonial Start -->
@include('livewire.frontend.partials.testimonial')

<!-- Testimonial End -->

</x-frontend-layout>