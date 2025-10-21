<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventSession
 */
class VirtualEventSession
{
    public function __construct(
        /** The virtual event session end time. */
        public ?string $endDateTime = null,
        /** The virtual event session start time. */
        public ?string $startDateTime = null,
        /** The URL of the video on demand (VOD) for Microsoft Teams events that allows webinar and town hall organizers to quickly publish and share event recordings. */
        public ?string $videoOnDemandWebUrl = null
    ) {}
}
