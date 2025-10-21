<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnlineMeetingInfo
 */
class OnlineMeetingInfo
{
    public function __construct(
        /** The ID of the conference. */
        public ?string $conferenceId = null,
        /** The external link that launches the online meeting. This is a URL that clients launch into a browser and will redirect the user to join the meeting. */
        public ?string $joinUrl = null,
        /** All of the phone numbers associated with this conference. */
        public array $phones = [],
        /** The preformatted quick dial for this call. */
        public ?string $quickDial = null,
        /** @var string[] The toll free numbers that can be used to join the conference. */
        public array $tollFreeNumbers = [],
        /** The toll number that can be used to join the conference. */
        public ?string $tollNumber = null
    ) {}
}
