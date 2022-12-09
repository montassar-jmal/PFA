

<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link" href="/dashboard">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <div class="sb-sidenav-menu-heading">Parametre de site</div>
                            <a class="nav-link" href="/tproduits">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Produits
                            </a>
                            <a class="nav-link" href="/tcategories">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Catégories
                            </a>
                            <a class="nav-link" href="/tcommande">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Commandes
                            </a>
                            <a class="nav-link" href="/settings">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Settings
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                    
                            <div>{{ Auth::user()->name }}</div>
                        
                    </div>
                </nav>
    </div>
  