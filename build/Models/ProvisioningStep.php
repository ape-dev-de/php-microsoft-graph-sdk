<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningStep
 */
class ProvisioningStep
{
    /** Summary of what occurred during the step. */
    public ?string $description = null;

    /** 
     * Details of what occurred during the step.
     * @var DetailsInfo|\stdClass|null
     */
    public mixed $details = null;

    /** Name of the step. */
    public ?string $name = null;

    /** 
     * Type of step. Possible values are: import, scoping, matching, processing, referenceResolution, export, unknownFutureValue.
     * @var ProvisioningStepType|\stdClass|null
     */
    public mixed $provisioningStepType = null;

    /** 
     * Status of the step. Possible values are: success, warning,  failure, skipped, unknownFutureValue.
     * @var ProvisioningResult|\stdClass|null
     */
    public mixed $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['details'])) {
            $this->details = is_array($data['details']) ? new DetailsInfo($data['details']) : $data['details'];
        }
        if (isset($data['name'])) {
            $this->name = $data['name'];
        }
        if (isset($data['provisioningStepType'])) {
            $this->provisioningStepType = is_array($data['provisioningStepType']) ? new ProvisioningStepType($data['provisioningStepType']) : $data['provisioningStepType'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new ProvisioningResult($data['status']) : $data['status'];
        }
    }
}
