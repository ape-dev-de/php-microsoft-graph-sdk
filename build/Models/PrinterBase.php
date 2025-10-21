<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterBase
 */
class PrinterBase
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The capabilities of the printer/printerShare. */
        public ?PrinterCapabilities $capabilities = null,
        /** The default print settings of printer/printerShare. */
        public ?PrinterDefaults $defaults = null,
        /** The name of the printer/printerShare. */
        public ?string $displayName = null,
        /** Specifies whether the printer/printerShare is currently accepting new print jobs. */
        public ?bool $isAcceptingJobs = null,
        /** The physical and/or organizational location of the printer/printerShare. */
        public ?PrinterLocation $location = null,
        /** The manufacturer of the printer/printerShare. */
        public ?string $manufacturer = null,
        /** The model name of the printer/printerShare. */
        public ?string $model = null,
        /**  */
        public ?PrinterStatus $status = null,
        /** The list of jobs that are queued for printing by the printer/printerShare. */
        public array $jobs = []
    ) {}
}
