<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WorkbookOperation resources
 *
 * Available select fields:
 * - error
 * - resourceLocation
 * - status
 */
class WorkbookOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WorkbookOperation
     */
    public const FIELD_ERROR = 'error';
    public const FIELD_RESOURCE_LOCATION = 'resourceLocation';
    public const FIELD_STATUS = 'status';

    /**
     * Select specific WorkbookOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
