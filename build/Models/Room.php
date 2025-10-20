<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Room
 */
class Room
{
    /**
     * Specifies the name of the audio device in the room.
     */
    private ?string $audioDeviceName;

    /**
     * Type of room. Possible values are standard, and reserved.
     */
    private ?string $bookingType;

    /**
     * Specifies the building name or building number that the room is in.
     */
    private ?string $building;

    /**
     * Specifies the capacity of the room.
     */
    private ?float $capacity;

    /**
     * Specifies the name of the display device in the room.
     */
    private ?string $displayDeviceName;

    /**
     * Email address of the room.
     */
    private ?string $emailAddress;

    /**
     * Specifies a descriptive label for the floor, for example, P.
     */
    private ?string $floorLabel;

    /**
     * Specifies the floor number that the room is on.
     */
    private ?float $floorNumber;

    /**
     * Specifies whether the room is wheelchair accessible.
     */
    private ?bool $isWheelChairAccessible;

    /**
     * Specifies a descriptive label for the room, for example, a number or name.
     */
    private ?string $label;

    /**
     * Specifies a nickname for the room, for example, ''conf room''.
     */
    private ?string $nickname;

    /**
     * Specifies other features of the room, for example, details like the type of view or furniture type.
     */
    private ?string $tags;

    /**
     * Specifies the name of the video device in the room.
     */
    private ?string $videoDeviceName;

    public function getAudioDeviceName(): ?string
    {
        return $this->audioDeviceName;
    }

    public function setAudioDeviceName(?string $audioDeviceName): self
    {
        $this->audioDeviceName = $audioDeviceName;
        return $this;
    }

    public function getBookingType(): ?string
    {
        return $this->bookingType;
    }

    public function setBookingType(?string $bookingType): self
    {
        $this->bookingType = $bookingType;
        return $this;
    }

    public function getBuilding(): ?string
    {
        return $this->building;
    }

    public function setBuilding(?string $building): self
    {
        $this->building = $building;
        return $this;
    }

    public function getCapacity(): ?float
    {
        return $this->capacity;
    }

    public function setCapacity(?float $capacity): self
    {
        $this->capacity = $capacity;
        return $this;
    }

    public function getDisplayDeviceName(): ?string
    {
        return $this->displayDeviceName;
    }

    public function setDisplayDeviceName(?string $displayDeviceName): self
    {
        $this->displayDeviceName = $displayDeviceName;
        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function getFloorLabel(): ?string
    {
        return $this->floorLabel;
    }

    public function setFloorLabel(?string $floorLabel): self
    {
        $this->floorLabel = $floorLabel;
        return $this;
    }

    public function getFloorNumber(): ?float
    {
        return $this->floorNumber;
    }

    public function setFloorNumber(?float $floorNumber): self
    {
        $this->floorNumber = $floorNumber;
        return $this;
    }

    public function getIsWheelChairAccessible(): ?bool
    {
        return $this->isWheelChairAccessible;
    }

    public function setIsWheelChairAccessible(?bool $isWheelChairAccessible): self
    {
        $this->isWheelChairAccessible = $isWheelChairAccessible;
        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(?string $nickname): self
    {
        $this->nickname = $nickname;
        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;
        return $this;
    }

    public function getVideoDeviceName(): ?string
    {
        return $this->videoDeviceName;
    }

    public function setVideoDeviceName(?string $videoDeviceName): self
    {
        $this->videoDeviceName = $videoDeviceName;
        return $this;
    }

}
