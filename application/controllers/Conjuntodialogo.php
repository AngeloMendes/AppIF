<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Conjuntodialogo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Conjuntodialogo_model');
        $this->load->model('Dialogo_model');
        $this->load->model('Dialogofrase_model');
    }

    /*
     * Listing of conjuntodialogo
     */
    function index()
    {
        $data['conjuntodialogo'] = $this->Conjuntodialogo_model->get_all_conjuntodialogo();

        $data['_view'] = 'conjuntodialogo/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new conjuntodialogo
     */
    function add($idLicao)
    {

        if (isset($_POST) && count($_POST) > 0) {
            //adicionar dialogo

            $titulo = $this->input->post('titulo');

            if (!empty($_FILES['imagem']['name'])) {
                $imagem = $_FILES['imagem'];

                $extensaoImagem = explode('.', $imagem['name']);
                $extensaoImagem = end($extensaoImagem);

                $caminhoImagem = base_url('application/midias/imagens/licoes/') . str_replace(" ", "", $titulo) . '.' . $extensaoImagem;
                $configuracaoImagem = array(
                    'upload_path' => './application/midias/imagens/licoes/',
                    'allowed_types' => 'jpg|png|jpeg|gif',
                    'file_name' => str_replace(array(' ', '?', '!', '.', ':'),
                            array('', '', '', '', ''), $titulo) . '.' . $extensaoImagem,
                    'max_size' => '500000',
                    'max_width' => '4096',
                    'max_height' => '4096'
                );

                $this->upload->initialize($configuracaoImagem);
                if (!$this->upload->do_upload('imagem')) {
                    ///$caminhoImagem=$this->upload->display_errors();
                    $caminhoImagem = 'error';
                }
            } else {
                $caminhoImagem = "";
            }
            $params = array(
                'titulo' => $titulo,
                'imagem' => $caminhoImagem,
                'descricao' => $this->input->post('descricao'),
                'ordem' => $this->input->post('ordem'),
                'idLicao' => $idLicao,
            );

            $idDialogo = $this->Dialogo_model->add_dialogo($params);

            //adicionar frases do dialogo
            $i=1;
            while (!empty($_POST['Frase'.$i]['frase'])){
                $fraseAtual = 'Frase'.$i;
                $params = array(
                    'descricao' => $this->input->post($fraseAtual.'[descricao]'),
                    'frase' => $this->input->post($fraseAtual.'[frase]'),
                    'opcao1' => $this->input->post($fraseAtual.'[opcao1]'),
                    'opcao2' => $this->input->post($fraseAtual.'[opcao2]'),
                    'opcao3' => $this->input->post($fraseAtual.'[opcao3]'),
                    'opcaoCorreta' => $this->input->post($fraseAtual.'[opcaoCorreta]'),
                );


                $idDialogofrase = $this->Dialogofrase_model->add_dialogofrase($params);

                $params = array(
                    'idDialogo' => $idDialogo,
                    'idDialogoFrases' => $idDialogofrase,
                );
                //var_dump($params);
                $conjuntodialogo_id = $this->Conjuntodialogo_model->add_conjuntodialogo($params);
                $i++;
            }

            redirect('conjuntodialogo/index');
        } else {
            $data['_view'] = 'dialogo/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a conjuntodialogo
     */
    function edit($idConjuntoDialogo)
    {
        // check if the conjuntodialogo exists before trying to edit it
        $data['conjuntodialogo'] = $this->Conjuntodialogo_model->get_conjuntodialogo($idConjuntoDialogo);

        if (isset($data['conjuntodialogo']['idConjuntoDialogo'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'idDialogo' => $this->input->post('idDialogo'),
                    'idDialogoFrases' => $this->input->post('idDialogoFrases'),
                );

                $this->Conjuntodialogo_model->update_conjuntodialogo($idConjuntoDialogo, $params);
                redirect('conjuntodialogo/index');
            } else {
                $data['_view'] = 'conjuntodialogo/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The conjuntodialogo you are trying to edit does not exist.');
    }

    /*
     * Deleting conjuntodialogo
     */
    function remove($idConjuntoDialogo)
    {
        $conjuntodialogo = $this->Conjuntodialogo_model->get_conjuntodialogo($idConjuntoDialogo);

        // check if the conjuntodialogo exists before trying to delete it
        if (isset($conjuntodialogo['idConjuntoDialogo'])) {
            $this->Conjuntodialogo_model->delete_conjuntodialogo($idConjuntoDialogo);
            redirect('conjuntodialogo/index');
        } else
            show_error('The conjuntodialogo you are trying to delete does not exist.');
    }

}
