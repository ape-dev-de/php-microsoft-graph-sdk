<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftAuthenticatorAuthenticationMethodTarget
 */
class MicrosoftAuthenticatorAuthenticationMethodTarget
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Determines if the user is enforced to register the authentication method. */
    public ?bool $isRegistrationRequired = null;

    /**  */
    public ?AuthenticationMethodTargetType $targetType = null;

    /**  */
    public ?MicrosoftAuthenticatorAuthenticationMode $authenticationMode = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isRegistrationRequired'])) {
            $this->isRegistrationRequired = $data['isRegistrationRequired'];
        }
        if (isset($data['targetType'])) {
            $this->targetType = is_array($data['targetType']) ? new AuthenticationMethodTargetType($data['targetType']) : $data['targetType'];
        }
        if (isset($data['authenticationMode'])) {
            $this->authenticationMode = is_array($data['authenticationMode']) ? new MicrosoftAuthenticatorAuthenticationMode($data['authenticationMode']) : $data['authenticationMode'];
        }
    }
}
