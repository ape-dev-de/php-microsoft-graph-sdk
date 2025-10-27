<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentApprovalSettings
 */
class AccessPackageAssignmentApprovalSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If false, then approval isn't required for new requests in this policy. */
    public ?bool $isApprovalRequiredForAdd = null;

    /** If false, then approval isn't required for updates to requests in this policy. */
    public ?bool $isApprovalRequiredForUpdate = null;

    /** If false, then requestor justification isn't required for updates to requests in this policy. */
    public ?bool $isRequestorJustificationRequired = null;

    /** 
     * If approval is required, the one, two or three elements of this collection define each of the stages of approval. An empty array is present if no approval is required.
     * @var AccessPackageApprovalStage[]
     */
    public array $stages = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['isApprovalRequiredForAdd'])) {
            $this->isApprovalRequiredForAdd = is_bool($data['isApprovalRequiredForAdd']) ? $data['isApprovalRequiredForAdd'] : (bool)$data['isApprovalRequiredForAdd'];
        }
        if (isset($data['isApprovalRequiredForUpdate'])) {
            $this->isApprovalRequiredForUpdate = is_bool($data['isApprovalRequiredForUpdate']) ? $data['isApprovalRequiredForUpdate'] : (bool)$data['isApprovalRequiredForUpdate'];
        }
        if (isset($data['isRequestorJustificationRequired'])) {
            $this->isRequestorJustificationRequired = is_bool($data['isRequestorJustificationRequired']) ? $data['isRequestorJustificationRequired'] : (bool)$data['isRequestorJustificationRequired'];
        }
        if (isset($data['stages'])) {
            $this->stages = $data['stages'];
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
