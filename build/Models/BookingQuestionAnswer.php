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
     * @var string[]
     */
    private array $answerOptions = [];

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
     * @var string[]
     */
    private array $selectedOptions = [];


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

    /**
     * @return string[]
     */
    public function getAnswerOptions(): array
    {
        return $this->answerOptions;
    }

    /**
     * @param string[] $answerOptions
     */
    public function setAnswerOptions(array $answerOptions): self
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

    /**
     * @return string[]
     */
    public function getSelectedOptions(): array
    {
        return $this->selectedOptions;
    }

    /**
     * @param string[] $selectedOptions
     */
    public function setSelectedOptions(array $selectedOptions): self
    {
        $this->selectedOptions = $selectedOptions;
        return $this;
    }

}
