<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RichLongRunningOperation resources
 *
 * Available select fields:
 * - error
 * - percentageComplete
 * - resourceId
 * - type
 */
class RichLongRunningOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RichLongRunningOperation
     */
    public const FIELD_ERROR = 'error';
    public const FIELD_PERCENTAGE_COMPLETE = 'percentageComplete';
    public const FIELD_RESOURCE_ID = 'resourceId';
    public const FIELD_TYPE = 'type';

    /**
     * Select specific RichLongRunningOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
