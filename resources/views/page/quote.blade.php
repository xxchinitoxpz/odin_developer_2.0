<section class="text-center container-xxl py-5 ">
    {{-- <h3 class="mb-5">Contáctanos</h3> --}}
    <div class="row">
        <div class="col-lg-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.9336488023837!2d-79.84318994845418!3d-6.777930327771522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904cef9c0f2a290d%3A0x4605ab39cdb559d0!2sOdinDeveloper!5e0!3m2!1ses!2spe!4v1718049565816!5m2!1ses!2spe"
                class="h-100 w-100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-lg-7">
            <form id="contactForm">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row mb-4">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="text" id="name" class="form-control" placeholder="Nombre" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div data-mdb-input-init class="form-outline">
                                    <input type="email" id="email" class="form-control" placeholder="Email" />
                                </div>
                            </div>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <textarea class="form-control" id="message" rows="8" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="text-center text-md-start">
                            <button type="button" onclick="sendMessage()" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary mb-5 mb-md-0">
                                Enviar
                            </button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <ul class="list-unstyled">
                            <li>
                                <i class="fas fa-map-marker-alt fa-2x text-primary"></i>
                                <p><small>Carlos, Ortiz Vélez 194, Chiclayo</small></p>
                            </li>
                            <li>
                                <i class="fas fa-phone fa-2x text-primary"></i>
                                <p><small>+51 958 922 415 - +51 934 480 964</small></p>
                            </li>
                            <li>
                                <i class="fas fa-envelope fa-2x text-primary"></i>
                                <p><small>Informes@odindeveloper.net</small></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
function sendMessage() {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    const whatsappMessage = `Yo ${name} estoy interesada/o en ${message}, te puedes comunicar al correo ${email}`;
    const whatsappURL = `https://api.whatsapp.com/send?phone=51958922415&text=${encodeURIComponent(whatsappMessage)}`;

    window.open(whatsappURL, '_blank');
}
</script>
