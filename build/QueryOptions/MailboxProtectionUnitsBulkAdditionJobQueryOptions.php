<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailboxProtectionUnitsBulkAdditionJob resources
 *
 * Available select fields:
 * - directoryObjectIds
 * - mailboxes
 */
class MailboxProtectionUnitsBulkAdditionJobQueryOptions extends QueryOptions
{
    public const FIELD_DIRECTORY_OBJECT_IDS = 'directoryObjectIds';
    public const FIELD_MAILBOXES = 'mailboxes';

    /**
     * Select specific MailboxProtectionUnitsBulkAdditionJob properties
     * 
     * @param array<string> $select Use MailboxProtectionUnitsBulkAdditionJobQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
