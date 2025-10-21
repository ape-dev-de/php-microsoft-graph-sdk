<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageMultipleChoiceQuestion
 */
class AccessPackageMultipleChoiceQuestion
{
    public function __construct(
        /** List of answer choices. */
        public array $choices = [],
        /** Indicates whether requestor can select multiple choices as their answer. */
        public ?string $isMultipleSelectionAllowed = null
    ) {}
}
