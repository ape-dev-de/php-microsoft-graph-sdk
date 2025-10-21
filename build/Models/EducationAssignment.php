<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EducationAssignment
 */
class EducationAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Optional field to control the assignment behavior for students who are added after the assignment is published. If not specified, defaults to none. Supported values are: none, assignIfOpen. For example, a teacher can use assignIfOpen to indicate that an assignment should be assigned to any new student who joins the class while the assignment is still open, and none to indicate that an assignment shouldn't be assigned to new students. */
        public ?string $addedStudentAction = null,
        /** Optional field to control the assignment behavior  for adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Use the Prefer: include-unknown-enum-members request header to get the following values in this evolvable enum: studentsOnly. The default value is none. */
        public ?string $addToCalendarAction = null,
        /** Identifies whether students can submit after the due date. If this property isn't specified during create, it defaults to true. */
        public ?bool $allowLateSubmissions = null,
        /** Identifies whether students can add their own resources to a submission or if they can only modify resources added by the teacher. */
        public ?bool $allowStudentsToAddResourcesToSubmission = null,
        /** The date when the assignment should become active. If in the future, the assignment isn't shown to the student until this date. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $assignDateTime = null,
        /** The moment that the assignment was published to students and the assignment shows up on the students timeline. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $assignedDateTime = null,
        /** Which users, or whole class should receive a submission object once the assignment is published. */
        public ?string $assignTo = null,
        /** Class to which this assignment belongs. */
        public ?string $classId = null,
        /** Date when the assignment is closed for submissions. This is an optional field that can be null if the assignment doesn't allowLateSubmissions or when the closeDateTime is the same as the dueDateTime. But if specified, then the closeDateTime must be greater than or equal to the dueDateTime. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $closeDateTime = null,
        /** Who created the assignment. */
        public ?string $createdBy = null,
        /** Moment when the assignment was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Name of the assignment. */
        public ?string $displayName = null,
        /** Date when the students assignment is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $dueDateTime = null,
        /** Folder URL where all the feedback file resources for this assignment are stored. */
        public ?string $feedbackResourcesFolderUrl = null,
        /** How the assignment will be graded. */
        public ?string $grading = null,
        /** Instructions for the assignment. The instructions and the display name tell the student what to do. */
        public ?string $instructions = null,
        /** Who last modified the assignment. */
        public ?string $lastModifiedBy = null,
        /** The date and time on which the assignment was modified. A student submission doesn't modify the assignment; only teachers can update assignments. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The URL of the module from which to access the assignment. */
        public ?string $moduleUrl = null,
        /** Optional field to specify the URL of the channel to post the assignment publish notification. If not specified or null, defaults to the General channel. This field only applies to assignments where the assignTo value is educationAssignmentClassRecipient. Updating the notificationChannelUrl isn't allowed after the assignment is published. */
        public ?string $notificationChannelUrl = null,
        /** Folder URL where all the file resources for this assignment are stored. */
        public ?string $resourcesFolderUrl = null,
        /** Status of the assignment.  You can't PATCH this value. Possible values are: draft, scheduled, published, assigned, unknownFutureValue, inactive. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: inactive. */
        public ?string $status = null,
        /** The deep link URL for the given assignment. */
        public ?string $webUrl = null,
        /** When set, enables users to easily find assignments of a given type. Read-only. Nullable. */
        public array $categories = [],
        /** When set, enables users to weight assignments differently when computing a class average grade. */
        public ?string $gradingCategory = null,
        /** Learning objects that are associated with this assignment. Only teachers can modify this list. Nullable. */
        public array $resources = [],
        /** When set, the grading rubric attached to this assignment. */
        public ?string $rubric = null,
        /** Once published, there's a submission object for each student representing their work and grade. Read-only. Nullable. */
        public array $submissions = []
    ) {}
}
