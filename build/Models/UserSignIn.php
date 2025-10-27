<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserSignIn
 */
class UserSignIn
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** TenantId of the guest user as applies to Microsoft Entra B2B scenarios. */
    public ?string $externalTenantId = null;

    /**  */
    public ?ConditionalAccessGuestOrExternalUserTypes $externalUserType = null;

    /** Object ID of the user. */
    public ?string $userId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['externalTenantId'])) {
            $this->externalTenantId = $data['externalTenantId'];
        }
        if (isset($data['externalUserType'])) {
            $this->externalUserType = is_array($data['externalUserType']) ? new ConditionalAccessGuestOrExternalUserTypes($data['externalUserType']) : $data['externalUserType'];
        }
        if (isset($data['userId'])) {
            $this->userId = $data['userId'];
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
