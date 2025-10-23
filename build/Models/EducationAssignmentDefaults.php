<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentDefaults
 */
class EducationAssignmentDefaults
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Class-level default behavior for handling students who are added after the assignment is published. Possible values are: none, assignIfOpen.
     * @var EducationAddedStudentAction|\stdClass|null
     */
    public mixed $addedStudentAction = null;

    /** 
     * Optional field to control adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: studentsOnly. The default value is none.
     * @var EducationAddToCalendarOptions|\stdClass|null
     */
    public mixed $addToCalendarAction = null;

    /** Class-level default value for due time field. Default value is 23:59:00. */
    public ?string $dueTime = null;

    /** Default Teams channel to which notifications are sent. Default value is null. */
    public ?string $notificationChannelUrl = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['addedStudentAction'])) {
            $this->addedStudentAction = is_array($data['addedStudentAction']) ? new EducationAddedStudentAction($data['addedStudentAction']) : $data['addedStudentAction'];
        }
        if (isset($data['addToCalendarAction'])) {
            $this->addToCalendarAction = is_array($data['addToCalendarAction']) ? new EducationAddToCalendarOptions($data['addToCalendarAction']) : $data['addToCalendarAction'];
        }
        if (isset($data['dueTime'])) {
            $this->dueTime = $data['dueTime'];
        }
        if (isset($data['notificationChannelUrl'])) {
            $this->notificationChannelUrl = $data['notificationChannelUrl'];
        }
    }
}
