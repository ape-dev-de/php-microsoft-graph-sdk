<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PermissionScope
 */
class PermissionScope
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique delegated permission identifier inside the collection of delegated permissions defined for a resource application. */
    public ?string $id = null;

    /** A description of the delegated permissions, intended to be read by an administrator granting the permission on behalf of all users. This text appears in tenant-wide admin consent experiences. */
    public ?string $adminConsentDescription = null;

    /** The permission's title, intended to be read by an administrator granting the permission on behalf of all users. */
    public ?string $adminConsentDisplayName = null;

    /** When you create or update a permission, this property must be set to true (which is the default). To delete a permission, this property must first be set to false.  At that point, in a subsequent call, the permission may be removed. */
    public ?bool $isEnabled = null;

    /**  */
    public ?string $origin = null;

    /** The possible values are: User and Admin. Specifies whether this delegated permission should be considered safe for non-admin users to consent to on behalf of themselves, or whether an administrator consent should always be required. While Microsoft Graph defines the default consent requirement for each permission, the tenant administrator may override the behavior in their organization (by allowing, restricting, or limiting user consent to this delegated permission). For more information, see Configure how users consent to applications. */
    public ?string $type = null;

    /** A description of the delegated permissions, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves. */
    public ?string $userConsentDescription = null;

    /** A title for the permission, intended to be read by a user granting the permission on their own behalf. This text appears in consent experiences where the user is consenting only on behalf of themselves. */
    public ?string $userConsentDisplayName = null;

    /** Specifies the value to include in the scp (scope) claim in access tokens. Must not exceed 120 characters in length. Allowed characters are : ! # $ % & ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, and characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, aren't allowed. May not begin with .. */
    public ?string $value = null;


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
        if (isset($data['adminConsentDescription'])) {
            $this->adminConsentDescription = $data['adminConsentDescription'];
        }
        if (isset($data['adminConsentDisplayName'])) {
            $this->adminConsentDisplayName = $data['adminConsentDisplayName'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['origin'])) {
            $this->origin = $data['origin'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['userConsentDescription'])) {
            $this->userConsentDescription = $data['userConsentDescription'];
        }
        if (isset($data['userConsentDisplayName'])) {
            $this->userConsentDisplayName = $data['userConsentDisplayName'];
        }
        if (isset($data['value'])) {
            $this->value = $data['value'];
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
