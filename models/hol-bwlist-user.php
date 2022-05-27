<?php

class Hol_bwlist_user
{
    private $id;
    public $Username;
    public $UserRank;
    public $PositiveRating;
    public $NegativeRating;
    public $TotalRating;
    
    public function __construct(string $username, string $userRank, int $positiveRating = 0, $negativeRating = 0, $totalRating = 0, $id=null)
    {
        $this->id = $id;
        $this->Username = $username;
        $this->UserRank = $userRank;
        $this->PositiveRating = $positiveRating;
        $this->NegativeRating = $negativeRating;
        $this->TotalRating = $totalRating;
    }
    
    public function GetTotalRating()
    {
        if ($this->NegativeRating !== null && $this->PositiveRating !== null) {
            return $this->PositiveRating - $this->NegativeRating;
        }
        if ($this->PositiveRating === null && $this->NegativeRating !== null) {
            return 0 - $this->NegativeRating;
        }
        if ($this->PositiveRating !== null && $this->NegativeRating === null) {
            return 0 + $this->PositiveRating;
        }
    }
}
