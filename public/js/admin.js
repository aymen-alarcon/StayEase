
        document.getElementById('sidebarToggle')?.addEventListener('click', function(e) {
            e.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });


        function viewHotel(hotelId) {
            const viewModal = new bootstrap.Modal(document.getElementById('viewModal'));

            document.getElementById('hotelDetails').innerHTML = `
                <div class="text-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Chargement...</span>
                    </div>
                </div>
            `;
            viewModal.show();


            setTimeout(() => {
                document.getElementById('hotelDetails').innerHTML = `
                    <h6 class="mb-3">Informations de l'hotel</h6>
                    <p><strong>ID:</strong> ${hotelId}</p>
                    <p>Les détails complets de l'hôtel s'afficheront ici.</p>
                `;
            }, 1000);
        }

           let currentHotelId = null;

        function approveHotel(hotelId) {
            currentHotelId = hotelId;
            const approveModal = new bootstrap.Modal(document.getElementById('approveModal'));
            approveModal.show();
        }

        document.getElementById('confirmApprove')?.addEventListener('click', function() {

            console.log('Approving hotel:', currentHotelId);


            bootstrap.Modal.getInstance(document.getElementById('approveModal')).hide();
        });


        function rejectHotel(hotelId) {
            currentHotelId = hotelId;
            const rejectModal = new bootstrap.Modal(document.getElementById('rejectModal'));
            rejectModal.show();
        }

        document.getElementById('confirmReject')?.addEventListener('click', function() {
            const reason = document.getElementById('rejectReason').value;

            if (!reason.trim()) {
                alert('Veuillez fournir une raison pour le rejet.');
                return;
            }


            console.log('Rejecting hotel:', currentHotelId, 'Reason:', reason);


            bootstrap.Modal.getInstance(document.getElementById('rejectModal')).hide();
            document.getElementById('rejectReason').value = '';
        });
