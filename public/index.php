<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button>Click to ping mercure</button> 
    <p>Logs :</p>
    <ul id="logs"></ul>
    
    <script>
        const buton = document.querySelector('button')
        const logs = document.querySelector('#logs')
        const JWT_TOKEN = "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJtZXJjdXJlIjp7InB1Ymxpc2giOlsiKiJdfX0.igEPFS-VblsI_at_-WbC7s1nQETOZspaNuwVl3gCQ5M"

        var data = new FormData();
        data.append( "topic", "https://example.com/books/1");
        data.append( "data", "test");


        buton.addEventListener('click', function(){
            fetch('http://localhost:8001/.well-known/mercure',{
                method: "POST",
                headers: new Headers({
                    'Authorization': 'Bearer '+ JWT_TOKEN, 
                    'Content-Type': 'application/x-www-form-urlencoded'
                }),
                body: new URLSearchParams({
                    "topic": "http://example.com/books/1",
                    "data": "test"
                })
            })
            .then(res => console.log("res : ", res))
            .catch(e => console.log("error : ", e))
        })


        const url = new URL('http://localhost:8001/.well-known/mercure');
        url.searchParams.append('topic', 'http://example.com/books/{id}');

        const eventSource = new EventSource(url);

        // The callback will be called every time an update is published
        eventSource.onmessage = e => {
            console.log("Real Time debug : ", event.data);
            const li = document.createElement('li')
            li.innerText = event.data
            logs.append(li)
        } // do something with the payload

    </script>

</body>
</html>