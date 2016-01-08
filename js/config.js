var config = {
    lang: 'fr',
    time: {
        timeFormat: 12
    },
    weather: {
        //change weather params here:
        //units: metric or imperial
        params: {
            q: 'annemasse, France',
            units: 'metric',
            // if you want a different lang for the weather that what is set above, change it here
            lang: 'fr',
            APPID: '88399e8a945fa5c6866437432de4d573'
        }
    },
    compliments: {
        interval: 30000,
        fadeInterval: 4000,
        morning: [
            'Bonjour!'
        ],
        afternoon: [
            'Bonjour!'

        ],
        evening: [
            'Bonjour!'
        ]
    },
    calendar: {
        maximumEntries: 10,
        url: "https://calendar.google.com/calendar/ical/romainmaia%40gmail.com/public/basic.ics"
    },
    news: {
        feed: 'http://www.lemonde.fr/rss/une.xml'
    }
}
