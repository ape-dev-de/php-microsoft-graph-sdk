<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ImportedWindowsAutopilotDeviceIdentityUpload resources
 *
 * Available select fields:
 */
class ImportedWindowsAutopilotDeviceIdentityUploadQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ImportedWindowsAutopilotDeviceIdentityUpload
     */

    /**
     * Select specific ImportedWindowsAutopilotDeviceIdentityUpload properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
