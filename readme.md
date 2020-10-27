## Prueba técnica CG
A continuación explicamos la manera de poder ejecutar el proyecto.

Está montado con una estructura propia simulando un mini framework


## Instalación
### Copiar .env
Ejecutar:
```
copy .env.example .env
```

### URL
Para ver el proyecto es necesario entrar a http://localhost

### Docker
En línea de comandos, desde la carpeta 'docker' dentro del proyecto ejecutaremos:

- Con esto conseguiremos levantar los contendores Docker para ejecutar la aplicación
```
docker-compose up -d
```
- Parar docker
```
docker-compose down
```
- Ejecutar comandos
```
docker-compose exec workspace bash
```
- En caso de tener conflictos con los puertos de María DB
```
sudo service mysql stop
```
- En caso de tener conflictos con los puertos de Nginx
```
//Linux 
sudo service apache2 stop
// para MAC
sudo apachectl stop
```
   
