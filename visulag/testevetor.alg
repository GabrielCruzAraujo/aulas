  algoritmo "TesteVetor"
  var
     v: vetor[1..10] de Inteiro
     c: Inteiro

  inicio
        Para c <- 1 ate 10 faca
             Escreva("Digite o ", c, "o. valor: ")
             Leia(v[c])
        FimPara
        
        Para c <- 1 ate 10 faca
             Escreva ("{", v[c], "}")
        Fimpara
  fimalgoritmo
