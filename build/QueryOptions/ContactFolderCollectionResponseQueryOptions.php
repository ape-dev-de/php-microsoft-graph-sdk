<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ContactFolderCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ContactFolderCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ContactFolderCollectionResponse properties
     * 
     * @param array<string> $select Use ContactFolderCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
