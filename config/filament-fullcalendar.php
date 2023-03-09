<?php

/**
 * Consider this file the root configuration object for FullCalendar.
 * Any configuration added here, will be added to the calendar.
 * @see https://fullcalendar.io/docs#toc
 */

return [
    'timeZone' => config('app.timezone'),

    'locale' => config('app.locale'),

    'headerToolbar' => [
        'left' => 'prev,next today',
        'center' => 'title',
        'right' => 'timelineView, resourceView, dayGridMonth,dayGridWeek,dayGridDay',
    ],

    'views' => [
        'timelineView' => [
            'type' => 'resourceTimeline',
            'duration' => ['month' => 1],
            'buttonText' => 'Timeline',
        ],
        'resourceView' => [
            'type' => 'resourceTimeGrid',
            'duration' => ['day' => 1],
            'buttonText' => 'Resources',
        ],
    ],

    'navLinks' => true,

    'editable' => true,

    'selectable' => false,

    'dayMaxEvents' => true,
];
