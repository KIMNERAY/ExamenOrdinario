const http = require('http');

const server = http.createServer((req, res) => {
    if(req.url === '/'){
        res.end('Este es un mensaje de bienvenida');
    }else if(req.url === '/api'){
        res.writeHead(200, {
            'Content-Type': 'application/json'
        });
        res.end(JSON.stringify({"message": "Hola Mundo"}));
    }else{
        res.end('Ruta no encontrada');
    }
});

server.listen(3000,() =>{
    console.log('servidor corriendo en  http://localhost:3000');
});