<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ItemRetentionLabel resources
 *
 * Available select fields:
 * - isLabelAppliedExplicitly
 * - labelAppliedBy
 * - labelAppliedDateTime
 * - name
 * - retentionSettings
 */
class ItemRetentionLabelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ItemRetentionLabel
     */
    public const FIELD_IS_LABEL_APPLIED_EXPLICITLY = 'isLabelAppliedExplicitly';
    public const FIELD_LABEL_APPLIED_BY = 'labelAppliedBy';
    public const FIELD_LABEL_APPLIED_DATE_TIME = 'labelAppliedDateTime';
    public const FIELD_NAME = 'name';
    public const FIELD_RETENTION_SETTINGS = 'retentionSettings';

    /**
     * Select specific ItemRetentionLabel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
