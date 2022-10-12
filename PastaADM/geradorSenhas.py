from random import choice
import string

caracteres = string.ascii_letters + string.digits
senha_segura= ''
for i in range (8):
    senha_segura+= choice(caracteres)

print(senha_segura)


caracteres = string.digits
senha_segura= ''
for i in range (7):
    senha_segura+= choice(caracteres)

print(senha_segura)

caracteres = string.ascii_letters + string.digits
senha_segura= ''
for i in range (10):
    senha_segura+= choice(caracteres)

print(senha_segura)