<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeleteUserFromSharedAppleDeviceActionResult resources
 *
 * Available select fields:
 */
class DeleteUserFromSharedAppleDeviceActionResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeleteUserFromSharedAppleDeviceActionResult
     */

    /**
     * Select specific DeleteUserFromSharedAppleDeviceActionResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
