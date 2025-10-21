<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedEBookAssignment
 */
class ManagedEBookAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $installIntent = null,
        /** Contains properties used to assign a eBook to a group. */
        public ?string $target = null
    ) {}
}
