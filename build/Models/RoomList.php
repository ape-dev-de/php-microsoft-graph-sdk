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
     */
    private ?string $rooms;

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function getRooms(): ?string
    {
        return $this->rooms;
    }

    public function setRooms(?string $rooms): self
    {
        $this->rooms = $rooms;
        return $this;
    }

}
