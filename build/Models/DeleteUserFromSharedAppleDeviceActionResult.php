<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeleteUserFromSharedAppleDeviceActionResult
 */
class DeleteUserFromSharedAppleDeviceActionResult
{
    /**
     * Delete user from shared apple device action result
     */
    private ?string $userPrincipalName;


    public function getUserPrincipalName(): ?string
    {
        return $this->userPrincipalName;
    }

    public function setUserPrincipalName(?string $userPrincipalName): self
    {
        $this->userPrincipalName = $userPrincipalName;
        return $this;
    }

}
