<?php

    class PortfolioManager extends Model
    {
        public function getPortfolio()
        {
            return $this->getAll('portfolio','Portfolio');
        }
    }