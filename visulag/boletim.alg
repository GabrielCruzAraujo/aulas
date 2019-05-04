algoritmo "boletim"
var
   cont, alunos: inteiro
   nota, maior, menor: real
   nome, melhor_aluno: caractere
inicio
      cont <- 1
      Escreval ("     Escola Santa Paciência     ")
      Escreva ("Quantos alunos tem a turma?: ")
      leia (alunos)
      Enquanto (cont<=alunos) faca
         Escreval ("-------------------------------")
         Escreval ("Aluno ", cont)
         Escreva ("Digite o nome do aluno: ")
         leia (nome)
         Escreva ("Digite a nota de ", nome, ":")
         leia (nota)
         Se (nota > maior) entao
            maior <- nota
            melhor_aluno <- nome
         Senao
            menor <- nota
         FimSe
         cont <- cont+1
         FimEnquanto
         Escreval ("--------------------------------")
         Escreva ("O melhor aproveitamento foi de ", melhor_aluno, " com a ")
         Escreval (" nota ", maior)
         Escreval ("")
         Escreva ("Menor nota foi ", menor)
fimalgoritmo
