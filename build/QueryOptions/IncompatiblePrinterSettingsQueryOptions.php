<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IncompatiblePrinterSettings resources
 *
 * Available select fields:
 */
class IncompatiblePrinterSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IncompatiblePrinterSettings
     */

    /**
     * Select specific IncompatiblePrinterSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
