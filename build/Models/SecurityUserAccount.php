<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityUserAccount
 */
class SecurityUserAccount
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The displayed name of the user account. */
    public ?string $accountName = null;

    /** The unique user identifier assigned by the on-premises Active Directory. */
    public ?string $activeDirectoryObjectGuid = null;

    /** The user object identifier in Microsoft Entra ID. */
    public ?string $azureAdUserId = null;

    /** The user display name in Microsoft Entra ID. */
    public ?string $displayName = null;

    /** The name of the Active Directory domain of which the user is a member. */
    public ?string $domainName = null;

    /** 
     * Information on resource access attempts made by the user account.
     * @var SecurityResourceAccessEvent[]
     */
    public array $resourceAccessEvents = [];

    /** The user principal name of the account in Microsoft Entra ID. */
    public ?string $userPrincipalName = null;

    /** The local security identifier of the user account. */
    public ?string $userSid = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['accountName'])) {
            $this->accountName = $data['accountName'];
        }
        if (isset($data['activeDirectoryObjectGuid'])) {
            $this->activeDirectoryObjectGuid = $data['activeDirectoryObjectGuid'];
        }
        if (isset($data['azureAdUserId'])) {
            $this->azureAdUserId = $data['azureAdUserId'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['domainName'])) {
            $this->domainName = $data['domainName'];
        }
        if (isset($data['resourceAccessEvents'])) {
            $this->resourceAccessEvents = $data['resourceAccessEvents'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
        }
        if (isset($data['userSid'])) {
            $this->userSid = $data['userSid'];
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
