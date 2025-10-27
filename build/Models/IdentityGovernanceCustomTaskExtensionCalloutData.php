<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCalloutData
 */
class IdentityGovernanceCustomTaskExtensionCalloutData
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * 
     * @var User|\stdClass|null
     */
    public User|\stdClass|null $subject = null;

    /** 
     * 
     * @var IdentityGovernanceTask|\stdClass|null
     */
    public IdentityGovernanceTask|\stdClass|null $task = null;

    /** 
     * 
     * @var IdentityGovernanceTaskProcessingResult|\stdClass|null
     */
    public IdentityGovernanceTaskProcessingResult|\stdClass|null $taskProcessingresult = null;

    /** 
     * 
     * @var IdentityGovernanceWorkflow|\stdClass|null
     */
    public IdentityGovernanceWorkflow|\stdClass|null $workflow = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['subject'])) {
            $this->subject = is_array($data['subject']) ? new User($data['subject']) : $data['subject'];
        }
        if (isset($data['task'])) {
            $this->task = is_array($data['task']) ? new IdentityGovernanceTask($data['task']) : $data['task'];
        }
        if (isset($data['taskProcessingresult'])) {
            $this->taskProcessingresult = is_array($data['taskProcessingresult']) ? new IdentityGovernanceTaskProcessingResult($data['taskProcessingresult']) : $data['taskProcessingresult'];
        }
        if (isset($data['workflow'])) {
            $this->workflow = is_array($data['workflow']) ? new IdentityGovernanceWorkflow($data['workflow']) : $data['workflow'];
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
