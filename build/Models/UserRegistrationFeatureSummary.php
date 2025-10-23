<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationFeatureSummary
 */
class UserRegistrationFeatureSummary
{
    /** Total number of users accounts, excluding those that are blocked. */
    public ?float $totalUserCount = null;

    /** 
     * Number of users registered or capable for multi-factor authentication, self-service password reset, and passwordless authentication.
     * @var UserRegistrationFeatureCount[]
     */
    public array $userRegistrationFeatureCounts = [];

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
        if (isset($data['userRegistrationFeatureCounts'])) {
            $this->userRegistrationFeatureCounts = $data['userRegistrationFeatureCounts'];
        }
        if (isset($data['userRoles'])) {
            $this->userRoles = $data['userRoles'];
        }
        if (isset($data['userTypes'])) {
            $this->userTypes = $data['userTypes'];
        }
    }
}
