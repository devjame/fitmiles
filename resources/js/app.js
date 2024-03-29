import { Calendar } from "@fullcalendar/core";
import interactionPlugin from "@fullcalendar/interaction";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";

require("./bootstrap");

require("alpinejs");

document.addEventListener("DOMContentLoaded", function () {
    const calendarEl = document.getElementById("calendar");

    const calendar = new Calendar(calendarEl, {
        plugins: [interactionPlugin, dayGridPlugin, timeGridPlugin, listPlugin],
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
        },
        initialDate: new Date(),
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        dayMaxEvents: true, // allow "more" link when too many events
        events: [
            {
                title: "All Day Event",
                start: "2021-07-01",
            },
            {
                title: "Long Event",
                start: "2021-07-07",
                end: "2021-07-10",
            },
            {
                groupId: 999,
                title: "Repeating Event",
                start: "2021-07-09T16:00:00",
            },
            {
                groupId: 999,
                title: "Repeating Event",
                start: "2021-07-16T16:00:00",
            },
            {
                title: "Conference",
                start: "2021-07-11",
                end: "2021-07-13",
            },
            {
                title: "Meeting",
                start: "2021-07-12T10:30:00",
                end: "2021-07-12T12:30:00",
            },
            {
                title: "Lunch",
                start: "2021-07-12T12:00:00",
            },
            {
                title: "Meeting",
                start: "2021-07-12T14:30:00",
            },
            {
                title: "Happy Hour",
                start: "2021-07-12T17:30:00",
            },
            {
                title: "Dinner",
                start: "2021-07-12T20:00:00",
            },
            {
                title: "Birthday Party",
                start: "2021-07-13T07:00:00",
            },
            {
                title: "Click for Google",
                url: "http://google.com/",
                start: "2021-07-28",
            },
        ],
    });

    calendar.render();
});
