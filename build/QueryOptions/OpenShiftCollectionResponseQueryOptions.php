<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OpenShiftCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OpenShiftCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OpenShiftCollectionResponse properties
     * 
     * @param array<string> $select Use OpenShiftCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
