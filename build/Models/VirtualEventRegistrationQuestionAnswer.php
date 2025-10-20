<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationQuestionAnswer
 */
class VirtualEventRegistrationQuestionAnswer
{
    /**
     * Boolean answer of the virtual event registration question. Only appears when answerInputType is boolean.
     */
    private ?bool $booleanValue;

    /**
     * Display name of the registration question.
     */
    private ?string $displayName;

    /**
     * Collection of text answer of the virtual event registration question. Only appears when answerInputType is multiChoice.
     */
    private ?string $multiChoiceValues;

    /**
     * id of the virtual event registration question.
     */
    private ?string $questionId;

    /**
     * Text answer of the virtual event registration question. Appears when answerInputType is text, multilineText or singleChoice.
     */
    private ?string $value;

    public function getBooleanValue(): ?bool
    {
        return $this->booleanValue;
    }

    public function setBooleanValue(?bool $booleanValue): self
    {
        $this->booleanValue = $booleanValue;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getMultiChoiceValues(): ?string
    {
        return $this->multiChoiceValues;
    }

    public function setMultiChoiceValues(?string $multiChoiceValues): self
    {
        $this->multiChoiceValues = $multiChoiceValues;
        return $this;
    }

    public function getQuestionId(): ?string
    {
        return $this->questionId;
    }

    public function setQuestionId(?string $questionId): self
    {
        $this->questionId = $questionId;
        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;
        return $this;
    }

}
