<?php

use Hol_bwlist_user as Hol_User;

class Hol_bwlist_post
{
    private int $id;
    public int $PostNumber;
    public DateTime $PostDate;
    public User $PostUser;
    public string $PostContent;

    public function __construct(int $number, DateTime $date, User $user, string $content)
    {
        $this->PostNumber = $number;
        $this->PostDate = $date;
        $this->PostUser = $user;
        $this->PostContent = $content;
    }

    public function DisplayPostNumber()
    {
        return '#' . $this->PostNumber;
    }

    public function DisplayDate()
    {
        return $this->PostDate->format('d-m-Y H:i');
    }
    
    public function GetId()
    {
        return $this->id;
    }
}
