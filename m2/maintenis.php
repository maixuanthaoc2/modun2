<?php



class TennisGame
{
    public string $score = '';

    public function getScore($m_score1, $m_score2)
    {

        $score = $this->score;
        if ($m_score1 == $m_score2) {
            $this->extracted3($m_score1);
        } else {
            $this->extracted2($m_score1, $m_score2, $score);
        }
    }

    public function __toString(): string
    {
        return $this->score;
    }

    /**
     * @param $m_score1
     * @param string $score
     * @param $m_score2
     */
    public function extracted($m_score1, string $score, $m_score2): void
    {
        for ($i = 1; $i < 3; $i++) {
            if ($i == 1) $tempScore = $m_score1;
            else {
                $score .= "-";
                $tempScore = $m_score2;
            }
            switch ($tempScore) {
                case 0:
                    $score .= "Love";
                    break;
                case 1:
                    $score .= "Fifteen";
                    break;
                case 2:
                    $score .= "Thirty";
                    break;
                case 3:
                    $score .= "Forty";
                    break;
            }
        }
    }

    /**
     * @param $minusResult
     */
    public function extracted1($minusResult): void
    {
        if ($minusResult == 1) $score = "Advantage player1";
        else if ($minusResult == -1) $score = "Advantage player2";
        else if ($minusResult >= 2) $score = "Win for player1";
        else $score = "Win for player2";
    }

    /**
     * @param $m_score1
     * @param $m_score2
     * @param string $score
     */
    public function extracted2($m_score1, $m_score2, string $score): void
    {
        $this->extracted4($m_score1, $m_score2, $score);
    }

    /**
     * @param $m_score1
     */
    public function extracted3($m_score1): void
    {
        switch ($m_score1) {
            case 0:
                $score = "Love-All";
                break;
            case 1:
                $score = "Fifteen-All";
                break;
            case 2:
                $score = "Thirty-All";
                break;
            case 3:
                $score = "Forty-All";
                break;
            default:
                $score = "Deuce";
                break;

        }
    }

    /**
     * @param $m_score1
     * @param $m_score2
     * @param string $score
     */
    public function extracted4($m_score1, $m_score2, string $score): void
    {
        $greaterThan4 = $m_score1 >= 4;
        if ($greaterThan4 || $m_score2 >= 4) {
            $minusResult = $m_score1 - $m_score2;
            $this->extracted1($minusResult);
        } else {
            $this->extracted($m_score1, $score, $m_score2);
        }
    }
}