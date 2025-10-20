<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceApp
 */
class ServiceApp
{
    /**
     * The Entra ID application ID.
     */
    private ?string $application;

    /**
     * Timestamp of the effective activation of the service app.
     */
    private ?\DateTimeInterface $effectiveDateTime;

    /**
     * Identity of the person who last modified the entity.
     */
    private ?string $lastModifiedBy;

    /**
     * Timestamp of the last modification of the entity.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Timestamp of the creation of the service app entity.
     */
    private ?\DateTimeInterface $registrationDateTime;

    /**
     * The status of the service app. This value indicates whether or not the application can be used to control the backup service. The possible values are: inactive, active, pendingActive, pendingInactive, unknownFutureValue.
     */
    private ?string $status;

    public function getApplication(): ?string
    {
        return $this->application;
    }

    public function setApplication(?string $application): self
    {
        $this->application = $application;
        return $this;
    }

    public function getEffectiveDateTime(): ?\DateTimeInterface
    {
        return $this->effectiveDateTime;
    }

    public function setEffectiveDateTime(?\DateTimeInterface $effectiveDateTime): self
    {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    public function getLastModifiedBy(): ?string
    {
        return $this->lastModifiedBy;
    }

    public function setLastModifiedBy(?string $lastModifiedBy): self
    {
        $this->lastModifiedBy = $lastModifiedBy;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
        return $this;
    }

    public function getRegistrationDateTime(): ?\DateTimeInterface
    {
        return $this->registrationDateTime;
    }

    public function setRegistrationDateTime(?\DateTimeInterface $registrationDateTime): self
    {
        $this->registrationDateTime = $registrationDateTime;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

}
