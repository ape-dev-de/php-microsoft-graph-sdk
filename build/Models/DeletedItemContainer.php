<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeletedItemContainer
 */
class DeletedItemContainer
{
    public function __construct(
        /** @var string[] Deleted workflows that end up in the deletedItemsContainer. */
        public array $workflows = []
    ) {}
}
