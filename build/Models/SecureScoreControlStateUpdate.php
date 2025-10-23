<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecureScoreControlStateUpdate
 */
class SecureScoreControlStateUpdate
{
    /** Assigns the control to the user who will take the action. */
    public ?string $assignedTo = null;

    /** Provides optional comment about the control. */
    public ?string $comment = null;

    /** State of the control, which can be modified via a PATCH command (for example, ignored, thirdParty). */
    public ?string $state = null;

    /** ID of the user who updated tenant state. */
    public ?string $updatedBy = null;

    /** Time at which the control state was updated. */
    public ?\DateTimeInterface $updatedDateTime = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['assignedTo'])) {
            $this->assignedTo = $data['assignedTo'];
        }
        if (isset($data['comment'])) {
            $this->comment = $data['comment'];
        }
        if (isset($data['state'])) {
            $this->state = $data['state'];
        }
        if (isset($data['updatedBy'])) {
            $this->updatedBy = $data['updatedBy'];
        }
        if (isset($data['updatedDateTime'])) {
            $this->updatedDateTime = $data['updatedDateTime'];
        }
    }
}
