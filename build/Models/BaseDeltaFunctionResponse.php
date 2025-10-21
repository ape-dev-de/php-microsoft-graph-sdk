<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BaseDeltaFunctionResponse
 */
class BaseDeltaFunctionResponse
{
    public function __construct(
        /**  */
        public ?string $@odata.nextLink = null,
        /**  */
        public ?string $@odata.deltaLink = null
    ) {}
}
