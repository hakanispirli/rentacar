<script type="text/javascript">
    $(document).ready(function() {
        $('#phoneNumber').mask('(500) 000 00 00');
        $('#phoneRegisterPage').mask('(500) 000 00 00');
        $('#odemePagePhone').mask('(500) 000 00 00');
        $('#odemePageBirthDate').mask('00/00/0000');
    });

    document.addEventListener('DOMContentLoaded', function() {
    const today = new Date();
    const dateFormat = "Y-m-d"; // Flatpickr için uygun tarih formatı
    const timeFormat = "H:i"; // Flatpickr için uygun saat formatı
    const defaultTime = "10:00";

    flatpickr("#pickup_date", {
        dateFormat: dateFormat,
        defaultDate: today,
        minDate: today,
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ["Pz", "Pt", "Sa", "Ça", "Pe", "Cu", "Ct"],
                longhand: [
                    "Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"
                ]
            },
            months: {
                shorthand: ["Oca", "Şub", "Mar", "Nis", "May", "Haz", "Tem", "Ağu", "Eyl", "Eki", "Kas", "Ara"],
                longhand: [
                    "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran",
                    "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
                ]
            }
        }
    });

    flatpickr("#return_date", {
        dateFormat: dateFormat,
        defaultDate: today,
        minDate: today,
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ["Pz", "Pt", "Sa", "Ça", "Pe", "Cu", "Ct"],
                longhand: [
                    "Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"
                ]
            },
            months: {
                shorthand: ["Oca", "Şub", "Mar", "Nis", "May", "Haz", "Tem", "Ağu", "Eyl", "Eki", "Kas", "Ara"],
                longhand: [
                    "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran",
                    "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
                ]
            }
        }
    });

    flatpickr("#pickup_time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: timeFormat,
        defaultDate: defaultTime,
        time_24hr: true,
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ["Pz", "Pt", "Sa", "Ça", "Pe", "Cu", "Ct"],
                longhand: [
                    "Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"
                ]
            },
            months: {
                shorthand: ["Oca", "Şub", "Mar", "Nis", "May", "Haz", "Tem", "Ağu", "Eyl", "Eki", "Kas", "Ara"],
                longhand: [
                    "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran",
                    "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
                ]
            }
        }
    });

    flatpickr("#return_time", {
        enableTime: true,
        noCalendar: true,
        dateFormat: timeFormat,
        defaultDate: defaultTime,
        time_24hr: true,
        locale: {
            firstDayOfWeek: 1,
            weekdays: {
                shorthand: ["Pz", "Pt", "Sa", "Ça", "Pe", "Cu", "Ct"],
                longhand: [
                    "Pazar", "Pazartesi", "Salı", "Çarşamba", "Perşembe", "Cuma", "Cumartesi"
                ]
            },
            months: {
                shorthand: ["Oca", "Şub", "Mar", "Nis", "May", "Haz", "Tem", "Ağu", "Eyl", "Eki", "Kas", "Ara"],
                longhand: [
                    "Ocak", "Şubat", "Mart", "Nisan", "Mayıs", "Haziran",
                    "Temmuz", "Ağustos", "Eylül", "Ekim", "Kasım", "Aralık"
                ]
            }
        }
    });
});


</script>
