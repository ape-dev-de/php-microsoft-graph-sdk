<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Room
 */
class Room
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The street address of the place. */
        public ?string $address = null,
        /** The name associated with the place. */
        public ?string $displayName = null,
        /** Specifies the place location in latitude, longitude, and (optionally) altitude coordinates. */
        public ?string $geoCoordinates = null,
        /** The phone number of the place. */
        public ?string $phone = null,
        /** Specifies the name of the audio device in the room. */
        public ?string $audioDeviceName = null,
        /** Type of room. Possible values are standard, and reserved. */
        public ?string $bookingType = null,
        /** Specifies the building name or building number that the room is in. */
        public ?string $building = null,
        /** Specifies the capacity of the room. */
        public ?float $capacity = null,
        /** Specifies the name of the display device in the room. */
        public ?string $displayDeviceName = null,
        /** Email address of the room. */
        public ?string $emailAddress = null,
        /** Specifies a descriptive label for the floor, for example, P. */
        public ?string $floorLabel = null,
        /** Specifies the floor number that the room is on. */
        public ?float $floorNumber = null,
        /** Specifies whether the room is wheelchair accessible. */
        public ?bool $isWheelChairAccessible = null,
        /** Specifies a descriptive label for the room, for example, a number or name. */
        public ?string $label = null,
        /** Specifies a nickname for the room, for example, ''conf room''. */
        public ?string $nickname = null,
        /** @var string[] Specifies other features of the room, for example, details like the type of view or furniture type. */
        public array $tags = [],
        /** Specifies the name of the video device in the room. */
        public ?string $videoDeviceName = null
    ) {}
}
