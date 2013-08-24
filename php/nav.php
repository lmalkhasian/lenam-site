<?php
    
    function getNavLink($page) {
        
        $pageName = $page.to_lower() + ".php";
        
        
        if(basename($_SERVER['PHP_SELF']) == $pageName)
            $class = "active";
        else
            $class = "";
        
        echo '<li class="$class"><a href="$pageName">"$page"</a></li>';
    }
    
?>