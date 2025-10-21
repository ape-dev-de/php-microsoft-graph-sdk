<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteOperation resources
 *
 * Available select fields:
 * - error
 * - percentComplete
 * - resourceId
 * - resourceLocation
 */
class OnenoteOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteOperation
     */
    public const FIELD_ERROR = 'error';
    public const FIELD_PERCENT_COMPLETE = 'percentComplete';
    public const FIELD_RESOURCE_ID = 'resourceId';
    public const FIELD_RESOURCE_LOCATION = 'resourceLocation';

    /**
     * Select specific OnenoteOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
