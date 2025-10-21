<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ReadingAssignmentSubmission
 */
class ReadingAssignmentSubmission
{
    /**
     * Accuracy score of the reading progress.
     */
    private ?string $accuracyScore;

    /**
     * Indicates whether the submission is an attempt by the student or a miscue edit done by the educator. The possible values are Attempt and EditMiscue.
     */
    private ?string $action;

    /**
     * ID of the assignment with which this submission is associated.
     */
    private ?string $assignmentId;

    /**
     * List of words that the student found challenging during the reading session.
     */
    private array $challengingWords = [];

    /**
     * ID of the class this reading progress is associated with.
     */
    private ?string $classId;

    /**
     * Insertions of the reading progress.
     */
    private ?float $insertions;

    /**
     * Mispronunciations of the reading progress.
     */
    private ?float $mispronunciations;

    /**
     * Number of exclamation marks missed in the reading passage.
     */
    private ?float $missedExclamationMarks;

    /**
     * Number of periods missed in the reading passage.
     */
    private ?float $missedPeriods;

    /**
     * Number of question marks missed in the reading passage.
     */
    private ?float $missedQuestionMarks;

    /**
     * Number of short words missed during the reading session.
     */
    private ?float $missedShorts;

    /**
     * Score that reflects the student's use of intonation and expression. Lower scores indicate more monotone reading.
     */
    private ?string $monotoneScore;

    /**
     * Omissions of the reading progress.
     */
    private ?float $omissions;

    /**
     * Number of times the student repeated words or phrases during the reading session.
     */
    private ?float $repetitions;

    /**
     * Number of times the student self-corrected their reading errors.
     */
    private ?float $selfCorrections;

    /**
     * ID of the user this reading progress is associated with.
     */
    private ?string $studentId;

    /**
     * Date and time of the submission this reading progress is associated with. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $submissionDateTime;

    /**
     * ID of the submission this reading progress is associated with.
     */
    private ?string $submissionId;

    /**
     * Number of unexpected pauses made during the reading session.
     */
    private ?float $unexpectedPauses;

    /**
     * Words count of the reading progress.
     */
    private ?float $wordCount;

    /**
     * Words per minute of the reading progress.
     */
    private ?string $wordsPerMinute;


    public function getAccuracyScore(): ?string
    {
        return $this->accuracyScore;
    }

    public function setAccuracyScore(?string $accuracyScore): self
    {
        $this->accuracyScore = $accuracyScore;
        return $this;
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setAction(?string $action): self
    {
        $this->action = $action;
        return $this;
    }

    public function getAssignmentId(): ?string
    {
        return $this->assignmentId;
    }

    public function setAssignmentId(?string $assignmentId): self
    {
        $this->assignmentId = $assignmentId;
        return $this;
    }

    public function getChallengingWords(): array
    {
        return $this->challengingWords;
    }

    public function setChallengingWords(array $challengingWords): self
    {
        $this->challengingWords = $challengingWords;
        return $this;
    }

    public function getClassId(): ?string
    {
        return $this->classId;
    }

    public function setClassId(?string $classId): self
    {
        $this->classId = $classId;
        return $this;
    }

    public function getInsertions(): ?float
    {
        return $this->insertions;
    }

    public function setInsertions(?float $insertions): self
    {
        $this->insertions = $insertions;
        return $this;
    }

    public function getMispronunciations(): ?float
    {
        return $this->mispronunciations;
    }

    public function setMispronunciations(?float $mispronunciations): self
    {
        $this->mispronunciations = $mispronunciations;
        return $this;
    }

    public function getMissedExclamationMarks(): ?float
    {
        return $this->missedExclamationMarks;
    }

    public function setMissedExclamationMarks(?float $missedExclamationMarks): self
    {
        $this->missedExclamationMarks = $missedExclamationMarks;
        return $this;
    }

    public function getMissedPeriods(): ?float
    {
        return $this->missedPeriods;
    }

    public function setMissedPeriods(?float $missedPeriods): self
    {
        $this->missedPeriods = $missedPeriods;
        return $this;
    }

    public function getMissedQuestionMarks(): ?float
    {
        return $this->missedQuestionMarks;
    }

    public function setMissedQuestionMarks(?float $missedQuestionMarks): self
    {
        $this->missedQuestionMarks = $missedQuestionMarks;
        return $this;
    }

    public function getMissedShorts(): ?float
    {
        return $this->missedShorts;
    }

    public function setMissedShorts(?float $missedShorts): self
    {
        $this->missedShorts = $missedShorts;
        return $this;
    }

    public function getMonotoneScore(): ?string
    {
        return $this->monotoneScore;
    }

    public function setMonotoneScore(?string $monotoneScore): self
    {
        $this->monotoneScore = $monotoneScore;
        return $this;
    }

    public function getOmissions(): ?float
    {
        return $this->omissions;
    }

    public function setOmissions(?float $omissions): self
    {
        $this->omissions = $omissions;
        return $this;
    }

    public function getRepetitions(): ?float
    {
        return $this->repetitions;
    }

    public function setRepetitions(?float $repetitions): self
    {
        $this->repetitions = $repetitions;
        return $this;
    }

    public function getSelfCorrections(): ?float
    {
        return $this->selfCorrections;
    }

    public function setSelfCorrections(?float $selfCorrections): self
    {
        $this->selfCorrections = $selfCorrections;
        return $this;
    }

    public function getStudentId(): ?string
    {
        return $this->studentId;
    }

    public function setStudentId(?string $studentId): self
    {
        $this->studentId = $studentId;
        return $this;
    }

    public function getSubmissionDateTime(): ?\DateTimeInterface
    {
        return $this->submissionDateTime;
    }

    public function setSubmissionDateTime(?\DateTimeInterface $submissionDateTime): self
    {
        $this->submissionDateTime = $submissionDateTime;
        return $this;
    }

    public function getSubmissionId(): ?string
    {
        return $this->submissionId;
    }

    public function setSubmissionId(?string $submissionId): self
    {
        $this->submissionId = $submissionId;
        return $this;
    }

    public function getUnexpectedPauses(): ?float
    {
        return $this->unexpectedPauses;
    }

    public function setUnexpectedPauses(?float $unexpectedPauses): self
    {
        $this->unexpectedPauses = $unexpectedPauses;
        return $this;
    }

    public function getWordCount(): ?float
    {
        return $this->wordCount;
    }

    public function setWordCount(?float $wordCount): self
    {
        $this->wordCount = $wordCount;
        return $this;
    }

    public function getWordsPerMinute(): ?string
    {
        return $this->wordsPerMinute;
    }

    public function setWordsPerMinute(?string $wordsPerMinute): self
    {
        $this->wordsPerMinute = $wordsPerMinute;
        return $this;
    }

}
