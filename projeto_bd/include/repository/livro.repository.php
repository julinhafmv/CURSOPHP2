<?php

class LivroRepository implements repository
{
    public static function listAll(){
        $db = DB::getInstance();

        $sql = "SELECT * from livro";

        $query = $db->prepare($sql);
        $query->execute();

        $list = array();
        foreach($query->fetchALL(PDO::FETCH_OBJ) as $row){
            $livro = new Livros;
            $livro->setId($row->id);
            $livro->setTitulo($row->titulo);
            $livro->setAno($row->ano);
            $livro->setGenero($row->genero);
            $livro->setIsbn($row->isbn);
            $livro->setAutorId($row->autor_id);
            $livro->setDataInclusao($row->data_inclusao);
            $livro->setDataAlteracao($row->data_alteracao);
            $livro->setInclusaoFuncionarioId($row->inclusao_funcionario_id);
            $livro->setAlteracaoFuncionarioId($row->alteracao_funcionario_id);
            $list[] = $Livros;
        }
        return $list;

    }
    public static function get($id)
    {
        $db = DB::getInstance();

        $sql = "SELECT * from livro where id = :id";

        $query = $db->prepare($sql);
        $query->bindParam("id", $id);
        $query->execute();

        if ($query->rowCount() > 0) {
            $row = $query->fetch(PDO::FETCH_OBJ);

            $livro = new livro;
            $livro->setId($row->id);
            $livro->setTitulo($row->titulo);
            $livro->setAno($row->ano);
            $livro->setGenero($row->genero);
            $livro->setIsbn($row->isbn);
            $livro->setAutorId($row->autor_id);
            $livro->setDataInclusao($row->data_inclusao);
            $livro->setDataAlteracao($row->data_alteracao);
            $livro->setInclusaoFuncionarioId($row->inclusao_funcionario_id);
            $livro->setAlteracaoFuncionarioId($row->alteracao_funcionario_id);

            return $livro;
        }
        return null;
    }
    public static function insert($obj){
        $db = DB::getInstance();

        $sql = "INSERT INTO livro (titulo, ano, genero, isbn, autor_id, data_inclusao, inclusao_funcionario_id) VALUES(:titulo,:ano, :genero, :isbn, :autor_id:data_inclusao,:inclusao_funcionario_id)";

        $query = $db->prepare($sql);

        $query->bindValue(":titulo",$obj->getTitulo());
        $query->bindValue(":ano",$obj->getAno());
        $query->bindValue(":genero",$obj->getGenero());
        $query->bindValue(":isbn",$obj->getIsbn());
        $query->bindValue(":autor_id",$obj->getAutorId());
        $query->bindValue(":data_inclusao",$obj->getDataInclusao());
        $query->bindValue(":inclusao_funcionario_id",$obj->getInclusaoFuncionarioId());

        $query->execute();

        $id = $db->lastInsertId();

        return $id;
    }
 
    public static function update($obj){
        $db = DB::getInstance();

        $sql = "UPDATE autor SET titulo = :titulo, data_alteracao = :data_alteracao, alteracao_funcionario_id = :alteracao_funcionario_id Where id = :id";

        $query = $db->prepare($sql);
        $query->bindValue(":nome",$obj->getNome());
        $query->bindValue(":data_alteracao",$obj->getDataAlteracao());
        $query->bindValue(":alteracao_funcionario_id",$obj->getAlteracaoFuncionarioId());
        $query->bindValue(":id",$obj->getId());
        $query->execute();
    }
  
    public static function delete($id){}

}