<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\aircraftClass;
use App\Models\planeTicket;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        aircraftClass::truncate();
        planeTicket::truncate();
        
        $user =User::factory()->create();
        $a1=aircraftClass::create([
            'name' => "Prva klasa",
            'Company' => "AirSerbia"
        ]);
        $a2=aircraftClass::create([
            'name' => "Druga klasa",
            'Company' => "Rayanair"
         ]);

         $a3= aircraftClass::create([
            'name' => "Treca klasa",
            'Company' => "WizzAir"
        ]);
        $planeTicket1 =  planeTicket::create([
            'From'=>'Beograd',
            'To'=>'Barselona',
            'Departure'=>'2023-02-02',
            'Return'=>'2023-02-10',
            'Type'=>'Povratna',
            'Baggage'=> true,
            'Price'=>240,
            'UserID'=>$user->id,
            'class'=>$a2->id
            
            
            
        ]);

        $planeTicket2 =  planeTicket::create([
            'From'=>'Zagreb',
            'To'=>'Sofija',
            'Departure'=>'2023-02-02',
            'Return'=>'2023-02-02',
            'Type'=>'Nepovratna',
            'Baggage'=> true,
            'Price'=>120,
            'UserID'=>$user->id,
            'class'=>$a1->id
        ]);

        $planeTicket3 =  planeTicket::create([
            'From'=>'Beograd',
            'To'=>'Berlin',
            'Departure'=>'2023-04-02',
            'Return'=>'2023-04-06',
            'Type'=>'Povratna',
            'Baggage'=> false,
            'Price'=>180,
            'UserID'=>$user->id,
            'class'=>$a3->id
        ]);


        
        
    }
}
