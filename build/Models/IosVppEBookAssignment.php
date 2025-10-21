<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosVppEBookAssignment
 */
class IosVppEBookAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $installIntent = null,
        /** The assignment target for eBook. */
        public ?string $target = null
    ) {}
}
