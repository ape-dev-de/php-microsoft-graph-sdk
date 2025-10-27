<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ApprovalSettings
 */
class ApprovalSettings
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** One of SingleStage, Serial, Parallel, NoApproval (default). NoApproval is used when isApprovalRequired is false. */
    public ?string $approvalMode = null;

    /** 
     * If approval is required, the one or two elements of this collection define each of the stages of approval. An empty array if no approval is required.
     * @var UnifiedApprovalStage[]
     */
    public array $approvalStages = [];

    /** Indicates whether approval is required for requests in this policy. */
    public ?bool $isApprovalRequired = null;

    /** Indicates whether approval is required for a user to extend their assignment. */
    public ?bool $isApprovalRequiredForExtension = null;

    /** Indicates whether the requestor is required to supply a justification in their request. */
    public ?bool $isRequestorJustificationRequired = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['approvalMode'])) {
            $this->approvalMode = $data['approvalMode'];
        }
        if (isset($data['approvalStages'])) {
            $this->approvalStages = $data['approvalStages'];
        }
        if (isset($data['isApprovalRequired'])) {
            $this->isApprovalRequired = is_bool($data['isApprovalRequired']) ? $data['isApprovalRequired'] : (bool)$data['isApprovalRequired'];
        }
        if (isset($data['isApprovalRequiredForExtension'])) {
            $this->isApprovalRequiredForExtension = is_bool($data['isApprovalRequiredForExtension']) ? $data['isApprovalRequiredForExtension'] : (bool)$data['isApprovalRequiredForExtension'];
        }
        if (isset($data['isRequestorJustificationRequired'])) {
            $this->isRequestorJustificationRequired = is_bool($data['isRequestorJustificationRequired']) ? $data['isRequestorJustificationRequired'] : (bool)$data['isRequestorJustificationRequired'];
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
