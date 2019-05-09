<?php
$compareEqualScore1AndScore2 = $m_score1 === $m_score2;

if ($compareEqualScore1AndScore2) {
    switch ($m_score1)
    {
        case 0:
            $this->score = "Love-All";
            break;
        case 1:
            $this->score = "Fifteen-All";
            break;
        case 2:
            $this->score = "Thirty-All";
            break;
        case 3:
            $this->score = "Forty-All";
            break;
        default:
            $this->score = "Deuce";
            break;

    }
}