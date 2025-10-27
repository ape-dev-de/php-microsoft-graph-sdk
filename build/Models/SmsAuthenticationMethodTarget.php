<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SmsAuthenticationMethodTarget
 */
class SmsAuthenticationMethodTarget
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Determines if the user is enforced to register the authentication method. */
    public ?bool $isRegistrationRequired = null;

    /**  */
    public ?AuthenticationMethodTargetType $targetType = null;

    /** Determines if users can use this authentication method to sign in to Microsoft Entra ID. true if users can use this method for primary authentication, otherwise false. */
    public ?bool $isUsableForSignIn = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['isRegistrationRequired'])) {
            $this->isRegistrationRequired = is_bool($data['isRegistrationRequired']) ? $data['isRegistrationRequired'] : (bool)$data['isRegistrationRequired'];
        }
        if (isset($data['targetType'])) {
            $this->targetType = is_array($data['targetType']) ? new AuthenticationMethodTargetType($data['targetType']) : $data['targetType'];
        }
        if (isset($data['isUsableForSignIn'])) {
            $this->isUsableForSignIn = is_bool($data['isUsableForSignIn']) ? $data['isUsableForSignIn'] : (bool)$data['isUsableForSignIn'];
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
