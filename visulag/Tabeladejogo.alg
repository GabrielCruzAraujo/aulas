algoritmo "Tabelajogos"
var
   time: vetor[1..3] de Caractere
   i, j: Inteiro
inicio
      Para i <- 1 ate 3 faca
           Escreva("Digite o nome do time: ")
           Leia(time[i])
      Fimpara
      
      Escreval("-----------------")
      Escreval( " TABELA DE PARTIDAS  ")
      Escreval(" -------------------")
      
      Para I <- 1 ate 3 faca
         Para j <- 1 ate 3 faca
              Se(time[i] <>time[j]) entao
                Escreval(time[i]:10, "[]x[]" , time[j])
              Fimse
         Fimpara
      Fimpara
                         
fimalgoritmo
