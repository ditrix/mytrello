<?php

namespace Database\Seeders\App;

use Illuminate\Database\Seeder;
use App\Models\Desk;
use App\Models\DeskList;
use App\Models\Card;
use App\Models\Task;



class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        for($deskId = 0; $deskId < 3; $deskId++  ) {
            $desk = new Desk();
            $desk->name = 'Desk '.$deskId;
            $desk->save();

            for($deskListId = 0; $deskListId < 4; $deskListId++  ) {
                $deskList = new DeskList();
                $deskList->name = 'DeskList '. $deskId .' '.$deskListId;
                $deskList->desk_id =  $desk->id;
                $deskList->save();


                for($cardId = 0; $cardId < 2; $cardId++) {
                    $card = new Card();
                    $card->name = 'DeskList '. $deskId .' '.$deskListId . ' ' .$cardId;
                    $card->desk_list_id = $deskList->id;
                    $card->save();

                    for($taskId = 0; $taskId < 1; $taskId++) {
                        $task = new Task();
                        $task->name = 'DeskList '. $deskId .' '.$deskListId . ' ' .$cardId. ' '.$taskId;
                        $task->card_id = $card->id;
                        $task->save();
                    }
                 }
             }
        }
    }
}
