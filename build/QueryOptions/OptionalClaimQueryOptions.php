<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OptionalClaim resources
 *
 * Available select fields:
 * - additionalProperties
 * - essential
 * - name
 * - source
 */
class OptionalClaimQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OptionalClaim
     */
    public const FIELD_ADDITIONAL_PROPERTIES = 'additionalProperties';
    public const FIELD_ESSENTIAL = 'essential';
    public const FIELD_NAME = 'name';
    public const FIELD_SOURCE = 'source';

    /**
     * Select specific OptionalClaim properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
