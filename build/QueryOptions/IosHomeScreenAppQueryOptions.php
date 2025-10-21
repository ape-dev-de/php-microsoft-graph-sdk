<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosHomeScreenApp resources
 *
 * Available select fields:
 * - bundleID
 */
class IosHomeScreenAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosHomeScreenApp
     */
    public const FIELD_BUNDLE_ID = 'bundleID';

    /**
     * Select specific IosHomeScreenApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
