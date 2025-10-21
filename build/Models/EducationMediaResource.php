<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationMediaResource
 */
class EducationMediaResource
{
    public function __construct(
        /** Location of the file on shared point folder. Required */
        public ?string $fileUrl = null
    ) {}
}
