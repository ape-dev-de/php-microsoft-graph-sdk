<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityResource resources
 *
 * Available select fields:
 * - resource
 * - resourceType
 */
class SecurityResourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityResource
     */
    public const FIELD_RESOURCE = 'resource';
    public const FIELD_RESOURCE_TYPE = 'resourceType';

    /**
     * Select specific SecurityResource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
