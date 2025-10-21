<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResourceReference
 */
class ResourceReference
{
    public function __construct(
        /** The item's unique identifier. */
        public ?string $id = null,
        /** A string value that can be used to classify the item, such as 'microsoft.graph.driveItem' */
        public ?string $type = null,
        /** A URL leading to the referenced item. */
        public ?string $webUrl = null
    ) {}
}
