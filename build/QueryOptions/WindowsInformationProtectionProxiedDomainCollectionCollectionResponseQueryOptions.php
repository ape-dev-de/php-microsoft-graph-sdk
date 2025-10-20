<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionProxiedDomainCollectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsInformationProtectionProxiedDomainCollectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsInformationProtectionProxiedDomainCollectionCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionProxiedDomainCollectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
