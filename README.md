# ApliEmporda-Sales

## Desplegament de l'Aplicació

Es pot comprovar com funciona executant.

```sh
$ cd public/
$ php -S 0.0.0.0:8080
```

I posant la barra d'adreces del navegador (http://{IP_del_servidor}:8080).

## Estructura Web:

- Home
  - Dashboard (Administrador)
  - Home (Usuari)
    - Pàgina estil CRUD per veure les reserves que tens fetes, es podrà cancelar una reserva i veure'n el seu contingut.
    - Botó per a reservar una nova sala
  - Reservar sala
    - Contindrà un petit formulari amb dades importants com: recursos que es necessiten, persones que hi assistiran, etc...
    - Mostrarà de forma dinàmica una llista de les diferents sales disponibles segons les dates introduides per l'usuari.
    - Es podran aplicar o treure diferents filtres en tot moment per a realitzar una busqueda més específica de la sala. 
- Incidencies
- Sales i recursos
- Calendari
  - Poder veure dies amb sales reservades (Tots)
  - Poder editar reserves (Administrador)

---

## Roadmap

- Pàgina home usuari (En desenvolupament - Àlex)
- Pàgina reservar sala (En desenvolupament - ?)
- Pàgina sales i recursos (En desenvolupament - ?)
- Pàgina calendari (En desenvolupament - Juanjo)
- Pàgina incidencies (En desenvolupame - ?)
- Pàgina dashboard ADMIN (En desenvolupament - Juanjo)
