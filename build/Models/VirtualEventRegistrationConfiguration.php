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
     */
    private ?string $questions;

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

    public function getQuestions(): ?string
    {
        return $this->questions;
    }

    public function setQuestions(?string $questions): self
    {
        $this->questions = $questions;
        return $this;
    }

}
