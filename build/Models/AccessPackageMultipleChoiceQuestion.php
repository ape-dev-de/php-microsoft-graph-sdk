<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageMultipleChoiceQuestion
 */
class AccessPackageMultipleChoiceQuestion
{
    /**
     * List of answer choices.
     */
    private array $choices = [];

    /**
     * Indicates whether requestor can select multiple choices as their answer.
     */
    private ?string $isMultipleSelectionAllowed;


    public function getChoices(): array
    {
        return $this->choices;
    }

    public function setChoices(array $choices): self
    {
        $this->choices = $choices;
        return $this;
    }

    public function getIsMultipleSelectionAllowed(): ?string
    {
        return $this->isMultipleSelectionAllowed;
    }

    public function setIsMultipleSelectionAllowed(?string $isMultipleSelectionAllowed): self
    {
        $this->isMultipleSelectionAllowed = $isMultipleSelectionAllowed;
        return $this;
    }

}
