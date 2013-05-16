<?php



/**
 * Skeleton subclass for representing a row from the 'game_player' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.tarot
 */
class GamePlayer extends BaseGamePlayer
{
    public function getPlayerId(){
        return $this->player_id;
    }
}
