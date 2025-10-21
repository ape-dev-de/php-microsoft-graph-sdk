<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Partners resources
 *
 * Available select fields:
 * - billing
 */
class PartnersQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Partners
     */
    public const FIELD_BILLING = 'billing';

    /**
     * Select specific Partners properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
