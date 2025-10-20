<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsUniversalAppXCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsUniversalAppXCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsUniversalAppXCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsUniversalAppXCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
