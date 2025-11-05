<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
      $name = trim($name);
        return substr($name, 0, 1);
    }

    public function initial(string $name): string
    {
        $initial = ucwords($this->firstLetter($name));
        return $initial . '.';
    }

    public function initials(string $name): string
    {
    $initials = explode(" ", trim($name));

        $first_initial = $this->initial($initials[0]);
        $last_initial = $this->initial($initials[1]);

    return $first_initial . " " . $last_initial;
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $first_pair = $this->initials($sweetheart_a);
        $second_pair = $this->initials($sweetheart_b);

            $message = "     {$first_pair}  +  {$second_pair}     ";

    return <<<HEART
         ******       ******
       **      **   **      **
     **         ** **         **
    **            *            **
    **                         **
    **{$message}**
     **                       **
       **                   **
         **               **
           **           **
             **       **
               **   **
                 ***
                  *
    HEART;
    }
}
