<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DevicesFilter resources
 *
 * Available select fields:
 * - mode
 * - rule
 */
class DevicesFilterQueryOptions extends QueryOptions
{
    public const FIELD_MODE = 'mode';
    public const FIELD_RULE = 'rule';

    /**
     * Select specific DevicesFilter properties
     * 
     * @param array<string> $select Use DevicesFilterQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
