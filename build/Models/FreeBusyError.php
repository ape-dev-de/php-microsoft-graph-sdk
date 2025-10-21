<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FreeBusyError
 */
class FreeBusyError
{
    public function __construct(
        /** Describes the error. */
        public ?string $message = null,
        /** The response code from querying for the availability of the user, distribution list, or resource. */
        public ?string $responseCode = null
    ) {}
}
