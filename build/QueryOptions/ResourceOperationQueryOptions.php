<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceOperation resources
 *
 * Available select fields:
 * - actionName
 * - description
 * - resourceName
 */
class ResourceOperationQueryOptions extends QueryOptions
{
    public const FIELD_ACTION_NAME = 'actionName';
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_RESOURCE_NAME = 'resourceName';

    /**
     * Select specific ResourceOperation properties
     * 
     * @param array<string> $select Use ResourceOperationQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
