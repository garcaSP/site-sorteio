<?php
    function conecta($params = "")
    {
        if ($params == "")
        {
            $params =  "pgsql:host=projetoscti.com.br;
                        port=54432; 
                        dbname=eq1.ini2a;
                        user=eq1.ini2a;
                        password=eq12a449";
        }
        try
        {
            $varConn = new PDO($params);
            return $varConn;
        }
        catch (PDOException $e)
        {
            echo "Erro: " . $e->getMessage();
            exit;
        }
    }
?>