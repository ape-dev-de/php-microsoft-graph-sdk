<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsMedia
 */
class CallRecordsMedia
{
    public function __construct(
        /** Device information associated with the callee endpoint of this media. */
        public ?string $calleeDevice = null,
        /** Network information associated with the callee endpoint of this media. */
        public ?string $calleeNetwork = null,
        /** Device information associated with the caller endpoint of this media. */
        public ?string $callerDevice = null,
        /** Network information associated with the caller endpoint of this media. */
        public ?string $callerNetwork = null,
        /** How the media was identified during media negotiation stage. */
        public ?string $label = null,
        /** Network streams associated with this media. */
        public array $streams = []
    ) {}
}
