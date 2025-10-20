<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for InternetMessageHeader resources
 *
 * Available select fields:
 * - name
 * - value
 */
class InternetMessageHeaderQueryOptions extends QueryOptions
{
    public const FIELD_NAME = 'name';
    public const FIELD_VALUE = 'value';

    /**
     * Select specific InternetMessageHeader properties
     * 
     * @param array<string> $select Use InternetMessageHeaderQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
