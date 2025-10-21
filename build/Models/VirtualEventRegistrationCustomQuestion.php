<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationCustomQuestion
 */
class VirtualEventRegistrationCustomQuestion
{
    /**
     * Answer choices when answerInputType is singleChoice or multiChoice.
     * @var string[]
     */
    private array $answerChoices = [];

    /**
     * Input type of the registration question answer. Possible values are text, multilineText, singleChoice, multiChoice, boolean, and unknownFutureValue.
     */
    private ?string $answerInputType;


    /**
     * @return string[]
     */
    public function getAnswerChoices(): array
    {
        return $this->answerChoices;
    }

    /**
     * @param string[] $answerChoices
     */
    public function setAnswerChoices(array $answerChoices): self
    {
        $this->answerChoices = $answerChoices;
        return $this;
    }

    public function getAnswerInputType(): ?string
    {
        return $this->answerInputType;
    }

    public function setAnswerInputType(?string $answerInputType): self
    {
        $this->answerInputType = $answerInputType;
        return $this;
    }

}
