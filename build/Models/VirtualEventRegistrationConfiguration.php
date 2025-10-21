<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VirtualEventRegistrationConfiguration
 */
class VirtualEventRegistrationConfiguration
{
    /**
     * Total capacity of the virtual event.
     */
    private ?float $capacity;

    /**
     * Registration URL of the virtual event.
     */
    private ?string $registrationWebUrl;

    /**
     * Registration questions.
     * @var string[]
     */
    private array $questions = [];


    public function getCapacity(): ?float
    {
        return $this->capacity;
    }

    public function setCapacity(?float $capacity): self
    {
        $this->capacity = $capacity;
        return $this;
    }

    public function getRegistrationWebUrl(): ?string
    {
        return $this->registrationWebUrl;
    }

    public function setRegistrationWebUrl(?string $registrationWebUrl): self
    {
        $this->registrationWebUrl = $registrationWebUrl;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    /**
     * @param string[] $questions
     */
    public function setQuestions(array $questions): self
    {
        $this->questions = $questions;
        return $this;
    }

}
