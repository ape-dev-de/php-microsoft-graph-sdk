<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionAppLockerFileCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsInformationProtectionAppLockerFileCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsInformationProtectionAppLockerFileCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionAppLockerFileCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
