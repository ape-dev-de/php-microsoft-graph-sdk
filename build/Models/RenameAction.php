<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RenameAction
 */
class RenameAction
{
    public function __construct(
        /** The new name of the item. */
        public ?string $newName = null,
        /** The previous name of the item. */
        public ?string $oldName = null
    ) {}
}
