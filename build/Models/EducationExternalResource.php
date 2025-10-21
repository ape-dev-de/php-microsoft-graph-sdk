<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationExternalResource
 */
class EducationExternalResource
{
    public function __construct(
        /** Location of the resource. Required. */
        public ?string $webUrl = null
    ) {}
}
