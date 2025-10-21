<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestCallbackData
 */
class AccessPackageAssignmentRequestCallbackData
{
    /**
     * Details for the callback.
     */
    private ?string $customExtensionStageInstanceDetail;

    /**
     * Unique identifier of the callout to the custom extension.
     */
    private ?string $customExtensionStageInstanceId;

    /**
     * Indicates the stage at which the custom callout extension is executed. The possible values are: assignmentRequestCreated, assignmentRequestApproved, assignmentRequestGranted, assignmentRequestRemoved, assignmentFourteenDaysBeforeExpiration, assignmentOneDayBeforeExpiration, unknownFutureValue.
     */
    private ?string $stage;

    /**
     * Allow the extension to be able to deny or cancel the request submitted by the requestor. The supported values are Denied and Canceled. This property can only be set for an assignmentRequestCreated stage.
     */
    private ?string $state;


    public function getCustomExtensionStageInstanceDetail(): ?string
    {
        return $this->customExtensionStageInstanceDetail;
    }

    public function setCustomExtensionStageInstanceDetail(?string $customExtensionStageInstanceDetail): self
    {
        $this->customExtensionStageInstanceDetail = $customExtensionStageInstanceDetail;
        return $this;
    }

    public function getCustomExtensionStageInstanceId(): ?string
    {
        return $this->customExtensionStageInstanceId;
    }

    public function setCustomExtensionStageInstanceId(?string $customExtensionStageInstanceId): self
    {
        $this->customExtensionStageInstanceId = $customExtensionStageInstanceId;
        return $this;
    }

    public function getStage(): ?string
    {
        return $this->stage;
    }

    public function setStage(?string $stage): self
    {
        $this->stage = $stage;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

}
