<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TemporaryAccessPassAuthenticationMethod
 */
class TemporaryAccessPassAuthenticationMethod
{
    /**
     * The date and time when the Temporary Access Pass was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The state of the authentication method that indicates whether it's currently usable by the user.
     */
    private ?bool $isUsable;

    /**
     * Determines whether the pass is limited to a one-time use. If true, the pass can be used once; if false, the pass can be used multiple times within the Temporary Access Pass lifetime.
     */
    private ?bool $isUsableOnce;

    /**
     * The lifetime of the Temporary Access Pass in minutes starting at startDateTime. Must be between 10 and 43200 inclusive (equivalent to 30 days).
     */
    private ?float $lifetimeInMinutes;

    /**
     * Details about the usability state (isUsable). Reasons can include: EnabledByPolicy, DisabledByPolicy, Expired, NotYetValid, OneTimeUsed.
     */
    private ?string $methodUsabilityReason;

    /**
     * The date and time when the Temporary Access Pass becomes available to use and when isUsable is true is enforced.
     */
    private ?\DateTimeInterface $startDateTime;

    /**
     * The Temporary Access Pass used to authenticate. Returned only on creation of a new temporaryAccessPassAuthenticationMethod object; Hidden in subsequent read operations and returned as null with GET.
     */
    private ?string $temporaryAccessPass;


    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getIsUsable(): ?bool
    {
        return $this->isUsable;
    }

    public function setIsUsable(?bool $isUsable): self
    {
        $this->isUsable = $isUsable;
        return $this;
    }

    public function getIsUsableOnce(): ?bool
    {
        return $this->isUsableOnce;
    }

    public function setIsUsableOnce(?bool $isUsableOnce): self
    {
        $this->isUsableOnce = $isUsableOnce;
        return $this;
    }

    public function getLifetimeInMinutes(): ?float
    {
        return $this->lifetimeInMinutes;
    }

    public function setLifetimeInMinutes(?float $lifetimeInMinutes): self
    {
        $this->lifetimeInMinutes = $lifetimeInMinutes;
        return $this;
    }

    public function getMethodUsabilityReason(): ?string
    {
        return $this->methodUsabilityReason;
    }

    public function setMethodUsabilityReason(?string $methodUsabilityReason): self
    {
        $this->methodUsabilityReason = $methodUsabilityReason;
        return $this;
    }

    public function getStartDateTime(): ?\DateTimeInterface
    {
        return $this->startDateTime;
    }

    public function setStartDateTime(?\DateTimeInterface $startDateTime): self
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    public function getTemporaryAccessPass(): ?string
    {
        return $this->temporaryAccessPass;
    }

    public function setTemporaryAccessPass(?string $temporaryAccessPass): self
    {
        $this->temporaryAccessPass = $temporaryAccessPass;
        return $this;
    }

}
