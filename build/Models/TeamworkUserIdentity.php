<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamworkUserIdentity
 */
class TeamworkUserIdentity
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique identifier for the identity or actor. For example, in the access reviews decisions API, this property might record the id of the principal, that is, the group, user, or application that's subject to review. */
    public ?string $id = null;

    /** The display name of the identity.For drive items, the display name might not always be available or up to date. For example, if a user changes their display name the API might show the new value in a future response, but the items associated with the user don't show up as changed when using delta. */
    public ?string $displayName = null;

    /** 
     * Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, unknownFutureValue and emailUser.
     * @var TeamworkUserIdentityType|\stdClass|null
     */
    public TeamworkUserIdentityType|\stdClass|null $userIdentityType = null;


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
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['userIdentityType'])) {
            $this->userIdentityType = is_array($data['userIdentityType']) ? new TeamworkUserIdentityType($data['userIdentityType']) : $data['userIdentityType'];
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
