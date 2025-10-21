<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CallMediaState
 */
class CallMediaState
{
    public function __construct(
        /** The audio media state. Possible values are: active, inactive, unknownFutureValue. */
        public ?string $audio = null
    ) {}
}
