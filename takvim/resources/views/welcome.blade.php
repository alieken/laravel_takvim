<x-layout>
    <a href="{{ route('create') }}" class="btn btn-success">EKLE</a>
    <br><br>

    <div id="menu">
        <span id="menu-navi">
          <button type="button" class="btn btn-default btn-sm move-day" data-action="move-prev" onclick="moveToNextOrPrevRange(-1)">
            < Önceki
          </button>
          <button type="button" class="btn btn-default btn-sm move-day" data-action="move-next" onclick="moveToNextOrPrevRange(1)">
            Sonraki >
          </button>
        </span>
        <span id="renderRange" class="render-range"></span>
      </div>

    <div id="calendar" style="height: 800px;"></div>

    <script>
        var $calEl = $('#calendar').tuiCalendar({
            usageStatistics:false,
            defaultView: 'month',
            template: {
                monthDayname: function(dayname) {
                    return '<span class="calendar-week-dayname-name">' + dayname.label + '</span>';
                },
                time(event) {
                    const { start, end, title } = event;

                    return `<span style="color: white;">${formatTime(start)}~${formatTime(end)} ${title}</span>`;
                },
                allday(event) {
                    return `<span style="color: gray;">${event.title}</span>`;
                },
            },
            month: {
                startDayOfWeek: 1, // monday
            },
            calendars: [
                {
                    id: '1',
                    name: 'Takvim',
                    color: '#ffffff',
                    bgColor: '#2ff1c8',
                    dragBgColor: '#2ff1c8',
                    borderColor: '#000000'
                }
            ]
        });

        var calendarInstance = $calEl.data('tuiCalendar');

        @foreach ( $etks as $etkinlik )
        calendarInstance.createSchedules([
          {
            id: '{{ $etkinlik->id }}',
            calendarId: '1',
            category: 'allday',
            title : '{{ $etkinlik->kullanici }} - {{ $etkinlik->baslik }}',
            start : '{{ $etkinlik->baslangic }}',
            end : '{{ $etkinlik->bitis }}'
          },
        ])
        @endforeach

        calendarInstance.render()

        function moveToNextOrPrevRange(offset) {
            if (offset === -1) {
                calendarInstance.prev();
            } else if (offset === 1) {
                calendarInstance.next();
            }
        }

        calendarInstance.on({
            'clickSchedule': e => location.replace("/show/" + e.schedule.id)
        });
    </script>
</x-layout>