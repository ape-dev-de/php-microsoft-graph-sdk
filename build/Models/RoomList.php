<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoomList
 */
class RoomList
{
    public function __construct(
        /** The email address of the room list. */
        public ?string $emailAddress = null,
        /** @var string[]  */
        public array $rooms = []
    ) {}
}
