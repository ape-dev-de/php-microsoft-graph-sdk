<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OpenShiftChangeRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class OpenShiftChangeRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific OpenShiftChangeRequestCollectionResponse properties
     * 
     * @param array<string> $select Use OpenShiftChangeRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
