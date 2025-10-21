<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityEventPropagationResult
 */
class SecurityEventPropagationResult
{
    public function __construct(
        /** The name of the specific location in the workload associated with the event. */
        public ?string $location = null,
        /** The name of the workload associated with the event. */
        public ?string $serviceName = null,
        /** Indicates the status of the event creation request. The possible values are: none, inProcessing, failed, success, unknownFutureValue. */
        public ?string $status = null,
        /** Additional information about the status of the event creation request. */
        public ?string $statusInformation = null
    ) {}
}
