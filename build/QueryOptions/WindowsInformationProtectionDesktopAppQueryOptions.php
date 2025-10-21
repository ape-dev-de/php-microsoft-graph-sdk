<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for WindowsInformationProtectionDesktopApp resources
 *
 * Available select fields:
 */
class WindowsInformationProtectionDesktopAppQueryOptions extends QueryOptions
{
    /**
     * Available select fields for WindowsInformationProtectionDesktopApp
     */

    /**
     * Select specific WindowsInformationProtectionDesktopApp properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
