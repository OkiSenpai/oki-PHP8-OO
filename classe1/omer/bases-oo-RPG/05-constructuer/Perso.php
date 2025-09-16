<?php


class Perso
{
    private ?int $id = null;
    private ?string $nickname = null;
    private ?string $race = null;
    private ?string $email = null;
    private ?int $health = null;
    public const int BEGIN_HEALTH = 100;
    private const array RACE = ["Humain", "elf", "Orque"];

    public function __construct(string $nick, string $race)
    {
        echo "J'ai construit un utilisateur";
        $this->nickname = $nick;
        $this->race = $race;
    }
}