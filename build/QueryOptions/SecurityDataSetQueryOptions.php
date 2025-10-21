<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDataSet resources
 *
 * Available select fields:
 * - createdBy
 * - createdDateTime
 * - description
 * - displayName
 */
class SecurityDataSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDataSet
     */
    public const FIELD_CREATED_BY = 'createdBy';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific SecurityDataSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
