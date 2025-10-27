<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReadingAssignmentSubmission
 */
class ReadingAssignmentSubmission
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Accuracy score of the reading progress.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $accuracyScore = null;

    /** Indicates whether the submission is an attempt by the student or a miscue edit done by the educator. The possible values are Attempt and EditMiscue. */
    public ?string $action = null;

    /** ID of the assignment with which this submission is associated. */
    public ?string $assignmentId = null;

    /** 
     * List of words that the student found challenging during the reading session.
     * @var ChallengingWord[]
     */
    public array $challengingWords = [];

    /** ID of the class this reading progress is associated with. */
    public ?string $classId = null;

    /** Insertions of the reading progress. */
    public ?float $insertions = null;

    /** Mispronunciations of the reading progress. */
    public ?float $mispronunciations = null;

    /** Number of exclamation marks missed in the reading passage. */
    public ?float $missedExclamationMarks = null;

    /** Number of periods missed in the reading passage. */
    public ?float $missedPeriods = null;

    /** Number of question marks missed in the reading passage. */
    public ?float $missedQuestionMarks = null;

    /** Number of short words missed during the reading session. */
    public ?float $missedShorts = null;

    /** 
     * Score that reflects the student's use of intonation and expression. Lower scores indicate more monotone reading.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $monotoneScore = null;

    /** Omissions of the reading progress. */
    public ?float $omissions = null;

    /** Number of times the student repeated words or phrases during the reading session. */
    public ?float $repetitions = null;

    /** Number of times the student self-corrected their reading errors. */
    public ?float $selfCorrections = null;

    /** ID of the user this reading progress is associated with. */
    public ?string $studentId = null;

    /** Date and time of the submission this reading progress is associated with. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $submissionDateTime = null;

    /** ID of the submission this reading progress is associated with. */
    public ?string $submissionId = null;

    /** Number of unexpected pauses made during the reading session. */
    public ?float $unexpectedPauses = null;

    /** Words count of the reading progress. */
    public ?float $wordCount = null;

    /** 
     * Words per minute of the reading progress.
     * @var float|string|ReferenceNumeric|null
     */
    public float|string|ReferenceNumeric|null $wordsPerMinute = null;


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
        if (isset($data['accuracyScore'])) {
            $this->accuracyScore = is_numeric($data['accuracyScore']) ? (float)$data['accuracyScore'] : $data['accuracyScore'];
        }
        if (isset($data['action'])) {
            $this->action = $data['action'];
        }
        if (isset($data['assignmentId'])) {
            $this->assignmentId = $data['assignmentId'];
        }
        if (isset($data['challengingWords'])) {
            $this->challengingWords = $data['challengingWords'];
        }
        if (isset($data['classId'])) {
            $this->classId = $data['classId'];
        }
        if (isset($data['insertions'])) {
            $this->insertions = is_numeric($data['insertions']) ? (float)$data['insertions'] : $data['insertions'];
        }
        if (isset($data['mispronunciations'])) {
            $this->mispronunciations = is_numeric($data['mispronunciations']) ? (float)$data['mispronunciations'] : $data['mispronunciations'];
        }
        if (isset($data['missedExclamationMarks'])) {
            $this->missedExclamationMarks = is_numeric($data['missedExclamationMarks']) ? (float)$data['missedExclamationMarks'] : $data['missedExclamationMarks'];
        }
        if (isset($data['missedPeriods'])) {
            $this->missedPeriods = is_numeric($data['missedPeriods']) ? (float)$data['missedPeriods'] : $data['missedPeriods'];
        }
        if (isset($data['missedQuestionMarks'])) {
            $this->missedQuestionMarks = is_numeric($data['missedQuestionMarks']) ? (float)$data['missedQuestionMarks'] : $data['missedQuestionMarks'];
        }
        if (isset($data['missedShorts'])) {
            $this->missedShorts = is_numeric($data['missedShorts']) ? (float)$data['missedShorts'] : $data['missedShorts'];
        }
        if (isset($data['monotoneScore'])) {
            $this->monotoneScore = is_numeric($data['monotoneScore']) ? (float)$data['monotoneScore'] : $data['monotoneScore'];
        }
        if (isset($data['omissions'])) {
            $this->omissions = is_numeric($data['omissions']) ? (float)$data['omissions'] : $data['omissions'];
        }
        if (isset($data['repetitions'])) {
            $this->repetitions = is_numeric($data['repetitions']) ? (float)$data['repetitions'] : $data['repetitions'];
        }
        if (isset($data['selfCorrections'])) {
            $this->selfCorrections = is_numeric($data['selfCorrections']) ? (float)$data['selfCorrections'] : $data['selfCorrections'];
        }
        if (isset($data['studentId'])) {
            $this->studentId = $data['studentId'];
        }
        if (isset($data['submissionDateTime'])) {
            $this->submissionDateTime = is_string($data['submissionDateTime']) ? new \DateTimeImmutable($data['submissionDateTime']) : $data['submissionDateTime'];
        }
        if (isset($data['submissionId'])) {
            $this->submissionId = $data['submissionId'];
        }
        if (isset($data['unexpectedPauses'])) {
            $this->unexpectedPauses = is_numeric($data['unexpectedPauses']) ? (float)$data['unexpectedPauses'] : $data['unexpectedPauses'];
        }
        if (isset($data['wordCount'])) {
            $this->wordCount = is_numeric($data['wordCount']) ? (float)$data['wordCount'] : $data['wordCount'];
        }
        if (isset($data['wordsPerMinute'])) {
            $this->wordsPerMinute = is_numeric($data['wordsPerMinute']) ? (float)$data['wordsPerMinute'] : $data['wordsPerMinute'];
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
