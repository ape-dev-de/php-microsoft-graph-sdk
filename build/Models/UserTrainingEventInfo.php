<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserTrainingEventInfo
 */
class UserTrainingEventInfo
{
    /** Display name of the training. */
    public ?string $displayName = null;

    /** 
     * Latest status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     * @var TrainingStatus|\stdClass|null
     */
    public mixed $latestTrainingStatus = null;

    /** 
     * Event details of the training when it was assigned to the user.
     * @var UserTrainingContentEventInfo|\stdClass|null
     */
    public mixed $trainingAssignedProperties = null;

    /** 
     * Event details of the training when it was completed by the user.
     * @var UserTrainingContentEventInfo|\stdClass|null
     */
    public mixed $trainingCompletedProperties = null;

    /** 
     * Event details of the training when it was updated/in-progress by the user.
     * @var UserTrainingContentEventInfo|\stdClass|null
     */
    public mixed $trainingUpdatedProperties = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['latestTrainingStatus'])) {
            $this->latestTrainingStatus = $data['latestTrainingStatus'];
        }
        if (isset($data['trainingAssignedProperties'])) {
            $this->trainingAssignedProperties = $data['trainingAssignedProperties'];
        }
        if (isset($data['trainingCompletedProperties'])) {
            $this->trainingCompletedProperties = $data['trainingCompletedProperties'];
        }
        if (isset($data['trainingUpdatedProperties'])) {
            $this->trainingUpdatedProperties = $data['trainingUpdatedProperties'];
        }
    }
}
