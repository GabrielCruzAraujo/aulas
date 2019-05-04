algoritmo "calculoIMC"
var
   M, A, IMC: Real

inicio
      Escreva("Massa (kg): " )
      Leia(M)
      Escreva("Altura (m): " )
      Leia(A)
      IMC <- M / (A ^ 2)
      Escreval("IMC: ", IMC:5:2)
      Se (IMC >= 18.5) e (IMC < 25) entao
         Escreva("Parabéns! Voce esta no peso ideal" )
      senao
         Escreva("Voce nao esta na faixa de peso ideal" )
      Fimse
fimalgoritmo
