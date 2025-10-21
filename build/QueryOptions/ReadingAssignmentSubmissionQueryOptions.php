<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ReadingAssignmentSubmission resources
 *
 * Available select fields:
 * - accuracyScore
 * - action
 * - assignmentId
 * - challengingWords
 * - classId
 * - insertions
 * - mispronunciations
 * - missedExclamationMarks
 * - missedPeriods
 * - missedQuestionMarks
 * - missedShorts
 * - monotoneScore
 * - omissions
 * - repetitions
 * - selfCorrections
 * - studentId
 * - submissionDateTime
 * - submissionId
 * - unexpectedPauses
 * - wordCount
 * - wordsPerMinute
 */
class ReadingAssignmentSubmissionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ReadingAssignmentSubmission
     */
    public const FIELD_ACCURACY_SCORE = 'accuracyScore';
    public const FIELD_ACTION = 'action';
    public const FIELD_ASSIGNMENT_ID = 'assignmentId';
    public const FIELD_CHALLENGING_WORDS = 'challengingWords';
    public const FIELD_CLASS_ID = 'classId';
    public const FIELD_INSERTIONS = 'insertions';
    public const FIELD_MISPRONUNCIATIONS = 'mispronunciations';
    public const FIELD_MISSED_EXCLAMATION_MARKS = 'missedExclamationMarks';
    public const FIELD_MISSED_PERIODS = 'missedPeriods';
    public const FIELD_MISSED_QUESTION_MARKS = 'missedQuestionMarks';
    public const FIELD_MISSED_SHORTS = 'missedShorts';
    public const FIELD_MONOTONE_SCORE = 'monotoneScore';
    public const FIELD_OMISSIONS = 'omissions';
    public const FIELD_REPETITIONS = 'repetitions';
    public const FIELD_SELF_CORRECTIONS = 'selfCorrections';
    public const FIELD_STUDENT_ID = 'studentId';
    public const FIELD_SUBMISSION_DATE_TIME = 'submissionDateTime';
    public const FIELD_SUBMISSION_ID = 'submissionId';
    public const FIELD_UNEXPECTED_PAUSES = 'unexpectedPauses';
    public const FIELD_WORD_COUNT = 'wordCount';
    public const FIELD_WORDS_PER_MINUTE = 'wordsPerMinute';

    /**
     * Select specific ReadingAssignmentSubmission properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
