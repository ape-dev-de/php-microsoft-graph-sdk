<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ColumnLink
 */
class ColumnLink
{
    public function __construct(
        /** The name of the column  in this content type. */
        public ?string $name = null
    ) {}
}
