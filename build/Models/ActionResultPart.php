<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ActionResultPart
 */
class ActionResultPart
{
    public function __construct(
        /** The error that occurred, if any, during the bulk operation. */
        public ?PublicError $error = null
    ) {}
}
