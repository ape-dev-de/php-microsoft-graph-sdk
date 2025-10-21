<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageQuestion
 */
class AccessPackageQuestion
{
    public function __construct(
        /** Specifies whether the requestor is allowed to edit answers to questions for an assignment by posting an update to accessPackageAssignmentRequest. */
        public ?bool $isAnswerEditable = null,
        /** Whether the requestor is required to supply an answer or not. */
        public ?bool $isRequired = null,
        /** The text of the question represented in a format for a specific locale. */
        public array $localizations = [],
        /** Relative position of this question when displaying a list of questions to the requestor. */
        public ?float $sequence = null,
        /** The text of the question to show to the requestor. */
        public ?string $text = null
    ) {}
}
