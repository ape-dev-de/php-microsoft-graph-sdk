<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecuritySubmissionMailEvidence
 */
class SecuritySubmissionMailEvidence
{
    public function __construct(
        /**  */
        public ?string $networkMessageId = null,
        /**  */
        public ?string $recipient = null,
        /**  */
        public ?string $reportType = null,
        /**  */
        public ?string $sender = null,
        /**  */
        public ?string $senderIp = null,
        /**  */
        public ?string $subject = null,
        /**  */
        public ?\DateTimeInterface $submissionDateTime = null,
        /**  */
        public ?string $submissionId = null,
        /**  */
        public ?string $submitter = null
    ) {}
}
