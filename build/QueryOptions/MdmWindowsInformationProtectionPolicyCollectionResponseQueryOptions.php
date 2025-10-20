<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MdmWindowsInformationProtectionPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class MdmWindowsInformationProtectionPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific MdmWindowsInformationProtectionPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use MdmWindowsInformationProtectionPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
