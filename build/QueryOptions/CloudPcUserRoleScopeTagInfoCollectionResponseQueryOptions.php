<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CloudPcUserRoleScopeTagInfoCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class CloudPcUserRoleScopeTagInfoCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific CloudPcUserRoleScopeTagInfoCollectionResponse properties
     * 
     * @param array<string> $select Use CloudPcUserRoleScopeTagInfoCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
