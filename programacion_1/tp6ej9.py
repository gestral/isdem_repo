# 9. Calcular la estatura promedio de una clase de 10 alumnos y determinar
# cuántos alumnos son más altos que el promedio y cuántos son más bajos
# que dicho promedio.

alumnos_alturas: list[int] = [53, 60, 55, 62, 58, 65, 59, 61, 64, 57]

def calcular_estatura_promedio(alturas: list[int]) -> float:
    return sum(alturas) / len(alturas)

print(type(calcular_estatura_promedio(alumnos_alturas)))