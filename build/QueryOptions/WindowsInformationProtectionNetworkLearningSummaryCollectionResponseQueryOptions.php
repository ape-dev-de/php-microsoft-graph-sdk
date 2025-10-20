<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionNetworkLearningSummaryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsInformationProtectionNetworkLearningSummaryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsInformationProtectionNetworkLearningSummaryCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionNetworkLearningSummaryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
