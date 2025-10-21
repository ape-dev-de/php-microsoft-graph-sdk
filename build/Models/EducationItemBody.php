<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationItemBody
 */
class EducationItemBody
{
    public function __construct(
        /**  */
        public ?string $content = null,
        /**  */
        public ?string $contentType = null
    ) {}
}
