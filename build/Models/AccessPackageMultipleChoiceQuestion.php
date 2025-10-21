<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageMultipleChoiceQuestion
 */
class AccessPackageMultipleChoiceQuestion
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Specifies whether the requestor is allowed to edit answers to questions for an assignment by posting an update to accessPackageAssignmentRequest. */
        public ?bool $isAnswerEditable = null,
        /** Whether the requestor is required to supply an answer or not. */
        public ?bool $isRequired = null,
        /** The text of the question represented in a format for a specific locale. */
        public array $localizations = [],
        /** Relative position of this question when displaying a list of questions to the requestor. */
        public ?float $sequence = null,
        /** The text of the question to show to the requestor. */
        public ?string $text = null,
        /** List of answer choices. */
        public array $choices = [],
        /** Indicates whether requestor can select multiple choices as their answer. */
        public ?string $isMultipleSelectionAllowed = null
    ) {}
}
