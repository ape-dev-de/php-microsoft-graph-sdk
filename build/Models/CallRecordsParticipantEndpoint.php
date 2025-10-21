<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallRecordsParticipantEndpoint
 */
class CallRecordsParticipantEndpoint
{
    public function __construct(
        /** User-agent reported by this endpoint. */
        public ?CallRecordsUserAgent $userAgent = null,
        /** Identity associated with the endpoint. */
        public ?Identity $associatedIdentity = null,
        /** CPU number of cores used by the media endpoint. */
        public ?float $cpuCoresCount = null,
        /** CPU name used by the media endpoint. */
        public ?string $cpuName = null,
        /** CPU processor speed used by the media endpoint. */
        public ?float $cpuProcessorSpeedInMhz = null,
        /** The feedback provided by the user of this endpoint about the quality of the session. */
        public ?CallRecordsUserFeedback $feedback = null,
        /** Identity associated with the endpoint. The identity property is deprecated and will stop returning data on June 30, 2026. Going forward, use the associatedIdentity property. */
        public ?IdentitySet $identity = null,
        /** Name of the device used by the media endpoint. */
        public ?string $name = null
    ) {}
}
