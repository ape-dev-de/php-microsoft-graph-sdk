<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ArchivedPrintJob
 */
class ArchivedPrintJob
{
    public function __construct(
        /** The archived print job's GUID. Read-only. */
        public ?string $id = null,
        /** True if the job was acquired by a printer; false otherwise. Read-only. */
        public ?bool $acquiredByPrinter = null,
        /** The dateTimeOffset when the job was acquired by the printer, if any. Read-only. */
        public ?\DateTimeInterface $acquiredDateTime = null,
        /** The dateTimeOffset when the job was completed, canceled, or aborted. Read-only. */
        public ?\DateTimeInterface $completionDateTime = null,
        /** The number of copies that were printed. Read-only. */
        public ?float $copiesPrinted = null,
        /** The user who created the print job. Read-only. */
        public ?string $createdBy = null,
        /** The dateTimeOffset when the job was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The printer ID that the job was queued for. Read-only. */
        public ?string $printerId = null,
        /** The printer name that the job was queued for. Read-only. */
        public ?string $printerName = null,
        /**  */
        public ?string $processingState = null
    ) {}
}
