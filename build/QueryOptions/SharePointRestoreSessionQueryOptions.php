<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharePointRestoreSession resources
 *
 * Available select fields:
 * - siteRestoreArtifacts
 * - siteRestoreArtifactsBulkAdditionRequests
 */
class SharePointRestoreSessionQueryOptions extends QueryOptions
{
    public const FIELD_SITE_RESTORE_ARTIFACTS = 'siteRestoreArtifacts';
    public const FIELD_SITE_RESTORE_ARTIFACTS_BULK_ADDITION_REQUESTS = 'siteRestoreArtifactsBulkAdditionRequests';

    /**
     * Select specific SharePointRestoreSession properties
     * 
     * @param array<string> $select Use SharePointRestoreSessionQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
