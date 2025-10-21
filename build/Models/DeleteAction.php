<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeleteAction
 */
class DeleteAction
{
    public function __construct(
        /** The name of the item that was deleted. */
        public ?string $name = null,
        /** File or Folder, depending on the type of the deleted item. */
        public ?string $objectType = null
    ) {}
}
