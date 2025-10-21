<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Printer
 */
class Printer
{
    public function __construct(
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
        /** @var string[] A list of task triggers that are associated with the printer. */
        public array $taskTriggers = []
    ) {}
}
