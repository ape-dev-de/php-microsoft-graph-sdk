<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySubmissionMailEvidence resources
 *
 * Available select fields:
 * - networkMessageId
 * - recipient
 * - reportType
 * - sender
 * - senderIp
 * - subject
 * - submissionDateTime
 * - submissionId
 * - submitter
 */
class SecuritySubmissionMailEvidenceQueryOptions extends QueryOptions
{
    public const FIELD_NETWORK_MESSAGE_ID = 'networkMessageId';
    public const FIELD_RECIPIENT = 'recipient';
    public const FIELD_REPORT_TYPE = 'reportType';
    public const FIELD_SENDER = 'sender';
    public const FIELD_SENDER_IP = 'senderIp';
    public const FIELD_SUBJECT = 'subject';
    public const FIELD_SUBMISSION_DATE_TIME = 'submissionDateTime';
    public const FIELD_SUBMISSION_ID = 'submissionId';
    public const FIELD_SUBMITTER = 'submitter';

    /**
     * Select specific SecuritySubmissionMailEvidence properties
     * 
     * @param array<string> $select Use SecuritySubmissionMailEvidenceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
