<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ProvisioningErrorInfo
 */
class ProvisioningErrorInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Additional details if there's error. */
    public ?string $additionalDetails = null;

    /** 
     * Categorizes the error code. Possible values are failure, nonServiceFailure, success, unknownFutureValue
     * @var ProvisioningStatusErrorCategory|\stdClass|null
     */
    public mixed $errorCategory = null;

    /** Unique error code if any occurred. Learn more */
    public ?string $errorCode = null;

    /** Summarizes the status and describes why the status happened. */
    public ?string $reason = null;

    /** Provides the resolution for the corresponding error. */
    public ?string $recommendedAction = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['additionalDetails'])) {
            $this->additionalDetails = $data['additionalDetails'];
        }
        if (isset($data['errorCategory'])) {
            $this->errorCategory = is_array($data['errorCategory']) ? new ProvisioningStatusErrorCategory($data['errorCategory']) : $data['errorCategory'];
        }
        if (isset($data['errorCode'])) {
            $this->errorCode = $data['errorCode'];
        }
        if (isset($data['reason'])) {
            $this->reason = $data['reason'];
        }
        if (isset($data['recommendedAction'])) {
            $this->recommendedAction = $data['recommendedAction'];
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
