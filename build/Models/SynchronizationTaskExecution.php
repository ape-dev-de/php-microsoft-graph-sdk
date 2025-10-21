<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SynchronizationTaskExecution
 */
class SynchronizationTaskExecution
{
    /**
     * Identifier of the job run.
     */
    private ?string $activityIdentifier;

    /**
     * Count of processed entries that were assigned for this application.
     */
    private ?float $countEntitled;

    /**
     * Count of processed entries that were assigned for provisioning.
     */
    private ?float $countEntitledForProvisioning;

    /**
     * Count of entries that were escrowed (errors).
     */
    private ?float $countEscrowed;

    /**
     * Count of entries that were escrowed, including system-generated escrows.
     */
    private ?float $countEscrowedRaw;

    /**
     * Count of exported entries.
     */
    private ?float $countExported;

    /**
     * Count of entries that were expected to be exported.
     */
    private ?float $countExports;

    /**
     * Count of imported entries.
     */
    private ?float $countImported;

    /**
     * Count of imported delta-changes.
     */
    private ?float $countImportedDeltas;

    /**
     * Count of imported delta-changes pertaining to reference changes.
     */
    private ?float $countImportedReferenceDeltas;

    /**
     * If an error was encountered, contains a synchronizationError object with details.
     */
    private ?string $error;

    /**
     */
    private ?string $state;

    /**
     * Time when this job run began. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $timeBegan;

    /**
     * Time when this job run ended. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $timeEnded;


    public function getActivityIdentifier(): ?string
    {
        return $this->activityIdentifier;
    }

    public function setActivityIdentifier(?string $activityIdentifier): self
    {
        $this->activityIdentifier = $activityIdentifier;
        return $this;
    }

    public function getCountEntitled(): ?float
    {
        return $this->countEntitled;
    }

    public function setCountEntitled(?float $countEntitled): self
    {
        $this->countEntitled = $countEntitled;
        return $this;
    }

    public function getCountEntitledForProvisioning(): ?float
    {
        return $this->countEntitledForProvisioning;
    }

    public function setCountEntitledForProvisioning(?float $countEntitledForProvisioning): self
    {
        $this->countEntitledForProvisioning = $countEntitledForProvisioning;
        return $this;
    }

    public function getCountEscrowed(): ?float
    {
        return $this->countEscrowed;
    }

    public function setCountEscrowed(?float $countEscrowed): self
    {
        $this->countEscrowed = $countEscrowed;
        return $this;
    }

    public function getCountEscrowedRaw(): ?float
    {
        return $this->countEscrowedRaw;
    }

    public function setCountEscrowedRaw(?float $countEscrowedRaw): self
    {
        $this->countEscrowedRaw = $countEscrowedRaw;
        return $this;
    }

    public function getCountExported(): ?float
    {
        return $this->countExported;
    }

    public function setCountExported(?float $countExported): self
    {
        $this->countExported = $countExported;
        return $this;
    }

    public function getCountExports(): ?float
    {
        return $this->countExports;
    }

    public function setCountExports(?float $countExports): self
    {
        $this->countExports = $countExports;
        return $this;
    }

    public function getCountImported(): ?float
    {
        return $this->countImported;
    }

    public function setCountImported(?float $countImported): self
    {
        $this->countImported = $countImported;
        return $this;
    }

    public function getCountImportedDeltas(): ?float
    {
        return $this->countImportedDeltas;
    }

    public function setCountImportedDeltas(?float $countImportedDeltas): self
    {
        $this->countImportedDeltas = $countImportedDeltas;
        return $this;
    }

    public function getCountImportedReferenceDeltas(): ?float
    {
        return $this->countImportedReferenceDeltas;
    }

    public function setCountImportedReferenceDeltas(?float $countImportedReferenceDeltas): self
    {
        $this->countImportedReferenceDeltas = $countImportedReferenceDeltas;
        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getTimeBegan(): ?\DateTimeInterface
    {
        return $this->timeBegan;
    }

    public function setTimeBegan(?\DateTimeInterface $timeBegan): self
    {
        $this->timeBegan = $timeBegan;
        return $this;
    }

    public function getTimeEnded(): ?\DateTimeInterface
    {
        return $this->timeEnded;
    }

    public function setTimeEnded(?\DateTimeInterface $timeEnded): self
    {
        $this->timeEnded = $timeEnded;
        return $this;
    }

}
