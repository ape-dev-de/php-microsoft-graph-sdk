<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OnUserCreateStartExternalUsersSelfServiceSignUp
 */
class OnUserCreateStartExternalUsersSelfServiceSignUp
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The type of user to create. Maps to userType property of user object. The possible values are: member, guest, unknownFutureValue.
     * @var UserType|\stdClass|null
     */
    public mixed $userTypeToCreate = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['userTypeToCreate'])) {
            $this->userTypeToCreate = is_array($data['userTypeToCreate']) ? new UserType($data['userTypeToCreate']) : $data['userTypeToCreate'];
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
