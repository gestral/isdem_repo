# 1) Desarrolle un programa que determine si un alumno es candidato para una beca de
# transporte. Los requisitos son:
# • Ser menor de 25 años.
# • Vivir a una distancia mayor a 5 kilómetros del instituto.
# El programa debe solicitar al usuario su edad y la distancia en km. Al finalizar, debe
# mostrar si el alumno es "Candidato aprobado" o "No cumple requisitos", detallando
# específicamente qué condición no se cumplió.

edad = int(input("Ingrese su edad: "))
distancia = float(input("Ingrese la distancia en km: "))

if edad < 25 and distancia > 5:
    print("Candidato aprobado")
else:
    print("No cumple requisitos")
    if edad >= 25:
        print("Condición no cumplida: Edad debe ser menor de 25 años.")
    if distancia <= 5:
        print("Condición no cumplida: Distancia debe ser mayor a 5 kilómetros.")
        
