<?php
    require('tools.php');
    //
    do_pre_html();
    //
    $ini = parse_ini_file("ini.ini",$process_sections = true);//, $scanner_mode = INI_SCANNER_NORMAL );
    //
    $html = ''; 
    $html .= print_air( gettype($ini),'type of $ini');
    //
    $html .= do_hr();
    $html .= print_air($ini,'le fichier ini');
    //
    $html .= do_hr();
    $html .= print_air( $ini['gordon'],'fiche de gordon');
    $html .= print_air( $ini['actarus'],'fiche de actarus');
    //
    $html .= do_hr();
    $html .= print_air( $ini['gordon']['poste'],'poste de gordon');
    $html .= print_air( $ini['actarus']['poste'],'poste de actarus');
    //
    do_post_html();
?>