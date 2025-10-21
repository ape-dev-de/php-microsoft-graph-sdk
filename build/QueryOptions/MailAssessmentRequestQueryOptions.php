<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MailAssessmentRequest resources
 *
 * Available select fields:
 * - destinationRoutingReason
 * - messageUri
 * - recipientEmail
 */
class MailAssessmentRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MailAssessmentRequest
     */
    public const FIELD_DESTINATION_ROUTING_REASON = 'destinationRoutingReason';
    public const FIELD_MESSAGE_URI = 'messageUri';
    public const FIELD_RECIPIENT_EMAIL = 'recipientEmail';

    /**
     * Select specific MailAssessmentRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
