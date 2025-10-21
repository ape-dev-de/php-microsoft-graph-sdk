<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionAppLockerFile resources
 *
 * Available select fields:
 */
class WindowsInformationProtectionAppLockerFileQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionAppLockerFile
     */

    /**
     * Select specific WindowsInformationProtectionAppLockerFile properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
