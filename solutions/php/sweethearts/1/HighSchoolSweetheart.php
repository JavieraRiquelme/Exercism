<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $clean_name = trim($name);
        return substr($clean_name, 0, 1);
    }

    public function initial(string $name): string
    {
        $initial = $this -> firstLetter($name); 
        return strtoupper($initial) . '.';
    }

    public function initials(string $name): string
    {
        $parts = explode(' ', $name);

        $firstname = $parts[0];
        $lastname = $parts[1];

        return $this->initial($firstname) . ' ' . $this->initial($lastname);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initials_a = $this->initials($sweetheart_a);
        $initials_b = $this->initials($sweetheart_b);

        $lineas = [
            "     ******       ******",
            "   **      **   **      **",
            " **         ** **         **",
            "**            *            **",
            "**                         **",
            "**     $initials_a  +  $initials_b     **",
            " **                       **",
            "   **                   **",
            "     **               **",
            "       **           **",
            "         **       **",
            "           **   **",
            "             ***",
            "              *",
        ];
        
        return implode("\n", $lineas);
    }
}
