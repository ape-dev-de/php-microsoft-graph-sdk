<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamGuestSettings
 */
class TeamGuestSettings
{
    public function __construct(
        /** If set to true, guests can add and update channels. */
        public ?bool $allowCreateUpdateChannels = null,
        /** If set to true, guests can delete channels. */
        public ?bool $allowDeleteChannels = null
    ) {}
}
