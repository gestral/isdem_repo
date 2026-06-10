import datetime
# 1)
print ("Bienvenido al programa de Control de edad ")
# 2)
fecha_actual=datetime.date.today()
fecha_ingresada=input("Ingrese su fecha de nacimiento (dd/mm/aaaa): ")
fecha_ingresada = datetime.datetime.strptime(fecha_ingresada, "%d/%m/%Y").date()