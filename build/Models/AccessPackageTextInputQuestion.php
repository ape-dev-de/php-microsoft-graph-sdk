<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageTextInputQuestion
 */
class AccessPackageTextInputQuestion
{
    public function __construct(
        /** Indicates whether the answer is in single or multiple line format. */
        public ?bool $isSingleLineQuestion = null,
        /** The regular expression pattern that any answer to this question must match. */
        public ?string $regexPattern = null
    ) {}
}
