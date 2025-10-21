<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallParticipantInfo
 */
class CallParticipantInfo
{
    public function __construct(
        /** Identity of the call participant. */
        public ?string $participant = null
    ) {}
}
