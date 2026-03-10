<?php

namespace App;

use SplObserver;
use SplSubject;

class MusicBand implements SplSubject
{
    protected $observers = [];

    public function __construct(
        private string $name,
        private array $concerts = []
    ) {}


    public function addNewConcertDate(string $date, string $location):void
    {
        $this->concert = [
            'date' =>  $date,
            'location' => $location
        ];
        $this->notify();
    }

    public function attach(SplObserver $observer): void {
        $this->observers[] = $observer;
    }

    public function detach(SplObserver $observer): void {
        foreach ($this->observers as $index => $obs) {
            if ($obs === $observer) {
                unset($this->observers[$index]);
            }
        }
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}