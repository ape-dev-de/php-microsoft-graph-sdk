<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BuiltInIdentityProvider
 */
class BuiltInIdentityProvider
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the identity provider. */
    public ?string $displayName = null;

    /** The identity provider type. For a B2B scenario, possible values: AADSignup, MicrosoftAccount, EmailOTP. Required. */
    public ?string $identityProviderType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['identityProviderType'])) {
            $this->identityProviderType = $data['identityProviderType'];
        }
    }
}
