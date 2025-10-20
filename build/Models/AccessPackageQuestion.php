<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageQuestion
 */
class AccessPackageQuestion
{
    /**
     * Specifies whether the requestor is allowed to edit answers to questions for an assignment by posting an update to accessPackageAssignmentRequest.
     */
    private ?bool $isAnswerEditable;

    /**
     * Whether the requestor is required to supply an answer or not.
     */
    private ?bool $isRequired;

    /**
     * The text of the question represented in a format for a specific locale.
     */
    private array $localizations = [];

    /**
     * Relative position of this question when displaying a list of questions to the requestor.
     */
    private ?float $sequence;

    /**
     * The text of the question to show to the requestor.
     */
    private ?string $text;

    public function getIsAnswerEditable(): ?bool
    {
        return $this->isAnswerEditable;
    }

    public function setIsAnswerEditable(?bool $isAnswerEditable): self
    {
        $this->isAnswerEditable = $isAnswerEditable;
        return $this;
    }

    public function getIsRequired(): ?bool
    {
        return $this->isRequired;
    }

    public function setIsRequired(?bool $isRequired): self
    {
        $this->isRequired = $isRequired;
        return $this;
    }

    public function getLocalizations(): array
    {
        return $this->localizations;
    }

    public function setLocalizations(array $localizations): self
    {
        $this->localizations = $localizations;
        return $this;
    }

    public function getSequence(): ?float
    {
        return $this->sequence;
    }

    public function setSequence(?float $sequence): self
    {
        $this->sequence = $sequence;
        return $this;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): self
    {
        $this->text = $text;
        return $this;
    }

}
