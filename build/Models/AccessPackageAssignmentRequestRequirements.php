<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestRequirements
 */
class AccessPackageAssignmentRequestRequirements
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates whether the requestor is allowed to set a custom schedule. */
    public ?bool $allowCustomAssignmentSchedule = null;

    /** Indicates whether a request to add must be approved by an approver. */
    public ?bool $isApprovalRequiredForAdd = null;

    /** Indicates whether a request to update must be approved by an approver. */
    public ?bool $isApprovalRequiredForUpdate = null;

    /** Indicates whether requestors must justify requesting access to an access package. */
    public ?bool $isRequestorJustificationRequired = null;

    /** The description of the policy that the user is trying to request access using. */
    public ?string $policyDescription = null;

    /** The display name of the policy that the user is trying to request access using. */
    public ?string $policyDisplayName = null;

    /** The identifier of the policy that these requirements are associated with. This identifier can be used when creating a new assignment request. */
    public ?string $policyId = null;

    /** 
     * Schedule restrictions enforced, if any.
     * @var EntitlementManagementSchedule|\stdClass|null
     */
    public mixed $schedule = null;

    /** 
     * 
     * @var AccessPackageQuestion[]
     */
    public array $questions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['allowCustomAssignmentSchedule'])) {
            $this->allowCustomAssignmentSchedule = $data['allowCustomAssignmentSchedule'];
        }
        if (isset($data['isApprovalRequiredForAdd'])) {
            $this->isApprovalRequiredForAdd = $data['isApprovalRequiredForAdd'];
        }
        if (isset($data['isApprovalRequiredForUpdate'])) {
            $this->isApprovalRequiredForUpdate = $data['isApprovalRequiredForUpdate'];
        }
        if (isset($data['isRequestorJustificationRequired'])) {
            $this->isRequestorJustificationRequired = $data['isRequestorJustificationRequired'];
        }
        if (isset($data['policyDescription'])) {
            $this->policyDescription = $data['policyDescription'];
        }
        if (isset($data['policyDisplayName'])) {
            $this->policyDisplayName = $data['policyDisplayName'];
        }
        if (isset($data['policyId'])) {
            $this->policyId = $data['policyId'];
        }
        if (isset($data['schedule'])) {
            $this->schedule = is_array($data['schedule']) ? new EntitlementManagementSchedule($data['schedule']) : $data['schedule'];
        }
        if (isset($data['questions'])) {
            $this->questions = $data['questions'];
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
