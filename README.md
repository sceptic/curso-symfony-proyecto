===========================
El proyecto tiene 3 partes:
===========================
Un Admin, donde se puede crear todo el contenido de la web.

La zona publica donde se muestra un catálogo de producto dividido por categorias y subcategorias

Una zona de usuario donde se puede registrar



------------------------------------------------------------------------------------------------


CATALGO TIENDA ANIMALES
========================

IMPORTANTE!

+ Añadir los data fixtures aplicación

	php app/console doctrine:fixtures:load

Ver fixtures en:
	Animales\CatalogoBundle\DataFixtures\ORM\LoadData

+ Una vez añadido los fixtures, hay que ir al admin e ir creando categorias, subcategorias, productos... para ver contenido en la web




RUTAS IMPORTANTES
==================

1) Parte pública
----------------------------------


+ Crear usuario
	/acount/registro/new

------------------------
+ Cambiar idioma web
	/[iso_pais]/[ruta]



2) ADMIN
----------------------------------

+ Login Admin

	/login-admin

Acceso Administrador:

mail:	admin@mail.com
pass:	admin

------------------------
+ Productos
	/admin/product

------------------------
Categorias de animales

	/admin/category
------------------------
+ Categorias productos animales

	/admin/subcategory

------------------------
+Usuarios

	/admin/user






