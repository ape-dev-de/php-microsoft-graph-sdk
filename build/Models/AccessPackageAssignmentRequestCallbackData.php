<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestCallbackData
 */
class AccessPackageAssignmentRequestCallbackData
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Details for the callback. */
    public ?string $customExtensionStageInstanceDetail = null;

    /** Unique identifier of the callout to the custom extension. */
    public ?string $customExtensionStageInstanceId = null;

    /** 
     * Indicates the stage at which the custom callout extension is executed. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
     * @var AccessPackageCustomExtensionStage|\stdClass|null
     */
    public AccessPackageCustomExtensionStage|\stdClass|null $stage = null;

    /** Allow the extension to be able to deny or cancel the request submitted by the requestor. The supported values are Denied and Canceled. This property can only be set for an assignmentRequestCreated stage. */
    public ?string $state = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['customExtensionStageInstanceDetail'])) {
            $this->customExtensionStageInstanceDetail = $data['customExtensionStageInstanceDetail'];
        }
        if (isset($data['customExtensionStageInstanceId'])) {
            $this->customExtensionStageInstanceId = $data['customExtensionStageInstanceId'];
        }
        if (isset($data['stage'])) {
            $this->stage = is_string($data['stage']) ? AccessPackageCustomExtensionStage::tryFrom($data['stage']) : $data['stage'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
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
