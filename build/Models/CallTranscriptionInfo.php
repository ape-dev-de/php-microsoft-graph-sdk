<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallTranscriptionInfo
 */
class CallTranscriptionInfo
{
    public function __construct(
        /** The state modified time in UTC. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /**  */
        public ?string $state = null
    ) {}
}
