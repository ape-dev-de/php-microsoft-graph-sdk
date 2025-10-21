<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventExternalInformation
 */
class VirtualEventExternalInformation
{
    public function __construct(
        /** Identifier of the application that hosts the externalEventId. Read-only. */
        public ?string $applicationId = null,
        /** The identifier for a virtualEventExternalInformation object that associates the virtual event with an event ID in an external application. This association bundles all the information (both supported and not supported in virtualEvent) into one virtual event object. Optional. If set, the maximum supported length is 256 characters. */
        public ?string $externalEventId = null
    ) {}
}
