<footer class="footer-area p_120">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-3 col-sm-3">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Useful Links</h6>
                    <ul class="list">
                    <li><a href="{{ route('editors') }}">Editorial Board</a></li>
                        <li><a href="{{ route('submit.paper') }}">Submit Paper</a></li>
                        <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-3">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Publication</h6>
                    <ul class="list">
                        <li><a href="{{ route('charges') }}">Charges</a></li>
                        <li><a href="{{ route('steps') }}">Steps</a></li>
                        <li><a href="{{ route('ethics') }}">Ethics</a></li>
                        <li><a href="{{ route('review.process') }}">Review Process</a></li>
                        <li><a href="{{ route('guidelines') }}">Guidelines</a></li>
                        <li><a href="{{ route('payment.mode') }}">Mode of Payment</a></li>
                        {{-- <li><a href="#">Check Paper Status</a></li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-3  col-md-3 col-sm-3">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Special Events</h6>
                    <ul class="list">
                        <li><a href="{{ route('callforpaper') }}">Call for Conference</a></li>
                        <li><a href="{{ route('futureconference') }}">Future Conference</a></li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-3  col-md-3 col-sm-3">
                <div class="single-footer-widget tp_widgets">
                    <h6 class="footer_title">Download</h6>
                    <ul class="list">
                        <li><a href="#">Copyright Form</a></li>
                        <li><a href="#">Paper Template</a></li>
                        <li><a href="{{ route('download.more') }}">More Documents</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-md-8 footer-text m-0">

                Copyright &copy; 2017 - <script>
                    document.write(new Date().getFullYear());
                </script> ajssaifpu.org | All rights reserved
                {{-- <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div> --}}
                <div style="text-align: right">Designed by Done-Right Systems Inc.</div>
        </div>
    </div>
</footer>