<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SamlOrWsFedExternalDomainFederationCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class SamlOrWsFedExternalDomainFederationCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific SamlOrWsFedExternalDomainFederationCollectionResponse properties
     * 
     * @param array<string> $select Use SamlOrWsFedExternalDomainFederationCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
