# IAW - Entorn LAMP amb Docker

## Descripció

Aquest projecte implementa un entorn LAMP utilitzant Docker i Docker Compose.

Els serveis inclosos són:

- Apache + PHP
- MySQL
- phpMyAdmin

La pàgina web mostra el missatge "Hola món!" i comprova la connexió amb la base de dades.

---

## Requisits

- Docker
- Docker Compose

---

## Executar el projecte

Situar-se dins la carpeta del projecte:

```bash
cd IAW
```

Iniciar els contenidors:

```bash
docker-compose up -d
```

Comprovar que estan en funcionament:

```bash
docker ps
```

---

## Accés als serveis

### Pàgina web

```text
http://192.168.1.100
```

### phpMyAdmin

```text
http://192.168.1.100:8080
```

---

## Configuració de la Base de Dades

Nom de la base de dades:

```text
exemple
```

Usuari:

```text
usuari
```

Contrasenya:

```text
contrasenya
```

Contrasenya de root:

```text
root
```

---

## Estructura del projecte

```text
IAW/
│
├── docker-compose.yml
├── Dockerfile
├── README.md
│
└── html/
    └── index.php
```

---

## Autor

Oriol
