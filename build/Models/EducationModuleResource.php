<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationModuleResource
 */
class EducationModuleResource
{
    public function __construct(
        /** Resource object that is with this module. */
        public ?string $resource = null
    ) {}
}
