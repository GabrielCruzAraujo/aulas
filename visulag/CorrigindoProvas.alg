algoritmo "corrigindoprovas"
var
   gabarito: vetor[1..5] de Caractere
   alunos: vetor[1..3] de Caractere
   gabaritoAlunoUm: vetor[1..5] de Caractere
   gabaritoAlunoDois: vetor[1..5] de Caractere
   gabaritoAlunoTres: vetor[1..5] de Caractere
   notaAlunos: vetor[1..3] de Real
   Soma, mediaturma: real
   g,i,j: Inteiro
inicio
      Escreval("Passo 1 - Cadastro de Gabarito")
      Escreval("-------------------------------")
      
      Para g <- 1 ate 5 faca
           Escreva("Questao ",g, ":")
           Leia(gabarito[g])
      FimPara
      LimpaTela
      Para i <- 1 ate 3 faca
           LimpaTela
           Soma <- 0
           Escreval("--------------")
           Escreval("ALUNO",i)
           Escreval("--------------")
           Escreva("Nome: ")
           Leia(alunos[i])
           Escreval("RESPOSTAS DADAS")
           
           Para j <- 1 ate 5 faca
                Se(alunos[i] = 1) entao
                  Escreva("Questao", j, ":")
                  Leia(gabaritoAlunoUm[j])
                  Se(gabaritoAlunoUm[j] = gabarito[j]) entao
                  Soma <- Soma + 2
                FimSe
                
                Senao
                  Se(alunos[i] = 2) entao
                  Escreva("Questao", j, ":")
                  Leia(gabaritoAlunoDois[j])
                  Se(gabaritoAlunoDois[j] = gabarito[j] entao
                  Soma <- Soma + 2
                  Fimse
                Fimse
                Senao
                     Escreva("Questao ",j. ":")
                     Leia(gabaritoAlunoTres[j])
                     Se(gabaritoAlunoUm[j] = gabarito[j] entao
                       Soma <- Soma + 2
                     Fimse
                Fimse
            Fimpara
            notaAlunos[i] <- Soma
          Fimpara
          mediaTurma <- (notaAlunos[1] + notaAlunos[2] + notaAlunos[3])/3
          
          LimpaTela
          
          Escreval("NOTAS FINAIS")
          Escreval("-------------")
          Para i <- 1 ate 3 faca
               Escreval(alunos[i]:10, notaAlunos[i])
          Fimpara
          Escreval("------------------")
          Escreva("Media da Turma: ", mediaTurma:2)
                
                
                
           
      
fimalgoritmo
