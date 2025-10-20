<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RetentionLabelSettings resources
 *
 * Available select fields:
 * - behaviorDuringRetentionPeriod
 * - isContentUpdateAllowed
 * - isDeleteAllowed
 * - isLabelUpdateAllowed
 * - isMetadataUpdateAllowed
 * - isRecordLocked
 */
class RetentionLabelSettingsQueryOptions extends QueryOptions
{
    public const FIELD_BEHAVIOR_DURING_RETENTION_PERIOD = 'behaviorDuringRetentionPeriod';
    public const FIELD_IS_CONTENT_UPDATE_ALLOWED = 'isContentUpdateAllowed';
    public const FIELD_IS_DELETE_ALLOWED = 'isDeleteAllowed';
    public const FIELD_IS_LABEL_UPDATE_ALLOWED = 'isLabelUpdateAllowed';
    public const FIELD_IS_METADATA_UPDATE_ALLOWED = 'isMetadataUpdateAllowed';
    public const FIELD_IS_RECORD_LOCKED = 'isRecordLocked';

    /**
     * Select specific RetentionLabelSettings properties
     * 
     * @param array<string> $select Use RetentionLabelSettingsQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
