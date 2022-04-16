<?php 
?>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/index.php" class="nav-link px-2 text-secondary">Головна</a></li>
                <li><a href="/articles.php" class="nav-link px-2 text-white">Задача</a></li>
            </ul>
            
            <div class="text-end">
                <button type="button" onclick="document.location='/admin.php'" class="btn btn-outline-light me-2">Адмін-панель</button>
                <button type="button" onclick="document.location='validation-form/exit.php'" class="btn btn-outline-light me-2">Вийти</button>
            </div>
        </div>
    </div>
</header>