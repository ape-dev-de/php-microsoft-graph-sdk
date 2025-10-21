<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeleteUserFromSharedAppleDeviceActionResult
 */
class DeleteUserFromSharedAppleDeviceActionResult
{
    public function __construct(
        /** Action name */
        public ?string $actionName = null,
        /**  */
        public ?string $actionState = null,
        /** Time the action state was last updated */
        public ?\DateTimeInterface $lastUpdatedDateTime = null,
        /** Device action result */
        public ?\DateTimeInterface $startDateTime = null,
        /** Delete user from shared apple device action result */
        public ?string $userPrincipalName = null
    ) {}
}
