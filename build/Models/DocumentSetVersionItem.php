<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DocumentSetVersionItem
 */
class DocumentSetVersionItem
{
    public function __construct(
        /** The unique identifier for the item. */
        public ?string $itemId = null,
        /** The title of the item. */
        public ?string $title = null,
        /** The version ID of the item. */
        public ?string $versionId = null
    ) {}
}
