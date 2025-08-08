// Funcionalidades modernas para la página web de Frarem

// Navbar scroll effect
document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.getElementById('mainNavbar');
    
    // Agregar efecto de scroll al navbar
    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Smooth scroll para los enlaces del navbar
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);
            
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 80; // Compensar altura del navbar
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
            
            // Cerrar el menú móvil después del clic
            const navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse);
                bsCollapse.hide();
            }
        });
    });

    // Animaciones de entrada con Intersection Observer
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in-up');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observar elementos para animaciones
    const animatedElements = document.querySelectorAll('.product-card, .contact-item, .stat-item, .brand-item');
    animatedElements.forEach(el => observer.observe(el));

    // Parallax effect para el hero
    window.addEventListener('scroll', function() {
        const scrolled = window.pageYOffset;
        const heroOverlay = document.querySelector('.hero-overlay');
        if (heroOverlay) {
            heroOverlay.style.transform = `translateY(${scrolled * 0.3}px)`;
        }
    });
});

// Funcionalidad del formulario de contacto
const btnEnviar = document.getElementById('btnEnviar');
const form = document.getElementById('form-contact');

if (btnEnviar && form) {
    // Prevenir el envío por defecto del formulario
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        enviarEmail();
    });

    // Validación en tiempo real
    const formInputs = form.querySelectorAll('input[required], textarea[required]');
    formInputs.forEach(input => {
        input.addEventListener('blur', validateField);
        input.addEventListener('input', clearError);
    });
}

function validateField(event) {
    const field = event.target;
    const value = field.value.trim();
    
    // Remover clases previas
    field.classList.remove('is-valid', 'is-invalid');
    
    // Validar según el tipo de campo
    let isValid = true;
    
    if (field.hasAttribute('required') && !value) {
        isValid = false;
    } else if (field.type === 'email' && value) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        isValid = emailRegex.test(value);
    } else if (field.type === 'tel' && value) {
        const phoneRegex = /^[\+]?[0-9\s\-\(\)]{9,}$/;
        isValid = phoneRegex.test(value);
    }
    
    // Aplicar clases de validación de Bootstrap
    field.classList.add(isValid ? 'is-valid' : 'is-invalid');
    
    return isValid;
}

function clearError(event) {
    const field = event.target;
    field.classList.remove('is-invalid');
}

function enviarEmail() {
    const nombre = document.getElementById('nombre').value.trim();
    const email = document.getElementById('email').value.trim();
    const celular = document.getElementById('celular').value.trim();
    const asunto = document.getElementById('asunto').value.trim();
    const mensaje = document.getElementById('mensaje').value.trim();

    // Validar campos obligatorios
    const requiredFields = [
        { value: nombre, name: 'Nombre' },
        { value: email, name: 'Email' },
        { value: celular, name: 'Teléfono' },
        { value: asunto, name: 'Asunto' }
    ];

    const emptyFields = requiredFields.filter(field => !field.value);
    
    if (emptyFields.length > 0) {
        const fieldNames = emptyFields.map(field => field.name).join(', ');
        Swal.fire({
            icon: 'warning',
            title: 'Campos incompletos',
            text: `Por favor complete los siguientes campos: ${fieldNames}`,
            confirmButtonColor: '#ffc107'
        });
        return;
    }

    // Validar formato de email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
        Swal.fire({
            icon: 'warning',
            title: 'Email inválido',
            text: 'Por favor ingrese un email válido',
            confirmButtonColor: '#ffc107'
        });
        return;
    }

    // Deshabilitar botón mientras se envía
    btnEnviar.disabled = true;
    btnEnviar.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Enviando...';

    // Mostrar loading
    Swal.fire({
        title: 'Enviando mensaje...',
        text: 'Por favor espere',
        icon: 'info',
        allowOutsideClick: false,
        showConfirmButton: false,
        didOpen: () => {
            Swal.showLoading();
        }
    });

    // Enviar datos via AJAX
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "email.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    const formData = `nombre=${encodeURIComponent(nombre)}&email=${encodeURIComponent(email)}&celular=${encodeURIComponent(celular)}&asunto=${encodeURIComponent(asunto)}&mensaje=${encodeURIComponent(mensaje)}`;
    
    xhr.send(formData);
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            // Rehabilitar botón
            btnEnviar.disabled = false;
            btnEnviar.innerHTML = '<i class="bi bi-send me-2"></i>Enviar mensaje';
            
            if (xhr.status === 200) {
                const respuesta = xhr.responseText;
                if (respuesta == 1) {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Mensaje enviado!',
                        text: 'Gracias por contactarnos. Te responderemos pronto.',
                        confirmButtonColor: '#ffc107'
                    });
                    form.reset();
                    // Limpiar clases de validación
                    formInputs.forEach(input => {
                        input.classList.remove('is-valid', 'is-invalid');
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error al enviar',
                        text: 'Ha ocurrido un error. Por favor intente nuevamente.',
                        confirmButtonColor: '#ffc107'
                    });
                }
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error de conexión',
                    text: 'No se pudo conectar con el servidor. Verifique su conexión a internet.',
                    confirmButtonColor: '#ffc107'
                });
            }
        }
    };
}

// Lazy loading para imágenes
document.addEventListener('DOMContentLoaded', function() {
    const images = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
});

// Funcionalidad de WhatsApp
function openWhatsApp() {
    const phoneNumber = '51956792456';
    const message = 'Hola, me interesa conocer más sobre sus llantas industriales.';
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
    window.open(whatsappUrl, '_blank');
}

// Agregar eventos a botones de WhatsApp
document.addEventListener('DOMContentLoaded', function() {
    const whatsappButtons = document.querySelectorAll('a[href*="wa.me"]');
    whatsappButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            openWhatsApp();
        });
    });
});

// Mejorar accesibilidad con navegación por teclado
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        // Cerrar modales o menús abiertos
        const openModals = document.querySelectorAll('.modal.show');
        openModals.forEach(modal => {
            const bsModal = bootstrap.Modal.getInstance(modal);
            if (bsModal) bsModal.hide();
        });
        
        // Cerrar menú móvil
        const navbarCollapse = document.querySelector('.navbar-collapse.show');
        if (navbarCollapse) {
            const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
            if (bsCollapse) bsCollapse.hide();
        }
    }
});

// Optimización para dispositivos táctiles
if ('ontouchstart' in window) {
    document.body.classList.add('touch-device');
}

// Preloader simple (opcional)
window.addEventListener('load', function() {
    document.body.classList.add('loaded');
});

// Mejorar rendimiento con debounce para eventos de scroll
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Aplicar debounce a eventos de scroll costosos
const debouncedScrollHandler = debounce(function() {
    // Aquí puedes agregar lógica adicional de scroll si es necesaria
}, 10);