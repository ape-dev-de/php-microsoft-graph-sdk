<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ClassificationInnerError
 */
class ClassificationInnerError
{
    public function __construct(
        /** The activity ID associated with the request that generated the error. */
        public ?string $activityId = null,
        /** The client request ID, if provided by the caller. */
        public ?string $clientRequestId = null,
        /** A more specific, potentially internal, error code string. */
        public ?string $code = null,
        /** The date and time the inner error occurred. */
        public ?\DateTimeInterface $errorDateTime = null
    ) {}
}
