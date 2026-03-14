# 4) Escribir un programa que solicite al usuario ingresar las temperaturas máximas
# registradas durante los últimos 8 días y las almacene en un vector (lista).
# Luego, el programa debe recorrer el vector para:
# • Identificar y mostrar cuántas temperaturas fueron superiores a 30 grados (días
# calurosos).
# • Calcular y mostrar el promedio general de las temperaturas ingresadas.

lista_temp_max = []
dias_calurosos = 0
total = 0

for i in range(1,9):
    lista_temp_max.append(float(input(f"Ingrese temperatura máxima del día {i}: ")))

for i in lista_temp_max:
    if i > 30:
        dias_calurosos += 1
    total += i
    
print(f"Cantidad de días calurosos: {dias_calurosos}")
print(f"Temperatura promedio de los días registrados: {total / len(lista_temp_max)}")