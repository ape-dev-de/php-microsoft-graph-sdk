<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeleteUserFromSharedAppleDeviceActionResult resources
 *
 * Available select fields:
 * - userPrincipalName
 */
class DeleteUserFromSharedAppleDeviceActionResultQueryOptions extends QueryOptions
{
    public const FIELD_USER_PRINCIPAL_NAME = 'userPrincipalName';

    /**
     * Select specific DeleteUserFromSharedAppleDeviceActionResult properties
     * 
     * @param array<string> $select Use DeleteUserFromSharedAppleDeviceActionResultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
