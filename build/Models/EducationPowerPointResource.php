<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationPowerPointResource
 */
class EducationPowerPointResource
{
    public function __construct(
        /** Location of the file on disk. */
        public ?string $fileUrl = null
    ) {}
}
