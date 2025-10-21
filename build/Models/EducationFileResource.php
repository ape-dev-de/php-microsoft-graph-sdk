<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationFileResource
 */
class EducationFileResource
{
    public function __construct(
        /** Location on disk of the file resource. */
        public ?string $fileUrl = null
    ) {}
}
