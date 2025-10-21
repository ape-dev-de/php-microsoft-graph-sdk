<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationModuleResource
 */
class EducationModuleResource
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Resource object that is with this module. */
        public ?string $resource = null
    ) {}
}
