<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosHomeScreenItem resources
 *
 * Available select fields:
 * - displayName
 */
class IosHomeScreenItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosHomeScreenItem
     */
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific IosHomeScreenItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
