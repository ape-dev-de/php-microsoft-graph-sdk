<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PayloadCoachmark
 */
class PayloadCoachmark
{
    /**
     * The coachmark location.
     */
    private ?string $coachmarkLocation;

    /**
     * The description about the coachmark.
     */
    private ?string $description;

    /**
     * The coachmark indicator.
     */
    private ?string $indicator;

    /**
     * Indicates whether the coachmark is valid or not.
     */
    private ?bool $isValid;

    /**
     * The coachmark language.
     */
    private ?string $language;

    /**
     * The coachmark order.
     */
    private ?string $order;

    public function getCoachmarkLocation(): ?string
    {
        return $this->coachmarkLocation;
    }

    public function setCoachmarkLocation(?string $coachmarkLocation): self
    {
        $this->coachmarkLocation = $coachmarkLocation;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getIndicator(): ?string
    {
        return $this->indicator;
    }

    public function setIndicator(?string $indicator): self
    {
        $this->indicator = $indicator;
        return $this;
    }

    public function getIsValid(): ?bool
    {
        return $this->isValid;
    }

    public function setIsValid(?bool $isValid): self
    {
        $this->isValid = $isValid;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): self
    {
        $this->language = $language;
        return $this;
    }

    public function getOrder(): ?string
    {
        return $this->order;
    }

    public function setOrder(?string $order): self
    {
        $this->order = $order;
        return $this;
    }

}
