<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCustomQuestion
 */
class BookingCustomQuestion
{
    /**
     * The expected answer type. The possible values are: text, radioButton, unknownFutureValue.
     */
    private ?string $answerInputType;

    /**
     * List of possible answer values.
     * @var string[]
     */
    private array $answerOptions = [];

    /**
     * The date, time, and time zone when the custom question was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The question.
     */
    private ?string $displayName;

    /**
     * Represents a custom question of the business.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;


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

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
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

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
        return $this;
    }

}
