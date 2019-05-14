algoritmo "valorespares"
var
   CONT, V: Inteiro
inicio
      Escreva("Digite um valor: ")
      Leia(V)
      Se (V%2=1) entao
         V <- V - 1
      Fimse
      Para CONT <- V ate 0 passo -2 faca
           Escreval(CONT)
      Fimpara
fimalgoritmo
