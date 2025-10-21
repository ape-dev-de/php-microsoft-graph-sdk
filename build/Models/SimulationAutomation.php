<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SimulationAutomation
 */
class SimulationAutomation
{
    /**
     * Identity of the user who created the attack simulation automation.
     */
    private ?string $createdBy;

    /**
     * Date and time when the attack simulation automation was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Description of the attack simulation automation.
     */
    private ?string $description;

    /**
     * Display name of the attack simulation automation. Supports $filter and $orderby.
     */
    private ?string $displayName;

    /**
     * Identity of the user who most recently modified the attack simulation automation.
     */
    private ?string $lastModifiedBy;

    /**
     * Date and time when the attack simulation automation was most recently modified.
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * Date and time of the latest run of the attack simulation automation.
     */
    private ?\DateTimeInterface $lastRunDateTime;

    /**
     * Date and time of the upcoming run of the attack simulation automation.
     */
    private ?\DateTimeInterface $nextRunDateTime;

    /**
     * Status of the attack simulation automation. Supports $filter and $orderby. The possible values are: unknown, draft, notRunning, running, completed, unknownFutureValue.
     */
    private ?string $status;

    /**
     * A collection of simulation automation runs.
     * @var string[]
     */
    private array $runs = [];


    public function getCreatedBy(): ?string
    {
        return $this->createdBy;
    }

    public function setCreatedBy(?string $createdBy): self
    {
        $this->createdBy = $createdBy;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
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

    public function getLastRunDateTime(): ?\DateTimeInterface
    {
        return $this->lastRunDateTime;
    }

    public function setLastRunDateTime(?\DateTimeInterface $lastRunDateTime): self
    {
        $this->lastRunDateTime = $lastRunDateTime;
        return $this;
    }

    public function getNextRunDateTime(): ?\DateTimeInterface
    {
        return $this->nextRunDateTime;
    }

    public function setNextRunDateTime(?\DateTimeInterface $nextRunDateTime): self
    {
        $this->nextRunDateTime = $nextRunDateTime;
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

    /**
     * @return string[]
     */
    public function getRuns(): array
    {
        return $this->runs;
    }

    /**
     * @param string[] $runs
     */
    public function setRuns(array $runs): self
    {
        $this->runs = $runs;
        return $this;
    }

}
