## Cambios 16/1/2019 02:36 AM
##1-)Alumnos Agregados los atributos extra y los reportes de la inscripcion
Se agregaron todos los atributos que se creyeron pertinentes agregar, otros atributos no sabia cual era su definicion y por eso no los agrege, son como 2 que yo recuerde, pero esta la ficha solicitada del alumno. Se agregaron las validaciones que se creyeron pertinentes. 
##2-)Cambios en el calculo de Promedios finales de notas y el calculo de Aprobado/Reprobado del alumno
Se crearon 2 botones que en si, hacen lo mismo, uno se puso el el menu: Gestion/Asignacion Notas Que es para calcular el promedio final, una vez se ingresen todas las notas, el otro boton esta en Asignacion Alumno-Grado, que es para calcular los que aprobaron o reprobaron el grado, ambos botones hacen las dos acciones, solo es necesario accionar uno u otro boton una vez, para saber los promedios finales y si aprobo o reprobo.
##3-) Reportes
Los reportes de consolidaos de notas estan creados en el menu de reportes, se muestran 4 reportes del trimesdtre 1 al 3 y el final, Lastimosamente, no pude hacer que se viera en PDF, y ni se el porque la libreria domPDF no me funciona, intente con otras dos librerias pero me dan errores raros, en fin, es lo unico que me quede corto en hacer.

##5-) Final del proyecto.
No se si reviso, o si vio los cambios que se hicieron, pero Gracias por tomarce el tiempo de ver, y preocuparse por mi, y mi tarea, se le agradece.


## Cambios 7/1/2019 02:32 AM
## Se Han Modificado las asignaciones ambas, Docente-Grado y Alumno-Grado
##1-) Validaciones en Asignaciones
- se agregaron validaciones para que solo se puedan ingresar y modificar asignaciones para el año actual.

##2-) Filtros en tablas

##3-) Asignacion Docente-Grado
- Se Filtraron los registros para que solo se muestre asignaciones del año actual en la primera pestaña de la primer tabla, en la segunda muestra todas las asignaciones ordenadas segun el id, o la fecha de ingreso.
-No se cambio nada en el ingreso ni la modificasion de registros ya que considero qeu asi estan bien, las validacione ys estan echas.

##4-) Asignacion Alumno-Grado
- Se Filtraron los registros para que solo se muestre asignaciones del año actual en la primera pestaña de la primer tabla.
- La segunda pestaña es para los aprobados del año y grado anterior, ahun falta filtrarlos ya que no he agregado el atributo de estado academico, pero ya filtra todos los alumnos del año y grado anterior, sin importar la seccion (si tengo asignado noveno en el 2019, se mostraran las asignaciones de alumnos aprobados de octavo del año 2018).
- La tercera pestaña es para los alumnos reprobados del año anterior pero del mismo grado, (si tengo asignado noveno en el 2019, se mostraran los reprobados de noveno del año 2018) sin importar la seccion.
- La ultima pestaña muestra todas las asignaciones de Alumno-Grado.
- Se modifico el ingreso de la asigacion para que solo se pueda para alumnos de Nuevo ingreso, asi evitamos estar buscando al alumno, ya que los alumnos de nuevo ingreso no estaran en el sistema todabia y seran menos, (osea si ingreso un nuevo alumno, me lo listara para asignarlo a mi grado en el año actual)
- Al editar un registro solo se puede cambiar a lo sumo a la otra seccion, y solo puedo seleccionar a los alumnos que llevan el mismo grado que yo imparto, (si tengo asignado noveno A solo puedo mandarle mis alumnos a Noveno B, y puedo quitarle alumnos a ese mismo grado), las validaciones estan echas, no se puede ingresar un registro repetido. (Estaria mal poder mandar alumnos a otro grado que no fuera el mismo que imparte el docente, como mandar de noveno a primer grado por ejemplo.)

## Cambios 7/1/2019 22:40 PM

##3-) Las notas
Las Notas se han modificado para que listen a los alumnos del año Actual. El ingreso de notas y el de Conducta ya esta arreglado tambien.

##Cosas que Faltan por modificar
- Agregar un atributo en las asignaciones de alumno-Grado denominado "estado academico" que debe ir calculado desde las notas, que servira para hcer las listas de aprobados y reprobados con la clausula ->where('estado', aprobado), las listas ya estan echas solo falta agregar el filtro extra.
-Los reportes.

##P.D. Base de datos
- El correo y la pass siguen siendo las mismas Correo:leon_s054@hotmail.com Pass:leonardo
-Las pruebas las he hecho con mi usuario, ya que cree docentes para ambas secciones del grado que tengo asignado y cree asignaciones de un grado y año anterior con alumnos.
-Su usuario es su correo karen.penate@ues.edu.sv y su contraseña es: Disenio123