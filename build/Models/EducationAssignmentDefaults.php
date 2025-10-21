<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignmentDefaults
 */
class EducationAssignmentDefaults
{
    /**
     * Class-level default behavior for handling students who are added after the assignment is published. Possible values are: none, assignIfOpen.
     */
    private ?string $addedStudentAction;

    /**
     * Optional field to control adding assignments to students'' and teachers'' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Use the Prefer: include-unknown-enum-members request header to get the following value in this evolvable enum: studentsOnly. The default value is none.
     */
    private ?string $addToCalendarAction;

    /**
     * Class-level default value for due time field. Default value is 23:59:00.
     */
    private ?string $dueTime;

    /**
     * Default Teams channel to which notifications are sent. Default value is null.
     */
    private ?string $notificationChannelUrl;


    public function getAddedStudentAction(): ?string
    {
        return $this->addedStudentAction;
    }

    public function setAddedStudentAction(?string $addedStudentAction): self
    {
        $this->addedStudentAction = $addedStudentAction;
        return $this;
    }

    public function getAddToCalendarAction(): ?string
    {
        return $this->addToCalendarAction;
    }

    public function setAddToCalendarAction(?string $addToCalendarAction): self
    {
        $this->addToCalendarAction = $addToCalendarAction;
        return $this;
    }

    public function getDueTime(): ?string
    {
        return $this->dueTime;
    }

    public function setDueTime(?string $dueTime): self
    {
        $this->dueTime = $dueTime;
        return $this;
    }

    public function getNotificationChannelUrl(): ?string
    {
        return $this->notificationChannelUrl;
    }

    public function setNotificationChannelUrl(?string $notificationChannelUrl): self
    {
        $this->notificationChannelUrl = $notificationChannelUrl;
        return $this;
    }

}
