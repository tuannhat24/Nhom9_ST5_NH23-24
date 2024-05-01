<!-- Basic Page Info -->
<meta charset="utf-8" />
<title>Trang quản lý</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Mobile Specific Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css')}}" />

<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css')}}" />
<link rel="stylesheet" href="{{ asset('vendors/styles/style1.css')}}">

<!-- js -->
<link rel="stylesheet" href="/assets/font/fontawesome-free-6.2.1/fontawesome-free-6.2.1-web/css/all.min.css">
<script src="{{ asset('vendors/scripts/core.js')}}"></script>
<script src="{{ asset('vendors/scripts/script.min.js')}}"></script>
<script src="{{ asset('vendors/scripts/layout-settings.js')}}"></script>
<script>
    let backenAPI = [{
            id: 1,
            name: "Quần áo"
        },
        {
            id: 2,
            name: "Áo Khoác"
        },
        {
            id: 3,
            name: "Áo Thun"
        },
        {
            id: 4,
            name: "Hoodi"
        },
        {
            id: 5,
            name: "Giày"
        },
        {
            id: 6,
            name: "Quần jear"
        },
        {
            id: 7,
            name: "Dép"
        },
    ];

    const $ = document.querySelector.bind(document);
    const $$ = document.querySelectorAll.bind(document);

    function debounce(fn, ms, event = null) {
        let times;
        return (...arguments) => {
            clearTimeout(timer);

            timer = setTimeout(() => {
                fn.apply(this, arguments);

                console.log(
                    "Call debounce after" + ms + "ms",
                    ",typing typing total" + timer + "ms"
                );
            }, ms);
        };
    }

    function render(content = []) {
        if (content.length - 0) {
            $("#results").innerHTML = "Không có dữ liệu khớp";
            return;
        }

        $("#results").innerHTML = content

            .map(
                (v) =>
                '<li> ${v.name} </li>'

            )

            .join("");
    }

    const builder = (() => {
        return {
            init: () => render(blackendAPI),
            install: () => {

                $("#searchbar").addEnentListener(
                    "keyup",
                    debounce(function(e) {
                        let value = e.target.value;

                        let results = backendAPI.filter((v) => {
                            if (v.name.indexOF(value) - 1) {
                                return v;
                            }
                        });
                        render(results);
                    }, 500)

                );
            },
        };
    });
    builder.imit();
    builder.indtall();
</script>