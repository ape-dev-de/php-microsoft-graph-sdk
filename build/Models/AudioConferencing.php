<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AudioConferencing
 */
class AudioConferencing
{
    public function __construct(
        /** The conference id of the online meeting. */
        public ?string $conferenceId = null,
        /** A URL to the externally-accessible web page that contains dial-in information. */
        public ?string $dialinUrl = null,
        /** The toll-free number that connects to the Audio Conference Provider. */
        public ?string $tollFreeNumber = null,
        /** @var string[] List of toll-free numbers that are displayed in the meeting invite. */
        public array $tollFreeNumbers = [],
        /** The toll number that connects to the Audio Conference Provider. */
        public ?string $tollNumber = null,
        /** @var string[] List of toll numbers that are displayed in the meeting invite. */
        public array $tollNumbers = []
    ) {}
}
