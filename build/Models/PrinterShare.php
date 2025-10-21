<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterShare
 */
class PrinterShare
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
        public array $jobs = [],
        /** If true, all users and groups will be granted access to this printer share. This supersedes the allow lists defined by the allowedUsers and allowedGroups navigation properties. */
        public ?bool $allowAllUsers = null,
        /** The DateTimeOffset when the printer share was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Additional data for a printer share as viewed by the signed-in user. */
        public ?PrinterShareViewpoint $viewPoint = null,
        /** The groups whose users have access to print using the printer. */
        public array $allowedGroups = [],
        /** The users who have access to print using the printer. */
        public array $allowedUsers = [],
        /** The printer that this printer share is related to. */
        public ?Printer $printer = null
    ) {}
}
