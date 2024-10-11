<?php

namespace App\Service;

final class PythagoreUtility {

    public function display(): string 
    {
        // Créer un tableau de Pythagore HTML
        $html = '<table border="1" cellspacing="0" cellpadding="5">';
            $html .= '<thead>';
                $html .= '<tr>';
                    for ($i=0; $i <=10 ; $i++) { 
                        $html .= '<td>' . $i . '</td>';
                    }
                $html .= '</tr>';
            $html .= '</thead>';
            $html .= '<tbody>';
                for ($i = 1; $i <= 10; $i++) {
                    $html .= '</tr>';
                        $html .= '<th>' .$i. '</th>';
                        for ($j = 1; $j <= 10; $j++) {
                            if ($i == $j) {
                                $html .= '<td>' . 'x' . '</td>';
                            } else {
                                $html .= '<td>' . ($i * $j) . '</td>';
                            }
                        }
                    $html .= '</tr>';
                }
            $html .= '<tbody>';
        $html .= '</table>';

        return $html;
    }
}
?>