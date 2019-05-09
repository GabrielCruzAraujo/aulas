algoritmo "cadastareconsultar"
var
   contador, opc, i: Inteiro
   vet: vetor[0..9] de Caractere
   vet2: vetor[0..9] de Inteiro

inicio
      opc <- 3
      contador <- 0
      i <- 0
      ENQUANTO (opc > 0) FACA
         Escreval("------------------")
         Escreval("------------------")
         Escreval("------------------")
         Escreval("      Escola Santa Paciência  ")
         Escreval("Digite: ")
         Escreval(" 1 - Para Cadastrar Aluno " )
         Escreval(" 2 - Para Consultar " )
         Escreval(" 0 - Para Sair " )

         Escreval(" Sua opção " )
         Leia(opc)

         Se(opc = 1) entao
                Escreval("Digite seu nome ")
                Leia(vet[contador])
                Escreval("Digite sua matricula")
                Leia(vet2[contador])
                contador <- contador + 1
         Fimse
         Se(opc = 2) entao
              //  Escreval("Nome do aluno: 10200 ")

                ENQUANTO (vet[i] <> "" ) FACA
                    Escreval(vet[i])
                    Escreval("Matricula s" ,vet2[i])
                    i <- i + 1
                FIMENQUANTO
                i <- 0
         Fimse
         Se(opc = 0) entao
                Escreval("Voltando para o inicio " )
         Fimse
         

      Fimenquanto
fimalgoritmo
