<?php 

    class TeamManager extends Model
    {
        public function getTeam()
        {
            return $this->getALL('team','Portfolio');
        }
    }