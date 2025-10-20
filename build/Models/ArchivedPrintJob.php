<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ArchivedPrintJob
 */
class ArchivedPrintJob
{
    /**
     * True if the job was acquired by a printer; false otherwise. Read-only.
     */
    private ?bool $acquiredByPrinter;

    /**
     * The dateTimeOffset when the job was acquired by the printer, if any. Read-only.
     */
    private ?\DateTimeInterface $acquiredDateTime;

    /**
     * The dateTimeOffset when the job was completed, canceled, or aborted. Read-only.
     */
    private ?\DateTimeInterface $completionDateTime;

    /**
     * The number of copies that were printed. Read-only.
     */
    private ?float $copiesPrinted;

    /**
     * The user who created the print job. Read-only.
     */
    private ?string $createdBy;

    /**
     * The dateTimeOffset when the job was created. Read-only.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The archived print job's GUID. Read-only.
     */
    private ?string $id;

    /**
     * The printer ID that the job was queued for. Read-only.
     */
    private ?string $printerId;

    /**
     * The printer name that the job was queued for. Read-only.
     */
    private ?string $printerName;

    /**
     */
    private ?string $processingState;

    public function getAcquiredByPrinter(): ?bool
    {
        return $this->acquiredByPrinter;
    }

    public function setAcquiredByPrinter(?bool $acquiredByPrinter): self
    {
        $this->acquiredByPrinter = $acquiredByPrinter;
        return $this;
    }

    public function getAcquiredDateTime(): ?\DateTimeInterface
    {
        return $this->acquiredDateTime;
    }

    public function setAcquiredDateTime(?\DateTimeInterface $acquiredDateTime): self
    {
        $this->acquiredDateTime = $acquiredDateTime;
        return $this;
    }

    public function getCompletionDateTime(): ?\DateTimeInterface
    {
        return $this->completionDateTime;
    }

    public function setCompletionDateTime(?\DateTimeInterface $completionDateTime): self
    {
        $this->completionDateTime = $completionDateTime;
        return $this;
    }

    public function getCopiesPrinted(): ?float
    {
        return $this->copiesPrinted;
    }

    public function setCopiesPrinted(?float $copiesPrinted): self
    {
        $this->copiesPrinted = $copiesPrinted;
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

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getPrinterId(): ?string
    {
        return $this->printerId;
    }

    public function setPrinterId(?string $printerId): self
    {
        $this->printerId = $printerId;
        return $this;
    }

    public function getPrinterName(): ?string
    {
        return $this->printerName;
    }

    public function setPrinterName(?string $printerName): self
    {
        $this->printerName = $printerName;
        return $this;
    }

    public function getProcessingState(): ?string
    {
        return $this->processingState;
    }

    public function setProcessingState(?string $processingState): self
    {
        $this->processingState = $processingState;
        return $this;
    }

}
