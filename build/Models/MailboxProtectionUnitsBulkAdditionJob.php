<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MailboxProtectionUnitsBulkAdditionJob
 */
class MailboxProtectionUnitsBulkAdditionJob
{
    public function __construct(
        /** @var string[] The list of Exchange directoryObjectIds to add to the Exchange protection policy. */
        public array $directoryObjectIds = [],
        /** @var string[] The list of Exchange email addresses to add to the Exchange protection policy. */
        public array $mailboxes = []
    ) {}
}
