<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintJob
 */
class PrintJob
{
    /**
     * The dateTimeOffset when the job was acknowledged. Read-only.
     */
    private ?\DateTimeInterface $acknowledgedDateTime;

    /**
     */
    private ?string $configuration;

    /**
     */
    private ?string $createdBy;

    /**
     * The DateTimeOffset when the job was created. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The error code of the print job. Read-only.
     */
    private ?float $errorCode;

    /**
     * If true, document can be fetched by printer.
     */
    private ?bool $isFetchable;

    /**
     * Contains the source job URL, if the job has been redirected from another printer.
     */
    private ?string $redirectedFrom;

    /**
     * Contains the destination job URL, if the job has been redirected to another printer.
     */
    private ?string $redirectedTo;

    /**
     */
    private ?string $status;

    /**
     */
    private array $documents = [];

    /**
     * A list of printTasks that were triggered by this print job.
     */
    private ?string $tasks;

    public function getAcknowledgedDateTime(): ?\DateTimeInterface
    {
        return $this->acknowledgedDateTime;
    }

    public function setAcknowledgedDateTime(?\DateTimeInterface $acknowledgedDateTime): self
    {
        $this->acknowledgedDateTime = $acknowledgedDateTime;
        return $this;
    }

    public function getConfiguration(): ?string
    {
        return $this->configuration;
    }

    public function setConfiguration(?string $configuration): self
    {
        $this->configuration = $configuration;
        return $this;
    }

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

    public function getErrorCode(): ?float
    {
        return $this->errorCode;
    }

    public function setErrorCode(?float $errorCode): self
    {
        $this->errorCode = $errorCode;
        return $this;
    }

    public function getIsFetchable(): ?bool
    {
        return $this->isFetchable;
    }

    public function setIsFetchable(?bool $isFetchable): self
    {
        $this->isFetchable = $isFetchable;
        return $this;
    }

    public function getRedirectedFrom(): ?string
    {
        return $this->redirectedFrom;
    }

    public function setRedirectedFrom(?string $redirectedFrom): self
    {
        $this->redirectedFrom = $redirectedFrom;
        return $this;
    }

    public function getRedirectedTo(): ?string
    {
        return $this->redirectedTo;
    }

    public function setRedirectedTo(?string $redirectedTo): self
    {
        $this->redirectedTo = $redirectedTo;
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

    public function getDocuments(): array
    {
        return $this->documents;
    }

    public function setDocuments(array $documents): self
    {
        $this->documents = $documents;
        return $this;
    }

    public function getTasks(): ?string
    {
        return $this->tasks;
    }

    public function setTasks(?string $tasks): self
    {
        $this->tasks = $tasks;
        return $this;
    }

}
