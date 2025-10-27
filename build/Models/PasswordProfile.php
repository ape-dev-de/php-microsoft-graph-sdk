<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PasswordProfile
 */
class PasswordProfile
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** true if the user must change their password on the next sign-in; otherwise false. */
    public ?bool $forceChangePasswordNextSignIn = null;

    /** If true, at next sign-in, the user must perform a multifactor authentication (MFA) before being forced to change their password. The behavior is identical to forceChangePasswordNextSignIn except that the user is required to first perform a multifactor authentication before password change. After a password change, this property will be automatically reset to false. If not set, default is false. */
    public ?bool $forceChangePasswordNextSignInWithMfa = null;

    /** The password for the user. This property is required when a user is created. It can be updated, but the user will be required to change the password on the next sign-in. The password must satisfy minimum requirements as specified by the user's passwordPolicies property. By default, a strong password is required. */
    public ?string $password = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['forceChangePasswordNextSignIn'])) {
            $this->forceChangePasswordNextSignIn = $data['forceChangePasswordNextSignIn'];
        }
        if (isset($data['forceChangePasswordNextSignInWithMfa'])) {
            $this->forceChangePasswordNextSignInWithMfa = $data['forceChangePasswordNextSignInWithMfa'];
        }
        if (isset($data['password'])) {
            $this->password = $data['password'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
