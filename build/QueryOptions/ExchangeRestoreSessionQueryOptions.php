<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ExchangeRestoreSession resources
 *
 * Available select fields:
 * - granularMailboxRestoreArtifacts
 * - mailboxRestoreArtifacts
 * - mailboxRestoreArtifactsBulkAdditionRequests
 */
class ExchangeRestoreSessionQueryOptions extends QueryOptions
{
    public const FIELD_GRANULAR_MAILBOX_RESTORE_ARTIFACTS = 'granularMailboxRestoreArtifacts';
    public const FIELD_MAILBOX_RESTORE_ARTIFACTS = 'mailboxRestoreArtifacts';
    public const FIELD_MAILBOX_RESTORE_ARTIFACTS_BULK_ADDITION_REQUESTS = 'mailboxRestoreArtifactsBulkAdditionRequests';

    /**
     * Select specific ExchangeRestoreSession properties
     * 
     * @param array<string> $select Use ExchangeRestoreSessionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
