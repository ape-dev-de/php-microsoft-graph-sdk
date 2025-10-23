<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernanceCustomTaskExtensionCalloutData
 */
class IdentityGovernanceCustomTaskExtensionCalloutData
{
    /** 
     * 
     * @var User|\stdClass|null
     */
    public mixed $subject = null;

    /** 
     * 
     * @var IdentityGovernanceTask|\stdClass|null
     */
    public mixed $task = null;

    /** 
     * 
     * @var IdentityGovernanceTaskProcessingResult|\stdClass|null
     */
    public mixed $taskProcessingresult = null;

    /** 
     * 
     * @var IdentityGovernanceWorkflow|\stdClass|null
     */
    public mixed $workflow = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['subject'])) {
            $this->subject = $data['subject'];
        }
        if (isset($data['task'])) {
            $this->task = $data['task'];
        }
        if (isset($data['taskProcessingresult'])) {
            $this->taskProcessingresult = $data['taskProcessingresult'];
        }
        if (isset($data['workflow'])) {
            $this->workflow = $data['workflow'];
        }
    }
}
