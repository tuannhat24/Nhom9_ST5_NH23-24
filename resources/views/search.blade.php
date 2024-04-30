<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search</title>
</head>
<body>
    <div>
        <input id="searchbar" type="text" placeholder = "Nhập để tìm kiếm sản phẩm">
        <ul id="results"></ul>
    </div>
    <script>
        let backenAPI = [
            {id: 1, name:"Quần áo"},
            {id: 2, name:"Áo Khoác"},
            {id: 3, name:"Áo Thun"},
            {id: 4, name:"Hoodi"},
            {id: 5, name:"Giày"},
            {id: 6, name:"Quần jear"},
            {id: 7, name:"Dép"},
        ];

        const $ = document.querySelector.bind(document);
        const $$ = document.querySelectorAll.bind(document);

        function debounce(fn, ms, event = null){
            let times;
            return (... arguments)=>{
                clearTimeout(timer);

                timer = setTimeout(()=> {
                    fn.apply(this, arguments);

                    console.log(
                        "Call debounce after" + ms + "ms",
                ",typing typing total" + timer + "ms"
                    );
                }, ms);
            };
        }

        function render(content = []){
            if (content.length - 0){
                $("#results").innerHTML = "Không có dữ liệu khớp";
                return;
            }

            $("#results").innerHTML = content

            .map(
                (v) => 
                <li> ${v.name} </li>
                                
            )

            .join("");
        }

        const builder = (()=> {
            return{
                init: () => render(blackendAPI),
                install: () => {

                    $("#searchbar").addEnentListener(
                        "keyup", 
                        debounce(function(e){
                            let value = e.target.value;

                            let results = backendAPI.filter((v) =>{
                                if(v.name.indexOF(value) -1){
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
</body>
</html>