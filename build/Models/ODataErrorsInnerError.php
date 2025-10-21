<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ODataErrorsInnerError
 */
class ODataErrorsInnerError
{
    public function __construct(
        /** Request Id as tracked internally by the service */
        public ?string $requestId = null,
        /** Client request Id as sent by the client application. */
        public ?string $clientRequestId = null,
        /** Date when the error occured. */
        public ?\DateTimeInterface $date = null
    ) {}
}
