<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeletedItemContainer
 */
class DeletedItemContainer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Deleted workflows that end up in the deletedItemsContainer. */
        public array $workflows = []
    ) {}
}
