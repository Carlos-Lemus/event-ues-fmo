$(document).ready(function () {

    // const btnUpload = document.querySelector('#btn-upload')
    // const inputFile = document.querySelector('#upload-file')

    // btnUpload.addEventListener('click', () => {
    //     inputFile.click();
    // });


    //Declaramos variables
    const side_menu = document.getElementById("menu_side");
    const btn_open = document.getElementById("btn_open");
    const body = document.getElementById("body");

    if (btn_open) {
        btn_open.addEventListener("click", open_close_menu);
    }

    //Evento para mostrar y ocultar menú
    function open_close_menu() {
        body.classList.toggle("body_move");
        side_menu.classList.toggle("menu__side_move");

    }

    //Si el ancho de la página es menor a 760px, ocultará el menú al recargar la página

    if (window.innerWidth < 760) {

        body.classList.add("body_move");
        side_menu.classList.add("menu__side_move");
    }

    //Haciendo el menú responsive(adaptable)

    window.addEventListener("resize", function () {

        if (window.innerWidth > 760) {

            body.classList.remove("body_move");
            side_menu.classList.remove("menu__side_move");
        }

        if (window.innerWidth < 760) {

            body.classList.add("body_move");
            side_menu.classList.add("menu__side_move");
        }

    });

    const btnsEventEdit = document.querySelectorAll('.btn-edit-event');

    if (btnsEventEdit) {

        const formEventEdit = document.querySelector('.form-event-edit');

        const title = document.querySelector('#edit-title');
        const description = document.querySelector('#edit-description');
        const link = document.querySelector('#edit-link');
        const date = document.querySelector('#edit-date');
        const hour = document.querySelector('#edit-hour');

        btnsEventEdit.forEach(btn => {
            btn.addEventListener('click', (event) => {
                event.preventDefault();

                const eventCurrent = JSON.parse(btn.dataset.event);

                title.value = eventCurrent.title;
                description.value = eventCurrent.description;
                link.value = eventCurrent.link;
                date.value = eventCurrent.date;
                hour.value = eventCurrent.hour;

                formEventEdit.action = `/events/${eventCurrent.id}/update`;;

            });
        });
    }

    const cardsDocs = document.querySelectorAll('.card-doc');

    if (cardsDocs) {
        cardsDocs.forEach(card => {
            card.addEventListener('click', () => {
                const toast = $(`#toast-${card.dataset.id}`);

                toast.toast('show');
            });
        });
    }

    const btnEditDocument = document.querySelector('.btn-edit-document');
    const formEditDocument = document.querySelector('.form-edit-document');

    if(btnEditDocument) {
        btnEditDocument.addEventListener('click', () => {
            formEditDocument.submit();
        });
    }


});