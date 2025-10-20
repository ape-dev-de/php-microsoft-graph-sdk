<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsAppXCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsAppXCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsAppXCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsAppXCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
