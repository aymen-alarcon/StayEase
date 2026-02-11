@include('Includes.header')
    <div class="container-fluid booking pb-5 wow fadeIn " data-wow-delay="0.1s">
        <div class="d-flex justify-content-center vh-100 align-items-center">
            <div class="bg-white shadow w-50" style="padding: 35px;">
                <form action="/Reservation/store/{{ $room->id }}" method="POST" class="row g-2">
                    @csrf
                    @method("POST")
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" name="room_id" value="{{ $room->id }}" hidden>
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="date" min="2026-02-10" name="date_debut" class="form-control" placeholder="Check in"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="date" id="date2" data-target-input="nearest">
                                    <input type="date" min="2026-02-10" name="date_fin" class="form-control" placeholder="Check out"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>