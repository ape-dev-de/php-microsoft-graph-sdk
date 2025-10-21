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
    /**
     * Available select fields for SharePointRestoreSession
     */
    public const FIELD_SITE_RESTORE_ARTIFACTS = 'siteRestoreArtifacts';
    public const FIELD_SITE_RESTORE_ARTIFACTS_BULK_ADDITION_REQUESTS = 'siteRestoreArtifactsBulkAdditionRequests';

    /**
     * Select specific SharePointRestoreSession properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
