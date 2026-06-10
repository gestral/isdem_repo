import datetime

class FueradeRango(Exception):
    pass

print("Bienvenido al programa de Control de edad.")

fecha_actual=datetime.date.today()
print(f"Fecha actual: {fecha_actual.strftime('%d/%m/%Y')}")

while True:
    fecha_ingresada=input("Ingrese su fecha de nacimiento (dd/mm/aaaa): ")
    try:
        
        fecha_ingresada = datetime.datetime.strptime(fecha_ingresada, "%d/%m/%Y").date()
        if fecha_ingresada > fecha_actual or fecha_ingresada < fecha_actual.replace(year=fecha_actual.year - 120):
            raise FueradeRango 
        
        
        edad = fecha_actual.year - fecha_ingresada.year
        if (fecha_actual.month, fecha_actual.day) < (fecha_ingresada.month, fecha_ingresada.day):
            edad -= 1
            
        print(f"Su fecha de nacimiento es: {fecha_ingresada.strftime('%d/%m/%Y')}")
        print(f"Tienes {edad} años.")
        if edad >= 18:
            print("Eres mayor de edad.")
        else:
            print(f"Te falta {18-edad} años para ser mayor de edad.")
        break

    except ValueError:
        print("Error: Debe ingresar la fecha valida en formato dd/mm/aaaa")
    except FueradeRango:
        print("Error: No puede ingresar una fecha futura ni una fecha irrazonable (mayor a 120 años de antiguedad).")
        
        
# Ejercicio Ejemplo
# Verificador de Mayoría de Edad
# Consignas:
# 1) Mostrar un mensaje de bienvenida al usuario con el nombre del programa y una breve descripción de lo que
# hace.
# 2) Obtener la fecha actual del sistema utilizando el módulo datetime de Python y mostrarla en pantalla con
# formato dd/mm/aaaa.
# 3) Solicitar al usuario que ingrese su fecha de nacimiento en formato dd/mm/aaaa. Si el formato es incorrecto,
# mostrar un mensaje de error amigable con un ejemplo del formato válido y volver a solicitar la fecha (no cerrar
# el programa).
# 4) Validar que la fecha ingresada no sea una fecha futura ni una fecha irrazonable (mayor a 120 años de
# antigüedad). En caso de ser inválida, informar el error y volver a solicitar.
# 5) Calcular la edad del usuario a partir de la fecha de nacimiento, teniendo en cuenta si ya cumplió años en el
# año actual o todavía no.
# 6) Mostrar los resultados: la fecha de nacimiento, la edad actual, y un mensaje indicando si es mayor o menor
# de edad. Si es menor, mostrar cuántos años le faltan para cumplir 18.
# 7) Mostrar un mensaje de despedida al finalizar el programa.