<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationMethodSummary
 */
class UserRegistrationMethodSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Total number of users in the tenant. */
    public ?float $totalUserCount = null;

    /** 
     * Number of users registered for each authentication method.
     * @var UserRegistrationMethodCount[]
     */
    public array $userRegistrationMethodCounts = [];

    /** 
     * The role type of the user. Possible values are: all, privilegedAdmin, admin, user, unknownFutureValue.
     * @var IncludedUserRoles|\stdClass|null
     */
    public IncludedUserRoles|\stdClass|null $userRoles = null;

    /** 
     * User type. Possible values are: all, member, guest, unknownFutureValue.
     * @var IncludedUserTypes|\stdClass|null
     */
    public IncludedUserTypes|\stdClass|null $userTypes = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['totalUserCount'])) {
            $this->totalUserCount = $data['totalUserCount'];
        }
        if (isset($data['userRegistrationMethodCounts'])) {
            $this->userRegistrationMethodCounts = $data['userRegistrationMethodCounts'];
        }
        if (isset($data['userRoles'])) {
            $this->userRoles = is_array($data['userRoles']) ? new IncludedUserRoles($data['userRoles']) : $data['userRoles'];
        }
        if (isset($data['userTypes'])) {
            $this->userTypes = is_array($data['userTypes']) ? new IncludedUserTypes($data['userTypes']) : $data['userTypes'];
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
