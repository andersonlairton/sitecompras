<?php
// variaveis de retorno
$retorno = [
    'resposta_status'=>[
        'status'=>0,
        'msg'=>""
    ]
    ];
// print_r($_REQUEST);
if (isset($_REQUEST['component'])) {
    // verificando se o arquivo existe na pasta controller
    if (file_exists("../Controllers/{$_REQUEST['component']}.php")) {
        // $controller = str_replace('Controller','',$_REQUEST['component']);
        $action = verificaaction($_REQUEST['component'],'Controller');
    }elseif (file_exists("../Models/{$_REQUEST['component']}.php")) {
        $classe = str_replace('Model','',$_REQUEST['component']);
        $action = verificaaction($classe,"Models");
    }else {
        $retorno['resposta_status']['status'] = 0;
        $retorno['resposta_status']['msg'] = "Arquivo não localizado,servidor obteve resposta.Cod:" . __LINE__;
    }

    die;
} else {
    $retorno['resposta_status']['status'] = 0;
    $retorno['resposta_status']['msg'] = "Parametro nao localizado,servidor obteve resposta.Cod:" . __LINE__;
}

function verificaaction($class= null,$pasta = null)
{
    // print_r(__LINE__);
    // print_r($_REQUEST);die;
    if (isset($_REQUEST['action'])) {
        require_once "../{$pasta}/{$_REQUEST['component']}.php";

        // $p = new $class();
        // var_dump($p);
        // die;

        // verificando se a classe existe
        if (class_exists($class)) {
            // print_r(__LINE__);
            $c = new $class();

            // verificando se a função desejada existe
            if (method_exists($c,$_REQUEST['action'])) {
                // print_r(__LINE__);
                $funcao = $_REQUEST['action'];

                $f = $c->$funcao($_REQUEST);
                print_r(__LINE__);
                print_r($f);
            } else {
                $retorno['resposta_status']['status']=0;
                $retorno['resposta_status']['msg']="Função {$_REQUEST['action']} não localizda,servidor não obteve resposta.Cod:". __LINE__;
            }
            
            // var_dump($c);
        } else {
            $retorno['resposta_status']['status']=0;
            $retorno['resposta_status']['msg']="Classe {$class} não localizada,servidor não obteve resposta.Cod:". __LINE__;
        }

        die;
        
        print_r($_REQUEST);
        print_r("\n".$class."\n");
        print_r($pasta);
        die;
        // verificando se nao ha falta de dados
        
        // $u = new UsuarioController();
    
        // if ($_REQUEST['action'] == 'cadastrar') {
        //     $u->cadastrar();
        // } elseif ($_REQUEST['action'] == 'list') {
        //     $u->list();
        // } elseif ($_REQUEST['action'] == 'atualizar') {
        //     $u->atualizar();
        // }
        
    }else {
        $retorno['resposta_status']['status'] = 0;
        $retorno['resposta_status']['msg'] = "Parametro nao localizado,servidor obteve resposta.Cod:" . __LINE__;
    }

    return $retorno;
}

return $retorno;
