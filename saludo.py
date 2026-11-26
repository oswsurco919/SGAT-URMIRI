def saludar(nombre_completo):
    if not nombre_completo:
        return "El nombre no puede estar vacío"
    return f"Hola {nombre_completo}"

print(saludar("GitHub"))