<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:20 PM
 */

class TennisGame
{
    public $score = '';

    public function getScore($player1Name, $player2Name, $m_score1, $m_score2)
    {
        include_once "EqualScore.php";
        include_once "NotEqualScore.php";
    }

    public function __toString()
    {
        return $this->score;
    }
}