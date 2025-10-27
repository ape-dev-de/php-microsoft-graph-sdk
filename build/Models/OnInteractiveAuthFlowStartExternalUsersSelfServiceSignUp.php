<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp
 */
class OnInteractiveAuthFlowStartExternalUsersSelfServiceSignUp
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Optional. Specifies whether the authentication flow includes an option to sign up (create account) and sign in. Default value is false meaning only sign in is enabled. */
    public ?bool $isSignUpAllowed = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isSignUpAllowed'])) {
            $this->isSignUpAllowed = $data['isSignUpAllowed'];
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
