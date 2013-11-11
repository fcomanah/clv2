<?php
    $page_title = 'Administrador';
    
    $reg_errors = array();    
    $info = array();

    $display_left_panel = false;
    $left_panel_href = 'lmenu';
    $left_panel_data_icon = 'flat-menu';
    $left_panel_name = 'Menu Principal';
    
    $display_right_panel = false;
    $right_panel_href = 'rmenu';
    $right_panel_data_icon = 'gear';
    $right_panel_name = 'Acesso Rápido';

    include (__DIR__.'/header.html');
    if ($display_left_panel)
    {
        $left_content = array();
        $left = array();
        
        $left['nme']="Usuários";
        $left['href']="../usr/";
        array_push($left_content, $left);
        
        $left['nme']="Produtos";
        $left['href']="../prd/";
        array_push($left_content, $left);
        
        $left['nme']="Transações";
        $left['href']="../trs/";
        array_push($left_content, $left);
        
        include(__DIR__.'/left.html');
    }
    
    #include (__DIR__.'/middle.html');
    include (__DIR__.'/create-middle.html');
    
    if ($display_right_panel)
    {
        $right_content = array();
        $right    =array();
        
        $right['nme']="Atualizar Usuário";
        $right['href']="../usr/create.php";
        array_push($right_content, $right);
        
        $right['nme']="Remover Produto";
        $right['href']="../prd/update.php";
        array_push($right_content, $right);
        
        $right['nme']="Consultar Transação";
        $right['href']="../trs/read.php";
        array_push($right_content, $right);
        
        include(__DIR__.'/right.html');
    }
    include (__DIR__.'/footer.html');
