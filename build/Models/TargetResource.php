<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TargetResource
 */
class TargetResource
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates the unique ID of the resource. */
    public ?string $id = null;

    /** Indicates the visible name defined for the resource. Typically specified when the resource is created. */
    public ?string $displayName = null;

    /** 
     * When type is set to Group, this indicates the group type. Possible values are: unifiedGroups, azureAD, and unknownFutureValue
     * @var GroupType|\stdClass|null
     */
    public GroupType|\stdClass|null $groupType = null;

    /** 
     * Indicates name, old value and new value of each attribute that changed. Property values depend on the operation type.
     * @var ModifiedProperty[]
     */
    public array $modifiedProperties = [];

    /** Describes the resource type.  Example values include Application, Group, ServicePrincipal, and User. */
    public ?string $type = null;

    /** When type is set to User, this includes the user name that initiated the action; null for other types. */
    public ?string $userPrincipalName = null;


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
        if (isset($data['groupType'])) {
            $this->groupType = is_string($data['groupType']) ? GroupType::tryFrom($data['groupType']) : $data['groupType'];
        }
        if (isset($data['modifiedProperties'])) {
            $this->modifiedProperties = $data['modifiedProperties'];
        }
        if (isset($data['type'])) {
            $this->type = $data['type'];
        }
        if (isset($data['userPrincipalName'])) {
            $this->userPrincipalName = $data['userPrincipalName'];
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
