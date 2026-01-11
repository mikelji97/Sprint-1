# 🧩 Sprint 1 – Fundamentos de Programación en PHP

Este repositorio contiene los ejercicios realizados durante el **Sprint 1**, donde ponemos en práctica los conceptos básicos de programación utilizando **PHP**.  
El objetivo principal es afianzar la lógica de programación y adaptarla al lenguaje, trabajando con:

- Variables y constantes
- Tipos de datos
- Operaciones matemáticas
- Condicionales
- Bucles
- Funciones
- Estructuración del código

> El siguiente Sprint incluirá trabajo con **arrays**, pero aquí nos centramos en la base de la lógica.

---

## ✅ Objetivos del Sprint

- Crear y utilizar **variables y constantes**.
- Operar con distintos **tipos de datos** (`int`, `string`, `float`, `bool`).
- Implementar **estructuras condicionales** (`if`, `else`, `elseif`).
- Utilizar **bucles** (`for`, `while`) para repeticiones.
- Dividir el código en **funciones reutilizables**.
- Comprender cómo **controlar el flujo** de un programa.

---

## 🧱 Nivel 1

### 🔹 Ejercicio 1
Se declaran variables de distintos tipos (integer, double, string y boolean) y se muestran en pantalla.  
Además, se crea una **constante** con el nombre del alumno y se imprime en formato título.

---

### 🔹 Ejercicio 2
Trabajo con **strings**:

- Mostrar el mensaje usando una variable.
- Convertir a mayúsculas.
- Obtener la **longitud** del texto.
- Mostrarlo **invertido**.
- Concatenar con: `"Este es el curso de PHP"`.

---

### 🔹 Ejercicio 3
**a)** Se crean variables `int` y `double` y se realizan operaciones matemáticas:  
suma, resta, producto, módulo, etc.

**b)** Se programa una función calculadora:

---
### ✏️ Ejercicio 4: Función contador con pasos

* **Función:** `contarHasta($max = 10, $paso = 1);`
* **Descripción:** Permite contar desde 0 hasta `$max`.
* **Características:**
    * Se puede elegir el tamaño del `$paso`.
    * La cuenta se muestra paso a paso en pantalla.

---

### ✏️ Ejercicio 5: Clasificación de una nota

* **Descripción:** Se escribe una función que recibe una nota (en porcentaje) y devuelve el grado del estudiante.
* **Reglas:**

| Nota | Grado |
| :--- | :--- |
| $\ge 60\%$ | Primera División |
| $45\% \text{ – } 59\%$ | Segunda División |
| $33\% \text{ – } 44\%$ | Tercera División |
| $< 33\%$ | Reprobado |

---

### ✏️ Ejercicio 6: Función aleatoria (50/50)

* **Función:** `isBitten()`
* **Descripción:** Simula el meme "¡Charlie me mordió el dedo!" 😂
* **Resultado (usando `rand()`):**
    * `TRUE` (50% de probabilidad)
    * `FALSE` (50% de probabilidad)

---

## 🧱 Nivel 2 – Ejercicios

### 📞 Ejercicio 1: Costo de llamada telefónica

* **Descripción:** La función recibe los minutos de una llamada y devuelve el costo final.
* **Reglas de costo:**

| Duración de llamada | Costo |
| :--- | :--- |
| Hasta 3 minutos | 0,10€ total |
| Minutos adicionales | +0,05€ por minuto |

---

### 🎮 Ejercicio 2: Clasificación de puntos en un juego

* **Entrada:** Se ingresan 3 puntuaciones (entre 0 y 9999).
* **Cálculos:**
    * Suma total
    * Media
    * Clasificación
* **Estructura del código:**
    > Este ejercicio se resuelve usando **varias funciones** para mantener el código claro: una para sumar, otra para la media y otra para clasificar.
* **Reglas de clasificación:**

| Total de puntos | Clasificación |
| :--- | :--- |
| $< 4000$ | Principiante |
| $< 8000$ | Intermedio |
| $\ge 8000$ | Profesional |

---

## 🚀 Cómo ejecutar los ejercicios

1.  Copia el proyecto dentro de la carpeta **htdocs** (si usas XAMPP).
2.  Inicia el servidor **Apache**.
3.  Abre el navegador y accede a:
    ```
    http://localhost/NOMBRE_DEL_PROYECTO
    ```

## 🎯 Conclusión

Este Sprint consolida las bases del pensamiento lógico y la estructura de programas en PHP. Se aprende a dividir problemas, crear funciones, reutilizar código y controlar el flujo del programa.

---
