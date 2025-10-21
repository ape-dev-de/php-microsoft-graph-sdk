<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReadingAssignmentSubmission
 */
class ReadingAssignmentSubmission
{
    public function __construct(
        /** Accuracy score of the reading progress. */
        public ?string $accuracyScore = null,
        /** Indicates whether the submission is an attempt by the student or a miscue edit done by the educator. The possible values are Attempt and EditMiscue. */
        public ?string $action = null,
        /** ID of the assignment with which this submission is associated. */
        public ?string $assignmentId = null,
        /** List of words that the student found challenging during the reading session. */
        public array $challengingWords = [],
        /** ID of the class this reading progress is associated with. */
        public ?string $classId = null,
        /** Insertions of the reading progress. */
        public ?float $insertions = null,
        /** Mispronunciations of the reading progress. */
        public ?float $mispronunciations = null,
        /** Number of exclamation marks missed in the reading passage. */
        public ?float $missedExclamationMarks = null,
        /** Number of periods missed in the reading passage. */
        public ?float $missedPeriods = null,
        /** Number of question marks missed in the reading passage. */
        public ?float $missedQuestionMarks = null,
        /** Number of short words missed during the reading session. */
        public ?float $missedShorts = null,
        /** Score that reflects the student's use of intonation and expression. Lower scores indicate more monotone reading. */
        public ?string $monotoneScore = null,
        /** Omissions of the reading progress. */
        public ?float $omissions = null,
        /** Number of times the student repeated words or phrases during the reading session. */
        public ?float $repetitions = null,
        /** Number of times the student self-corrected their reading errors. */
        public ?float $selfCorrections = null,
        /** ID of the user this reading progress is associated with. */
        public ?string $studentId = null,
        /** Date and time of the submission this reading progress is associated with. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
        public ?\DateTimeInterface $submissionDateTime = null,
        /** ID of the submission this reading progress is associated with. */
        public ?string $submissionId = null,
        /** Number of unexpected pauses made during the reading session. */
        public ?float $unexpectedPauses = null,
        /** Words count of the reading progress. */
        public ?float $wordCount = null,
        /** Words per minute of the reading progress. */
        public ?string $wordsPerMinute = null
    ) {}
}
