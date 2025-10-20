<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionAppLearningSummaryCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class WindowsInformationProtectionAppLearningSummaryCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific WindowsInformationProtectionAppLearningSummaryCollectionResponse properties
     * 
     * @param array<string> $select Use WindowsInformationProtectionAppLearningSummaryCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
