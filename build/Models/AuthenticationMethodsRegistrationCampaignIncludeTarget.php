<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AuthenticationMethodsRegistrationCampaignIncludeTarget
 */
class AuthenticationMethodsRegistrationCampaignIncludeTarget
{
    /** The object identifier of a Microsoft Entra user or group. */
    public ?string $id = null;

    /** The authentication method that the user is prompted to register. The value must be microsoftAuthenticator. */
    public ?string $targetedAuthenticationMethod = null;

    /**  */
    public ?AuthenticationMethodTargetType $targetType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['targetedAuthenticationMethod'])) {
            $this->targetedAuthenticationMethod = $data['targetedAuthenticationMethod'];
        }
        if (isset($data['targetType'])) {
            $this->targetType = is_array($data['targetType']) ? new AuthenticationMethodTargetType($data['targetType']) : $data['targetType'];
        }
    }
}
