<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IncludeAllAccountTargetContent
 */
class IncludeAllAccountTargetContent
{
    public function __construct(
        /** The type of account target content. Possible values are: unknown, includeAll, addressBook, unknownFutureValue. */
        public ?AccountTargetContentType $type = null
    ) {}
}
