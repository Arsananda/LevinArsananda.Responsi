document.addEventListener('DOMContentLoaded', function() {
    const scheduleTable = document.getElementById('scheduleTable');
    if (scheduleTable) {
        const schedule = [
            { day: 'Senin', time: '09:00 - 17:00', availability: 'Tersedia' },
            { day: 'Selasa', time: '09:00 - 17:00', availability: 'Tersedia' },
            { day: 'Rabu', time: '09:00 - 17:00', availability: 'Tersedia' },
            { day: 'Kamis', time: '09:00 - 17:00', availability: 'Tersedia' },
            { day: 'Jumat', time: '09:00 - 15:00', availability: 'Tersedia' },
            { day: 'Sabtu', time: 'LIBUR', availability: 'LIBUR' },
            { day: 'Minggu', time: 'LIBUR', availability: 'LIBUR' },
        ];

        schedule.forEach(slot => {
            const row = scheduleTable.insertRow();
            row.insertCell(0).textContent = slot.day;
            row.insertCell(1).textContent = slot.time;
            row.insertCell(2).textContent = slot.availability;
        });
    }
});