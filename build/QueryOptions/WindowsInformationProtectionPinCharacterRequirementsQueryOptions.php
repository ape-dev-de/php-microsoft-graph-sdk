<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionPinCharacterRequirements resources
 *
 * Available select fields:
 */
class WindowsInformationProtectionPinCharacterRequirementsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionPinCharacterRequirements
     */

    /**
     * Select specific WindowsInformationProtectionPinCharacterRequirements properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
