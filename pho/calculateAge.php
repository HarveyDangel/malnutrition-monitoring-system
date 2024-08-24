<?php
    function GetAge($birthdate){
        $bday = new DateTime($birthdate);
        $today = new DateTime(date('m.d.y'));

        if($bday > $today){
            return 'Invalid';
        }
        $diff = $today->diff($bday);
        return ''. $diff->y . 'years and' .$diff->m. 'months';

    }
?>