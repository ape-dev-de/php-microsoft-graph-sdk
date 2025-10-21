<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ServiceStatus
 */
class ServiceStatus
{
    /**
     * The type of consumer. The possible values are: unknown, firstparty, thirdparty, unknownFutureValue.
     */
    private ?string $backupServiceConsumer;

    /**
     * The reason the service is disabled. The possible values are: none, controllerServiceAppDeleted, invalidBillingProfile, userRequested, unknownFutureValue.
     */
    private ?string $disableReason;

    /**
     * The expiration time of the grace period.
     */
    private ?\DateTimeInterface $gracePeriodDateTime;

    /**
     * Identity of the person who last modified the entity.
     */
    private ?string $lastModifiedBy;

    /**
     * Timestamp of the last modification of the entity.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * The expiration time of the restoration allowed period.
     */
    private ?\DateTimeInterface $restoreAllowedTillDateTime;

    /**
     * Status of the service. This value indicates what capabilities can be used. The possible values are: disabled, enabled, protectionChangeLocked, restoreLocked, unknownFutureValue.
     */
    private ?string $status;


    public function getBackupServiceConsumer(): ?string
    {
        return $this->backupServiceConsumer;
    }

    public function setBackupServiceConsumer(?string $backupServiceConsumer): self
    {
        $this->backupServiceConsumer = $backupServiceConsumer;
        return $this;
    }

    public function getDisableReason(): ?string
    {
        return $this->disableReason;
    }

    public function setDisableReason(?string $disableReason): self
    {
        $this->disableReason = $disableReason;
        return $this;
    }

    public function getGracePeriodDateTime(): ?\DateTimeInterface
    {
        return $this->gracePeriodDateTime;
    }

    public function setGracePeriodDateTime(?\DateTimeInterface $gracePeriodDateTime): self
    {
        $this->gracePeriodDateTime = $gracePeriodDateTime;
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

    public function getRestoreAllowedTillDateTime(): ?\DateTimeInterface
    {
        return $this->restoreAllowedTillDateTime;
    }

    public function setRestoreAllowedTillDateTime(?\DateTimeInterface $restoreAllowedTillDateTime): self
    {
        $this->restoreAllowedTillDateTime = $restoreAllowedTillDateTime;
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
