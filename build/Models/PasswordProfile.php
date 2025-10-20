<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PasswordProfile
 */
class PasswordProfile
{
    /**
     * true if the user must change their password on the next sign-in; otherwise false.
     */
    private ?bool $forceChangePasswordNextSignIn;

    /**
     * If true, at next sign-in, the user must perform a multifactor authentication (MFA) before being forced to change their password. The behavior is identical to forceChangePasswordNextSignIn except that the user is required to first perform a multifactor authentication before password change. After a password change, this property will be automatically reset to false. If not set, default is false.
     */
    private ?bool $forceChangePasswordNextSignInWithMfa;

    /**
     * The password for the user. This property is required when a user is created. It can be updated, but the user will be required to change the password on the next sign-in. The password must satisfy minimum requirements as specified by the user''s passwordPolicies property. By default, a strong password is required.
     */
    private ?string $password;

    public function getForceChangePasswordNextSignIn(): ?bool
    {
        return $this->forceChangePasswordNextSignIn;
    }

    public function setForceChangePasswordNextSignIn(?bool $forceChangePasswordNextSignIn): self
    {
        $this->forceChangePasswordNextSignIn = $forceChangePasswordNextSignIn;
        return $this;
    }

    public function getForceChangePasswordNextSignInWithMfa(): ?bool
    {
        return $this->forceChangePasswordNextSignInWithMfa;
    }

    public function setForceChangePasswordNextSignInWithMfa(?bool $forceChangePasswordNextSignInWithMfa): self
    {
        $this->forceChangePasswordNextSignInWithMfa = $forceChangePasswordNextSignInWithMfa;
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;
        return $this;
    }

}
