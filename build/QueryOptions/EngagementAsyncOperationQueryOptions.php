<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EngagementAsyncOperation resources
 *
 * Available select fields:
 * - operationType
 * - resourceId
 */
class EngagementAsyncOperationQueryOptions extends QueryOptions
{
    public const FIELD_OPERATION_TYPE = 'operationType';
    public const FIELD_RESOURCE_ID = 'resourceId';

    /**
     * Select specific EngagementAsyncOperation properties
     * 
     * @param array<string> $select Use EngagementAsyncOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
