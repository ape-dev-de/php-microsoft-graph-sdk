<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ListItemVersion
 */
class ListItemVersion
{
    public function __construct(
        /** A collection of the fields and values for this version of the list item. */
        public ?string $fields = null
    ) {}
}
