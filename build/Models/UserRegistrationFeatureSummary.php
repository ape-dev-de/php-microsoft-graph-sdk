<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserRegistrationFeatureSummary
 */
class UserRegistrationFeatureSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
            $this->totalUserCount = is_numeric($data['totalUserCount']) ? (float)$data['totalUserCount'] : $data['totalUserCount'];
        }
        if (isset($data['userRegistrationFeatureCounts'])) {
            $this->userRegistrationFeatureCounts = $data['userRegistrationFeatureCounts'];
        }
        if (isset($data['userRoles'])) {
            $this->userRoles = is_string($data['userRoles']) ? IncludedUserRoles::tryFrom($data['userRoles']) : $data['userRoles'];
        }
        if (isset($data['userTypes'])) {
            $this->userTypes = is_string($data['userTypes']) ? IncludedUserTypes::tryFrom($data['userTypes']) : $data['userTypes'];
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
