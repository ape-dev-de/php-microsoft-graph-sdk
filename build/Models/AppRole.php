<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppRole
 */
class AppRole
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique role identifier inside the appRoles collection. When creating a new app role, a new GUID identifier must be provided. */
    public ?string $id = null;

    /** 
     * Specifies whether this app role can be assigned to users and groups (by setting to ['User']), to other application's (by setting to ['Application'], or both (by setting to ['User', 'Application']). App roles supporting assignment to other applications' service principals are also known as application permissions. The 'Application' value is only supported for app roles defined on application entities.
     * @var string[]
     */
    public array $allowedMemberTypes = [];

    /** The description for the app role. This is displayed when the app role is being assigned and, if the app role functions as an application permission, during  consent experiences. */
    public ?string $description = null;

    /** Display name for the permission that appears in the app role assignment and consent experiences. */
    public ?string $displayName = null;

    /** When creating or updating an app role, this must be set to true (which is the default). To delete a role, this must first be set to false.  At that point, in a subsequent call, this role may be removed. */
    public ?bool $isEnabled = null;

    /** Specifies if the app role is defined on the application object or on the servicePrincipal entity. Must not be included in any POST or PATCH requests. Read-only. */
    public ?string $origin = null;

    /** Specifies the value to include in the roles claim in ID tokens and access tokens authenticating an assigned user or service principal. Must not exceed 120 characters in length. Allowed characters are : ! # $ % & ' ( ) * + , - . / : ;  =  ? @ [ ] ^ + _  {  } ~, and characters in the ranges 0-9, A-Z and a-z. Any other character, including the space character, aren't allowed. May not begin with .. */
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
        if (isset($data['allowedMemberTypes'])) {
            $this->allowedMemberTypes = $data['allowedMemberTypes'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isEnabled'])) {
            $this->isEnabled = $data['isEnabled'];
        }
        if (isset($data['origin'])) {
            $this->origin = $data['origin'];
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
