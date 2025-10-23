<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationMethodSummary
 */
class UserRegistrationMethodSummary
{
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
    public mixed $userRoles = null;

    /** 
     * User type. Possible values are: all, member, guest, unknownFutureValue.
     * @var IncludedUserTypes|\stdClass|null
     */
    public mixed $userTypes = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
}
