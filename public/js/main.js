/*
Template Name: EduGrids - Education & Online Course HTML Template.
Author: GrayGrids
*/
$(document).ready(function () {
    //===== Prealoder
    
    window.onload = function () {
        window.setTimeout(fadeout, 500);
    }

    function fadeout() {
        document.querySelector('.preloader').style.opacity = '0';
        document.querySelector('.preloader').style.display = 'none';
    }

    /*=====================================
    Sticky
    ======================================= */
    window.onscroll = function () {
        var header_navbar = document.querySelector(".navbar-area");
        var sticky = header_navbar.offsetTop;

        if (window.pageYOffset > sticky) {
            header_navbar.classList.add("sticky");
        } else {
            header_navbar.classList.remove("sticky");
        }




        // show or hide the back-top-top button
        var backToTo = document.querySelector(".scroll-top");
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            backToTo.style.display = "flex";
        } else {
            backToTo.style.display = "none";
        }
    };


    // WOW active
    new WOW().init();



    // for menu scroll 
    var pageLink = document.querySelectorAll('.page-scroll');

    pageLink.forEach(elem => {
        elem.addEventListener('click', e => {
            e.preventDefault();
            document.querySelector(elem.getAttribute('href')).scrollIntoView({
                behavior: 'smooth',
                offsetTop: 1 - 60,
            });
        });
    });


    //===== mobile-menu-btn
    let navbarToggler = document.querySelector(".mobile-menu-btn");
    navbarToggler.addEventListener('click', function () {
        navbarToggler.classList.toggle("active");
    });

    //====== counter up 
    var cu = new counterUp({
        start: 0,
        duration: 2000,
        intvalues: true,
        interval: 100,
        append: " ",
    });
    cu.start();

    // const days = document.getElementById("days");
    // const hours = document.getElementById("hours");
    // const minutes = document.getElementById("minutes");
    // const seconds = document.getElementById("seconds");

    // const eventDate = new Date('November 23 2021 10:30:00')

    // const dateUpdate = setInterval(function () {
    //     const currentDate = new Date();
    //     const diff = eventDate - currentDate;

    //     if (diff < 0) {
    //         clearInterval(dateUpdate);

    //         return;
    //     }
    //     const d = Math.floor(diff / 1000 / 60 / 60 / 24);
    //     const h = Math.floor(diff / 1000 / 60 / 60) % 24;
    //     const m = Math.floor(diff / 1000 / 60) % 60;
    //     const s = Math.floor(diff / 1000) % 60;

    //     days.innerHTML = d < 10 ? '0' + d : d;
    //     hours.innerHTML = h < 10 ? '0' + h : h;
    //     minutes.innerHTML = m < 10 ? '0' + m : m;
    //     seconds.innerHTML = s < 10 ? '0' + s : s;
    // }, 1000);

    const daysEvent = document.querySelectorAll('.day-event');
    const divEventsDay = $('.info-evento');

    if (daysEvent) {

        changeDay($('#' + divEventsDay[0].id));

        daysEvent.forEach(dayEvent => {
            dayEvent.addEventListener('click', (event) => {
                event.preventDefault();

                const div = $('#'+dayEvent.dataset.day);

                changeDay(div);
            });
        });
    }


    function changeDay(divCurrent) {

        for(let i = 0; i < divEventsDay.length; i++) {
            const div = $('#' + divEventsDay[i].id);
            div.css("display", "none");
        };

        divCurrent.fadeIn();
        divCurrent.css("display", "block");
    }

    const toastError = $('.toast-error');

    if (toastError) {
        toastError.toast('show');
    }

    clear();
});