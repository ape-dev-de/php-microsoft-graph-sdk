<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityBuiltInUserFlowAttribute
 */
class IdentityBuiltInUserFlowAttribute
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /**  */
    public ?IdentityUserFlowAttributeDataType $dataType = null;

    /** The description of the user flow attribute that's shown to the user at the time of sign up. */
    public ?string $description = null;

    /** The display name of the user flow attribute.  Supports $filter (eq, ne). */
    public ?string $displayName = null;

    /**  */
    public ?IdentityUserFlowAttributeType $userFlowAttributeType = null;


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
        if (isset($data['dataType'])) {
            $this->dataType = is_array($data['dataType']) ? new IdentityUserFlowAttributeDataType($data['dataType']) : $data['dataType'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['userFlowAttributeType'])) {
            $this->userFlowAttributeType = is_array($data['userFlowAttributeType']) ? new IdentityUserFlowAttributeType($data['userFlowAttributeType']) : $data['userFlowAttributeType'];
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
