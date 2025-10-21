<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterShare
 */
class PrinterShare
{
    public function __construct(
        /** If true, all users and groups will be granted access to this printer share. This supersedes the allow lists defined by the allowedUsers and allowedGroups navigation properties. */
        public ?bool $allowAllUsers = null,
        /** The DateTimeOffset when the printer share was created. Read-only. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Additional data for a printer share as viewed by the signed-in user. */
        public ?string $viewPoint = null,
        /** The groups whose users have access to print using the printer. */
        public array $allowedGroups = [],
        /** The users who have access to print using the printer. */
        public array $allowedUsers = [],
        /** The printer that this printer share is related to. */
        public ?string $printer = null
    ) {}
}
