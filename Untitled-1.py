preco_untario = 10
DESCONTO10 = 0.1
DESCONTO20 = 0.2
q = eval(input("digite a quantidade"))
if (q <=10):
   v=preco_untario*q
elif (q >=10):
     v=preco_untario*q*(1- DESCONTO10)
else:
    ( q >=20)
    V= preco_untario*q*(1- DESCONTO20)
print (f"o valor final do seu produto e de {v}")
      

