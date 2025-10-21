<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Printer
 */
class Printer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The capabilities of the printer/printerShare. */
        public ?string $capabilities = null,
        /** The default print settings of printer/printerShare. */
        public ?string $defaults = null,
        /** The name of the printer/printerShare. */
        public ?string $displayName = null,
        /** Specifies whether the printer/printerShare is currently accepting new print jobs. */
        public ?bool $isAcceptingJobs = null,
        /** The physical and/or organizational location of the printer/printerShare. */
        public ?string $location = null,
        /** The manufacturer of the printer/printerShare. */
        public ?string $manufacturer = null,
        /** The model name of the printer/printerShare. */
        public ?string $model = null,
        /**  */
        public ?string $status = null,
        /** The list of jobs that are queued for printing by the printer/printerShare. */
        public array $jobs = [],
        /** True if the printer has a physical device for printing. Read-only. */
        public ?bool $hasPhysicalDevice = null,
        /** True if the printer is shared; false otherwise. Read-only. */
        public ?bool $isShared = null,
        /** The most recent dateTimeOffset when a printer interacted with Universal Print. Read-only. */
        public ?\DateTimeInterface $lastSeenDateTime = null,
        /** The DateTimeOffset when the printer was registered. Read-only. */
        public ?\DateTimeInterface $registeredDateTime = null,
        /** The connectors that are associated with the printer. */
        public array $connectors = [],
        /** The list of printerShares that are associated with the printer. Currently, only one printerShare can be associated with the printer. Read-only. Nullable. */
        public array $shares = [],
        /** A list of task triggers that are associated with the printer. */
        public array $taskTriggers = []
    ) {}
}
