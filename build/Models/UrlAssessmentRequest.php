<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UrlAssessmentRequest
 */
class UrlAssessmentRequest
{
    public function __construct(
        /** The URL string. */
        public ?string $url = null
    ) {}
}
