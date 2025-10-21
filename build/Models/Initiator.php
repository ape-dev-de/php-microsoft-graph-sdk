<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Initiator
 */
class Initiator
{
    public function __construct(
        /** Type of initiator. Possible values are: user, application, system, unknownFutureValue. */
        public ?string $initiatorType = null
    ) {}
}
