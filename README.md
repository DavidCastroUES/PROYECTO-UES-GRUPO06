<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


## Cambios 9/12/2018
##1-) Menu
- Se agrego el Menu a todas las vistas, se quitaron accesos que no correspondian y se mejoraron los nombres de los link para que coincidieran a donde corresponde, y se modifico el orden, para que correspondieran al flujo normal de eventos que debe de seguirse para una buena gestion.

##2-) 
- Se Modifico la "Asignacion Alumno Docente-Grado" en el index se agregaron dos pestañas que correponden a dos tablas en la primera se aprecian los alumnos asignados al doente logeado, la segunda corresponde a todos los alumnos asignados a los docentes, se modificaron todas las vistas del crud, se modifico el update ya que no cargaba automaticamente los datos de la fila a modificar y se agrego el año de la asignacion que es, (segun lo que le pregunte antes) el año actual o a lo sumo el año siguiente ->REVISAR.

##3-)
-Se modifico la base de datos, se agrego otro script adicional al que ya se tenia, denominado: "centroescolar_tablas_vacias.sql" el cual contiene todas las tablas pero sin datos, se recomienda cargar "CentroEscolar2.4.sql" ya que contiene datos, el correo y la pass siguen siendo las mismas Correo:leon_s054@hotmail.com Pass:leonardo

## Cambios 12/12/2018

##1-) Menu 
Se cambio un poco agregando color, cuando este activo x menu. 

##2-) Asignaciones 
-Se agregaron los atributos "anio" a cada asignacion (que representan el año de la asignacion), en un principio queria establecer que el año fuera el año actual y el siguiente, pero a la hora de editar un registro se confundia mucho en inscribir a un alumno en un grado el 2018 cuando estaba asignado a un docente en el 2019, no habia congruencia en las dos asignaciones, asi que decidi que solo se hicieran asignaciones para el año actual.
-Se realizaron todas las validaciones para que ningun docente pudiera estar asignado a dos grados a la misma vez en un año lectivo, solo al siguiente año si podra ingresarse una nueva asignacion para el mismo grado con el mismo docente pero ya será otra, porque el año cambiara. (No se si me explico :p)
-Se realizaron validaciones en los actualizar de las asignaciones ya que aunque estuviera validado que no se pudiera ingresar un registro repetido, a la hora de actualizar, si permitia actualizar a un registro que ya estaba en la base, y daba como resultado registros duplicados, asi como se agregaron validaciones para que los alumnos no puedan actualizarce a otro registro de otro docente si ya esta creado.

##3-) Base de datos
Se agregaron atributos y se quito algunas clusulas de "unique" ya que por eso daban error de llaves, en los dos script, recordar cargar "CentroEscolar2.4.sql" ya que ese contiene datos con los que he estado trabajando.
El otro script corresponde a la logica de las tablas vacias al cual le hare ingenieria inversa para generar el modelo logico (ya lo intente y si lo genera, pero ya que se modificará, dejare eso para el final cuando ya tenga todos los cambios.) 

## Cambios 2/1/2019
##1-) Validaciones
- Se han agregado todas las validaciones que crei pertinentes para todas las tablas, excepto la de alumnos ya que se meodificara, agregando atributos extra.

##2-) Notas
- Se ha terminado la insercion y detalle de las notas, se ha agregado la insersion de las notas de Conductas y las taclas de detalles, se me habia solicitado solo agregar una tabla resumen, pero dado que ya tenia la tabla del detalle de notas, crei pertimente hacer detalles para cada trimestre asi como la tabla resumen, 
-Referente a la tabla de detalle de Conductas revisar si le parece la presentacion de las mismas o me dice si las pongo de otra forma.
-No he agreagado cambios a alumnos porque no podria probar las notas, cuando termine los alumnos volvere a hacer commit en unos dos dias, (primero Dios).

##3-) Base de datos
-Se modifico la base de datos, se agrego otro script adicional al que ya se tenia, denominado: "centroescolar_tablas_vacias.sql" el cual contiene todas las tablas pero sin datos, se recomienda cargar "CentroEscolar2.4.sql" ya que contiene datos, el correo y la pass siguen siendo las mismas Correo:leon_s054@hotmail.com Pass:leonardo
-Su usuario es su correo karen.penate@ues.edu.sv y su contraseña es: Disenio123
-Solo tiene asignados dos alumnos, sin notas, puede acceder con mi usuario, el mio si tienen notas (no todas), o puede probar el agregar notas desde su usuario.



## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
