<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ProfileCardAnnotationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ProfileCardAnnotationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ProfileCardAnnotationCollectionResponse properties
     * 
     * @param array<string> $select Use ProfileCardAnnotationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
