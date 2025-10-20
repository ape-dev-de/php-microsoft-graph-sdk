<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingQuestionAssignment
 */
class BookingQuestionAssignment
{
    /**
     * Indicates whether it's mandatory to answer the custom question.
     */
    private ?bool $isRequired;

    /**
     * The ID of the custom question.
     */
    private ?string $questionId;

    public function getIsRequired(): ?bool
    {
        return $this->isRequired;
    }

    public function setIsRequired(?bool $isRequired): self
    {
        $this->isRequired = $isRequired;
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

}
