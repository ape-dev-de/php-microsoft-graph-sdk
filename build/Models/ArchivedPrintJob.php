<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ArchivedPrintJob
 */
class ArchivedPrintJob
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The archived print job's GUID. Read-only. */
    public ?string $id = null;

    /** True if the job was acquired by a printer; false otherwise. Read-only. */
    public ?bool $acquiredByPrinter = null;

    /** The dateTimeOffset when the job was acquired by the printer, if any. Read-only. */
    public ?\DateTimeInterface $acquiredDateTime = null;

    /** The dateTimeOffset when the job was completed, canceled, or aborted. Read-only. */
    public ?\DateTimeInterface $completionDateTime = null;

    /** The number of copies that were printed. Read-only. */
    public ?float $copiesPrinted = null;

    /** 
     * The user who created the print job. Read-only.
     * @var UserIdentity|\stdClass|null
     */
    public UserIdentity|\stdClass|null $createdBy = null;

    /** The dateTimeOffset when the job was created. Read-only. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The printer ID that the job was queued for. Read-only. */
    public ?string $printerId = null;

    /** The printer name that the job was queued for. Read-only. */
    public ?string $printerName = null;

    /**  */
    public ?PrintJobProcessingState $processingState = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['acquiredByPrinter'])) {
            $this->acquiredByPrinter = is_bool($data['acquiredByPrinter']) ? $data['acquiredByPrinter'] : (bool)$data['acquiredByPrinter'];
        }
        if (isset($data['acquiredDateTime'])) {
            $this->acquiredDateTime = is_string($data['acquiredDateTime']) ? new \DateTimeImmutable($data['acquiredDateTime']) : $data['acquiredDateTime'];
        }
        if (isset($data['completionDateTime'])) {
            $this->completionDateTime = is_string($data['completionDateTime']) ? new \DateTimeImmutable($data['completionDateTime']) : $data['completionDateTime'];
        }
        if (isset($data['copiesPrinted'])) {
            $this->copiesPrinted = is_numeric($data['copiesPrinted']) ? (float)$data['copiesPrinted'] : $data['copiesPrinted'];
        }
        if (isset($data['createdBy'])) {
            $this->createdBy = is_array($data['createdBy']) ? new UserIdentity($data['createdBy']) : $data['createdBy'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['printerId'])) {
            $this->printerId = $data['printerId'];
        }
        if (isset($data['printerName'])) {
            $this->printerName = $data['printerName'];
        }
        if (isset($data['processingState'])) {
            $this->processingState = is_array($data['processingState']) ? new PrintJobProcessingState($data['processingState']) : $data['processingState'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
