<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResourceAction resources
 *
 * Available select fields:
 * - allowedResourceActions
 * - notAllowedResourceActions
 */
class ResourceActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ResourceAction
     */
    public const FIELD_ALLOWED_RESOURCE_ACTIONS = 'allowedResourceActions';
    public const FIELD_NOT_ALLOWED_RESOURCE_ACTIONS = 'notAllowedResourceActions';

    /**
     * Select specific ResourceAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
