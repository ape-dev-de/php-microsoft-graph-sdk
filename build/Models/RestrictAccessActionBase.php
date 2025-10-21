<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RestrictAccessActionBase
 */
class RestrictAccessActionBase
{
    public function __construct(
        /** Action for the app to take. The possible values are: warn, audit, block. */
        public ?string $restrictionAction = null
    ) {}
}
