<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PasswordResetResponse
 */
class PasswordResetResponse
{
    /**
     * The Microsoft Entra ID-generated password.
     */
    private ?string $newPassword;


    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }

    public function setNewPassword(?string $newPassword): self
    {
        $this->newPassword = $newPassword;
        return $this;
    }

}
