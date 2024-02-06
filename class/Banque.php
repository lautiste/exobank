<?php

class Banque {
    private $clients = [];

    public function ajouterClient($client) {
        array_push($this->clients, $client);
    }

