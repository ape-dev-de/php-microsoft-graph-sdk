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
    public const FIELD_BILLING = 'billing';

    /**
     * Select specific Partners properties
     * 
     * @param array<string> $select Use PartnersQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
