<?php

//Created the class with methods
class Reservation
{
    public string $GuestName;
    public int $ReservationID;
    public string $GuestTable;

    public function allGuestInfo() : string {
        return ("This is reserved for $this->GuestName. Table $this->GuestTable");
    }
}

//Assigned with new properties 
$newGuest = new Reservation();
$newGuest->GuestName = "Joe Ban";
$newGuest->ReservationID = 12345;
$newGuest->GuestTable = 14;

//Assigned with new properties 
$newGuest2 = new Reservation();
$newGuest2->GuestName = "Gael Rueda";
$newGuest2->ReservationID = 982730;
$newGuest2->GuestTable = 10;

// print_r($newGuest);
$Reservations = [];
array_push($Reservations, $newGuest);
array_push($Reservations, $newGuest2);
print_r($Reservations);

//Loops to output an array with asserted information for each object 
foreach($Reservations as $Reservtion){
    print_r($Reservtion->allGuestInfo());
}