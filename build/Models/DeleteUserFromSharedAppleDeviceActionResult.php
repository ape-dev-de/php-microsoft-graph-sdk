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
        /** Time the action was initiated */
        public ?\DateTimeInterface $startDateTime = null,
        /** User principal name of the user to be deleted */
        public ?string $userPrincipalName = null
    ) {}
}
