<!DOCTYPE html>
 <html>
 <head>
    <title></title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>     
        <script type="text/javascript">
            // function atualizarTarefas() {
            //    // aqui voce passa o id do usuario
            //    var url="get.php?id=1";
            //     jQuery("#tarefas").load(url);
            // }
            // setInterval("atualizarTarefas()", 1000);

         

            //Após o carregamento da página
            document.addEventListener('DOMContentLoaded', function () {
                //Se não tiver suporte a Notification manda um alert para o usuário
                if (!Notification) {
                    alert('Desktop notifications not available in your browser. Try Chromium.'); 
                    return;
                }
                  
                //Se não tem permissão, solicita a autorização do usuário
                if (Notification.permission !== "granted")
                    Notification.requestPermission();
            });



            //Como podemos ver podemos criar um titulo, um icone e um texto para a notificação.
            var notification = new Notification('Um novo brefitinh foi criado!', {
                  icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
                  body: "Um novo brefitinh foi criado!",
            });

            notification.onclick = function () {
              window.open("http://stackoverflow.com/a/13328397/1269037");      
            };
        </script>   
 </head>
 <body>
    
 </body>
 </html>