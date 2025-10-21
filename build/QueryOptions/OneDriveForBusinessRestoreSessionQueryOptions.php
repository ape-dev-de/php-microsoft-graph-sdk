<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OneDriveForBusinessRestoreSession resources
 *
 * Available select fields:
 * - driveRestoreArtifacts
 * - driveRestoreArtifactsBulkAdditionRequests
 */
class OneDriveForBusinessRestoreSessionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OneDriveForBusinessRestoreSession
     */
    public const FIELD_DRIVE_RESTORE_ARTIFACTS = 'driveRestoreArtifacts';
    public const FIELD_DRIVE_RESTORE_ARTIFACTS_BULK_ADDITION_REQUESTS = 'driveRestoreArtifactsBulkAdditionRequests';

    /**
     * Select specific OneDriveForBusinessRestoreSession properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
