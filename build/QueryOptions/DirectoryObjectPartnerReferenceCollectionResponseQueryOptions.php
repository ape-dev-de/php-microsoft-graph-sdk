<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryObjectPartnerReferenceCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class DirectoryObjectPartnerReferenceCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific DirectoryObjectPartnerReferenceCollectionResponse properties
     * 
     * @param array<string> $select Use DirectoryObjectPartnerReferenceCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
