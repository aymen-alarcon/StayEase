<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation des Hotels - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/admin.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h3>HOTELIER</h3>
            </div>
            <ul class="sidebar-nav">
                <li class="nav-heading">TABLEAU DE BORD</li>
                <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li class="nav-heading">GESTION</li>
                <li class="active"><a href="#"><i class="fas fa-hotel"></i> Validation des Hôtels</a></li>
                <li><a href="#"><i class="fas fa-table"></i> Tous les Hôtels</a></li>
                <li><a href="#"><i class="fas fa-bed"></i> Chambres</a></li>
                <li><a href="#"><i class="fas fa-tags"></i> Tags</a></li>
            </ul>
            <div class="sidebar-footer">
                <div class="user-info">
                    <small>Connecté en tant que:</small>
                    <strong>Admin</strong>
                </div>
            </div>
        </aside>

        <div class="main-content">
            <nav class="top-navbar">
                <button class="sidebar-toggle" id="sidebarToggle">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="search-box">
                    <input type="text" class="form-control" placeholder="Rechercher...">
                    <button class="btn btn-search"><i class="fas fa-search"></i></button>
                </div>
                <div class="navbar-right">
                    <div class="dropdown">
                        <button class="btn-user dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fas fa-user"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Paramètres</a></li>
                            <li><a class="dropdown-item" href="#">Journal d'activités</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Déconnexion</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="content-area">
                <div class="page-header">
                    <h1><i class="fas fa-check-circle"></i> Validation des Hotels</h1>
                    <p>Approuvez ou rejetez les nouveaux hotels cres par les gerants</p>
                </div>

                <div class="stats-row">
                    <div class="stat-card">
                        <div class="stat-icon pending"><i class="fas fa-clock"></i></div>
                        <div class="stat-content">
                            <h3>5</h3>
                            <p>Hotels en attente</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon success"><i class="fas fa-check"></i></div>
                        <div class="stat-content">
                            <h3>12</h3>
                            <p>Approuves aujourd'hui</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon danger"><i class="fas fa-times"></i></div>
                        <div class="stat-content">
                            <h3>3</h3>
                            <p>Rejets aujourd'hui</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon info"><i class="fas fa-hotel"></i></div>
                        <div class="stat-content">
                            <h3>156</h3>
                            <p>Total des hotels</p>
                        </div>
                    </div>
                </div>

                <div class="table-card">
                    <div class="table-card-header">
                        <h2>Hotels en Attente de Validation</h2>
                        <span class="badge">5 en attente</span>
                    </div>
                    <div class="table-responsive">
                        <table class="table custom-table">
                            <thead>
                                <tr>
                                    <th>HoTEL</th>
                                    <th>VILLE</th>
                                    <th>GÉRANT</th>
                                    <th>DATE DE CRÉATION</th>
                                    <th>STATUT</th>
                                    <th>ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="hotel-info">
                                            <div class="hotel-icon"><i class="fas fa-hotel"></i></div>

                                        </div>
                                    </td>
                                    <td><i class="fas fa-map-marker-alt"></i> Ville</td>

                                    <td>
                                        <i class="fas fa-calendar-alt"></i> 03/02/2025<br>
                                        <small>14:30</small>
                                    </td>
                                    <td><span class="status-badge pending"><i class="fas fa-clock"></i> En attente</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" data-bs-toggle="modal" data-bs-target="#viewModal"><i class="fas fa-eye"></i> Voir</button>
                                            <button class="btn-action btn-approve" data-bs-toggle="modal" data-bs-target="#approveModal"><i class="fas fa-check"></i> Approuver</button>
                                            <button class="btn-action btn-reject" data-bs-toggle="modal" data-bs-target="#rejectModal"><i class="fas fa-times"></i> Rejeter</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="hotel-info">
                                            <div class="hotel-icon"><i class="fas fa-hotel"></i></div>
                                            <div>
                                                <strong>Seaside Resort</strong>
                                                <div class="stars"><i class="fas fa-star"></i> 4 étoiles</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-map-marker-alt"></i> Nice</td>
                                    <td>
                                        <strong>Marie Laurent</strong><br>
                                        <small>marie.laurent@email.com</small>
                                    </td>
                                    <td>
                                        <i class="fas fa-calendar-alt"></i> 03/02/2025<br>
                                        <small>10:15</small>
                                    </td>
                                    <td><span class="status-badge pending"><i class="fas fa-clock"></i> En attente</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" data-bs-toggle="modal" data-bs-target="#viewModal"><i class="fas fa-eye"></i> Voir</button>
                                            <button class="btn-action btn-approve" data-bs-toggle="modal" data-bs-target="#approveModal"><i class="fas fa-check"></i> Approuver</button>
                                            <button class="btn-action btn-reject" data-bs-toggle="modal" data-bs-target="#rejectModal"><i class="fas fa-times"></i> Rejeter</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="hotel-info">
                                            <div class="hotel-icon"><i class="fas fa-hotel"></i></div>
                                            <div>
                                                <strong>Mountain Lodge</strong>
                                                <div class="stars"><i class="fas fa-star"></i> 3 étoiles</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-map-marker-alt"></i> Chamonix</td>
                                    <td>
                                        <strong>Pierre Martin</strong><br>
                                        <small>pierre.martin@email.com</small>
                                    </td>
                                    <td>
                                        <i class="fas fa-calendar-alt"></i> 02/02/2025<br>
                                        <small>16:45</small>
                                    </td>
                                    <td><span class="status-badge pending"><i class="fas fa-clock"></i> En attente</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" data-bs-toggle="modal" data-bs-target="#viewModal"><i class="fas fa-eye"></i> Voir</button>
                                            <button class="btn-action btn-approve" data-bs-toggle="modal" data-bs-target="#approveModal"><i class="fas fa-check"></i> Approuver</button>
                                            <button class="btn-action btn-reject" data-bs-toggle="modal" data-bs-target="#rejectModal"><i class="fas fa-times"></i> Rejeter</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="hotel-info">
                                            <div class="hotel-icon"><i class="fas fa-hotel"></i></div>
                                            <div>
                                                <strong>City Business Hotel</strong>
                                                <div class="stars"><i class="fas fa-star"></i> 4 étoiles</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-map-marker-alt"></i> Lyon</td>
                                    <td>
                                        <strong>Sophie Bernard</strong><br>
                                        <small>sophie.bernard@email.com</small>
                                    </td>
                                    <td>
                                        <i class="fas fa-calendar-alt"></i> 02/02/2025<br>
                                        <small>09:20</small>
                                    </td>
                                    <td><span class="status-badge pending"><i class="fas fa-clock"></i> En attente</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" data-bs-toggle="modal" data-bs-target="#viewModal"><i class="fas fa-eye"></i> Voir</button>
                                            <button class="btn-action btn-approve" data-bs-toggle="modal" data-bs-target="#approveModal"><i class="fas fa-check"></i> Approuver</button>
                                            <button class="btn-action btn-reject" data-bs-toggle="modal" data-bs-target="#rejectModal"><i class="fas fa-times"></i> Rejeter</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="hotel-info">
                                            <div class="hotel-icon"><i class="fas fa-hotel"></i></div>
                                            <div>
                                                <strong>Luxury Spa Resort</strong>
                                                <div class="stars"><i class="fas fa-star"></i> 5 étoiles</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><i class="fas fa-map-marker-alt"></i> Cannes</td>
                                    <td>
                                        <strong>Antoine Rousseau</strong><br>
                                        <small>antoine.rousseau@email.com</small>
                                    </td>
                                    <td>
                                        <i class="fas fa-calendar-alt"></i> 01/02/2025<br>
                                        <small>11:00</small>
                                    </td>
                                    <td><span class="status-badge pending"><i class="fas fa-clock"></i> En attente</span></td>
                                    <td>
                                        <div class="action-buttons">
                                            <button class="btn-action btn-view" data-bs-toggle="modal" data-bs-target="#viewModal"><i class="fas fa-eye"></i> Voir</button>
                                            <button class="btn-action btn-approve" data-bs-toggle="modal" data-bs-target="#approveModal"><i class="fas fa-check"></i> Approuver</button>
                                            <button class="btn-action btn-reject" data-bs-toggle="modal" data-bs-target="#rejectModal"><i class="fas fa-times"></i> Rejeter</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-footer">
                        <div class="pagination-info">
                            Affichage de 1 à 5 sur 5 entrées
                        </div>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item disabled"><a class="page-link" href="#">Précédent</a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="empty-state" style="display: none;">
                    <div class="empty-icon"><i class="fas fa-check-circle"></i></div>
                    <h3>Aucun hotel en attente</h3>
                    <p>Tous les hotels ont été traités. Excellent travail !</p>
                </div>
            </div>

            <footer class="main-footer">
                <div class="footer-content">
                    <div class="footer-left">© 2026 Youcode Team</div>
                    <div class="footer-right">
                        <a href="#">Politique de confidentialité</a>
                        <span>·</span>
                        <a href="#">Conditions d'utilisation</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <div class="modal fade" id="approveModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-check-circle"></i> Approuver l'hôtel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Etes-vous sûr de vouloir approuver cet hotel ?</p>
                    <p class="text-muted"><small>L'hotel sera publie et visible par tous les utilisateurs.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-success"><i class="fas fa-check"></i> Confirmer l'approbation</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rejectModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-times-circle"></i> Rejeter l'hotel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>Pourquoi rejetez-vous cet hotel ?</p>
                    <div class="mb-3">
                        <label class="form-label">Raison du rejet</label>
                        <textarea class="form-control" rows="4" placeholder="Veuillez fournir une raison détaillée pour le rejet..."></textarea>
                        <small class="text-muted">Cette raison sera envoyée au gérant de l'hotel.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-times"></i> Confirmer le rejet</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewModal" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fas fa-info-circle"></i> Details de l'hotel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="hotel-details">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6>Nom de l'hotel</h6>
                                <p>Grand  Hotel</p>
                            </div>
                            <div class="col-md-6">
                                <h6>Ville</h6>
                                <p>Ville</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <h6>Gerant</h6>
                                <p>Flan<br><small>flan@email.com</small></p>
                            </div>
                            <div class="col-md-6">
                                <h6>Étoiles</h6>
                                <p>5 étoiles</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <h6>Description</h6>
                                <p>Un hotel </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.querySelector('.wrapper').classList.toggle('sidebar-collapsed');
        });
    </script>
</body>
</html>
