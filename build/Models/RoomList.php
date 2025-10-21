<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoomList
 */
class RoomList
{
    /**
     * The email address of the room list.
     */
    private ?string $emailAddress;

    /**
     * @var string[]
     */
    private array $rooms = [];


    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRooms(): array
    {
        return $this->rooms;
    }

    /**
     * @param string[] $rooms
     */
    public function setRooms(array $rooms): self
    {
        $this->rooms = $rooms;
        return $this;
    }

}
