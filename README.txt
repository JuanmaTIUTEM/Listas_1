1. Clonar el repositorio en carpeta www (laragon) o htdocs (xampp-wampp)

	- git clone https://github.com/JuanmaTIUTEM/Listas_1.git

2. Iniciar servidor Apache 
3. Abrir navegador
	
	-localhost/listas_1

4. Crear rama local
	- git checkout -b <nctrl>

5. Verificar estar en la rama correcta
	- git branch

6. Abrir en IDE el proyecto
7. Crear un archivo
	- <numCtrl>.txt, contendrá:
		Nombre completo:
		Grupo:
		Meta profesional:
		Breve descripción del estudiante:
8. Guardar cambios localmente
	- git add .
	- git commit -m "Agregué un archivo de prueba en mi rama"
9. Subir la rama a GitHub
	- git push -u origin <nctrl>