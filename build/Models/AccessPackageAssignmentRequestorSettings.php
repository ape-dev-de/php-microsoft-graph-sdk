<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestorSettings
 */
class AccessPackageAssignmentRequestorSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** False indicates that the requestor isn't permitted to include a schedule in their request. */
    public ?bool $allowCustomAssignmentSchedule = null;

    /** True allows on-behalf-of requestors to create a request to add access for another principal. */
    public ?bool $enableOnBehalfRequestorsToAddAccess = null;

    /** True allows on-behalf-of requestors to create a request to remove access for another principal. */
    public ?bool $enableOnBehalfRequestorsToRemoveAccess = null;

    /** True allows on-behalf-of requestors to create a request to update access for another principal. */
    public ?bool $enableOnBehalfRequestorsToUpdateAccess = null;

    /** True allows requestors to create a request to add access for themselves. */
    public ?bool $enableTargetsToSelfAddAccess = null;

    /** True allows requestors to create a request to remove their access. */
    public ?bool $enableTargetsToSelfRemoveAccess = null;

    /** True allows requestors to create a request to update their access. */
    public ?bool $enableTargetsToSelfUpdateAccess = null;

    /** 
     * The principals who can request on-behalf-of others.
     * @var SubjectSet[]
     */
    public array $onBehalfRequestors = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowCustomAssignmentSchedule'])) {
            $this->allowCustomAssignmentSchedule = is_bool($data['allowCustomAssignmentSchedule']) ? $data['allowCustomAssignmentSchedule'] : (bool)$data['allowCustomAssignmentSchedule'];
        }
        if (isset($data['enableOnBehalfRequestorsToAddAccess'])) {
            $this->enableOnBehalfRequestorsToAddAccess = is_bool($data['enableOnBehalfRequestorsToAddAccess']) ? $data['enableOnBehalfRequestorsToAddAccess'] : (bool)$data['enableOnBehalfRequestorsToAddAccess'];
        }
        if (isset($data['enableOnBehalfRequestorsToRemoveAccess'])) {
            $this->enableOnBehalfRequestorsToRemoveAccess = is_bool($data['enableOnBehalfRequestorsToRemoveAccess']) ? $data['enableOnBehalfRequestorsToRemoveAccess'] : (bool)$data['enableOnBehalfRequestorsToRemoveAccess'];
        }
        if (isset($data['enableOnBehalfRequestorsToUpdateAccess'])) {
            $this->enableOnBehalfRequestorsToUpdateAccess = is_bool($data['enableOnBehalfRequestorsToUpdateAccess']) ? $data['enableOnBehalfRequestorsToUpdateAccess'] : (bool)$data['enableOnBehalfRequestorsToUpdateAccess'];
        }
        if (isset($data['enableTargetsToSelfAddAccess'])) {
            $this->enableTargetsToSelfAddAccess = is_bool($data['enableTargetsToSelfAddAccess']) ? $data['enableTargetsToSelfAddAccess'] : (bool)$data['enableTargetsToSelfAddAccess'];
        }
        if (isset($data['enableTargetsToSelfRemoveAccess'])) {
            $this->enableTargetsToSelfRemoveAccess = is_bool($data['enableTargetsToSelfRemoveAccess']) ? $data['enableTargetsToSelfRemoveAccess'] : (bool)$data['enableTargetsToSelfRemoveAccess'];
        }
        if (isset($data['enableTargetsToSelfUpdateAccess'])) {
            $this->enableTargetsToSelfUpdateAccess = is_bool($data['enableTargetsToSelfUpdateAccess']) ? $data['enableTargetsToSelfUpdateAccess'] : (bool)$data['enableTargetsToSelfUpdateAccess'];
        }
        if (isset($data['onBehalfRequestors'])) {
            $this->onBehalfRequestors = $data['onBehalfRequestors'];
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
