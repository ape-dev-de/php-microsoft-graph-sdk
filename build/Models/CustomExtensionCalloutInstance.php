<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomExtensionCalloutInstance
 */
class CustomExtensionCalloutInstance
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Unique identifier for the callout instance. Read-only. */
    public ?string $id = null;

    /** Identification of the custom extension that was triggered at this instance. */
    public ?string $customExtensionId = null;

    /** Details provided by the logic app during the callback of the request instance. */
    public ?string $detail = null;

    /** The unique run identifier for the logic app. */
    public ?string $externalCorrelationId = null;

    /** 
     * The status of the request to the custom extension. The possible values are: calloutSent, callbackReceived, calloutFailed, callbackTimedOut, waitingForCallback, unknownFutureValue.
     * @var CustomExtensionCalloutInstanceStatus|\stdClass|null
     */
    public CustomExtensionCalloutInstanceStatus|\stdClass|null $status = null;


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
        if (isset($data['customExtensionId'])) {
            $this->customExtensionId = $data['customExtensionId'];
        }
        if (isset($data['detail'])) {
            $this->detail = $data['detail'];
        }
        if (isset($data['externalCorrelationId'])) {
            $this->externalCorrelationId = $data['externalCorrelationId'];
        }
        if (isset($data['status'])) {
            $this->status = is_array($data['status']) ? new CustomExtensionCalloutInstanceStatus($data['status']) : $data['status'];
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
