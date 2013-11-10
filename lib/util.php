<?php
    function here ($a = 123, $b = 456){ 
        echo "</br>".$a." at line ".$b;
    } 

    function create_form_input($name, $type, $errors) {    
        $value = false;
        if (isset($_POST[$name])) $value = $_POST[$name];
        if ($value && get_magic_quotes_gpc()) $value = stripslashes($value);
        if ( ($type == 'text') || ($type == 'password') ) {
            echo '<input type="' . $type . '" name="' . $name . '" id="' . $name . '"';
            if ($value) echo ' value="' . htmlspecialchars($value) . '"';
            if (array_key_exists($name, $errors)) {
                echo 'class="error" /> <div class="error">' . $errors[$name] . '</div>';
            } else {
                echo ' />';    
            }
        } elseif ($type == 'textarea') { 
            if (array_key_exists($name, $errors)) echo ' <span class="error">' . $errors[$name] . '</span>';
            echo '<textarea name="' . $name . '" id="' . $name . '" rows="5" cols="75"';
            if (array_key_exists($name, $errors)) {
                echo ' class="error">';
            } else {
                echo '>';    
            }
            if ($value) echo $value;
            echo '</textarea>';
        }
    }

    function update_form_input($name, $atual, $disabled, $type, $errors) {
        $value = false;
        if (isset($_POST[$name])) $value = $_POST[$name];
        else if($atual) $value = $atual;
        if ($value && get_magic_quotes_gpc()) $value = stripslashes($value);
        if ( ($type == 'text') || ($type == 'password') ) {
            $up = '<input type="' . $type . '" name="' . $name . '" id="' . $name . '"';
            if ( $disabled == 'true' ) $up .= 'disabled="disabled"' ;
            if ($value) $up .= ' value="' . htmlspecialchars($value) . '"';
            if (array_key_exists($name, $errors)) {
                $up .= 'class="error" /> <div class="error">' . $errors[$name] . '</div>';
            } else {
                $up .= ' />';    
            }
        } elseif ($type == 'textarea') {
            if (array_key_exists($name, $errors)) echo ' <span class="error">' . $errors[$name] . '</span>';
            $up = '<textarea name="' . $name . '" id="' . $name . '" rows="5" cols="75"';
            if ( $disabled == 'true' ) echo 'disabled="disabled"' ;
            if (array_key_exists($name, $errors)) {
                $up .= ' class="error">';
            } else {
                $up .= '>';    
            }
            if ($value) echo $value;
            $up .= '</textarea>';
        }
        return $up;
    }    

    function echo_title($page_title) 
    {
        if (isset($page_title)) 
        { 
            echo $page_title; 
        } 
        else 
        { 
            echo 'Construindo Lojas Virtuais'; 
        } 
    }

    function echo_button($display, $href, $data_icon, $name) 
    {
        if ($display)
        {
            echo '<a data-iconpos="notext" href="#' . $href . '" data-role="button" data-icon="' . $data_icon . '">' . $name . '</a>';
        }
        else
        {
            echo '<a></a>';
        }
    }
    
    function get_password_hash($password) {
        // Need the database connection:
        global $dbc;
        // Return the escaped password:
        return mysqli_real_escape_string ($dbc, hash_hmac('sha256', $password, 'c#haRl891', true));    
    } // End of get_password_hash() function.

