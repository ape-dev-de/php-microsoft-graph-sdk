<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingQuestionAnswer
 */
class BookingQuestionAnswer
{
    /**
     * The answer given by the user in case the answerInputType is text.
     */
    private ?string $answer;

    /**
     * The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
     */
    private ?string $answerInputType;

    /**
     * In case the answerInputType is radioButton, this will consists of a list of possible answer values.
     */
    private ?string $answerOptions;

    /**
     * Indicates whether it is mandatory to answer the custom question.
     */
    private ?bool $isRequired;

    /**
     * The question.
     */
    private ?string $question;

    /**
     * The ID of the custom question.
     */
    private ?string $questionId;

    /**
     * The answers selected by the user.
     */
    private ?string $selectedOptions;

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): self
    {
        $this->answer = $answer;
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

    public function getAnswerOptions(): ?string
    {
        return $this->answerOptions;
    }

    public function setAnswerOptions(?string $answerOptions): self
    {
        $this->answerOptions = $answerOptions;
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

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;
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

    public function getSelectedOptions(): ?string
    {
        return $this->selectedOptions;
    }

    public function setSelectedOptions(?string $selectedOptions): self
    {
        $this->selectedOptions = $selectedOptions;
        return $this;
    }

}
