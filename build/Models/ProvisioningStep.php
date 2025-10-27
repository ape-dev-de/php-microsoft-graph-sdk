<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningStep
 */
class ProvisioningStep
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Summary of what occurred during the step. */
    public ?string $description = null;

    /** 
     * Details of what occurred during the step.
     * @var DetailsInfo|\stdClass|null
     */
    public DetailsInfo|\stdClass|null $details = null;

    /** Name of the step. */
    public ?string $name = null;

    /** 
     * Type of step. Possible values are: import, scoping, matching, processing, referenceResolution, export, unknownFutureValue.
     * @var ProvisioningStepType|\stdClass|null
     */
    public ProvisioningStepType|\stdClass|null $provisioningStepType = null;

    /** 
     * Status of the step. Possible values are: success, warning,  failure, skipped, unknownFutureValue.
     * @var ProvisioningResult|\stdClass|null
     */
    public ProvisioningResult|\stdClass|null $status = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
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
            $this->provisioningStepType = is_string($data['provisioningStepType']) ? ProvisioningStepType::tryFrom($data['provisioningStepType']) : $data['provisioningStepType'];
        }
        if (isset($data['status'])) {
            $this->status = is_string($data['status']) ? ProvisioningResult::tryFrom($data['status']) : $data['status'];
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
