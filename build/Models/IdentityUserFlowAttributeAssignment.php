<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityUserFlowAttributeAssignment
 */
class IdentityUserFlowAttributeAssignment
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The display name of the identityUserFlowAttribute within a user flow. */
    public ?string $displayName = null;

    /** Determines whether the identityUserFlowAttribute is optional. true means the user doesn't have to provide a value. false means the user can't complete sign-up without providing a value. */
    public ?bool $isOptional = null;

    /** Determines whether the identityUserFlowAttribute requires verification, and is only used for verifying the user's phone number or email address. */
    public ?bool $requiresVerification = null;

    /** 
     * The input options for the user flow attribute. Only applicable when the userInputType is radioSingleSelect, dropdownSingleSelect, or checkboxMultiSelect.
     * @var UserAttributeValuesItem[]
     */
    public array $userAttributeValues = [];

    /**  */
    public ?IdentityUserFlowAttributeInputType $userInputType = null;

    /** 
     * The user attribute that you want to add to your user flow.
     * @var IdentityUserFlowAttribute|\stdClass|null
     */
    public mixed $userAttribute = null;


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
        if (isset($data['isOptional'])) {
            $this->isOptional = $data['isOptional'];
        }
        if (isset($data['requiresVerification'])) {
            $this->requiresVerification = $data['requiresVerification'];
        }
        if (isset($data['userAttributeValues'])) {
            $this->userAttributeValues = $data['userAttributeValues'];
        }
        if (isset($data['userInputType'])) {
            $this->userInputType = is_array($data['userInputType']) ? new IdentityUserFlowAttributeInputType($data['userInputType']) : $data['userInputType'];
        }
        if (isset($data['userAttribute'])) {
            $this->userAttribute = is_array($data['userAttribute']) ? new IdentityUserFlowAttribute($data['userAttribute']) : $data['userAttribute'];
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
