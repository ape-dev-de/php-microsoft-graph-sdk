<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VirtualEventExternalInformationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class VirtualEventExternalInformationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific VirtualEventExternalInformationCollectionResponse properties
     * 
     * @param array<string> $select Use VirtualEventExternalInformationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
