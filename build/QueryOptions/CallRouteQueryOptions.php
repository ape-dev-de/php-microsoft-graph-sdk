<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CallRoute resources
 *
 * Available select fields:
 * - final
 * - original
 * - routingType
 */
class CallRouteQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CallRoute
     */
    public const FIELD_FINAL = 'final';
    public const FIELD_ORIGINAL = 'original';
    public const FIELD_ROUTING_TYPE = 'routingType';

    /**
     * Select specific CallRoute properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
