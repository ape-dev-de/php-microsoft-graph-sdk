<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailFileAssessmentRequest resources
 *
 * Available select fields:
 * - contentData
 * - destinationRoutingReason
 * - recipientEmail
 */
class EmailFileAssessmentRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmailFileAssessmentRequest
     */
    public const FIELD_CONTENT_DATA = 'contentData';
    public const FIELD_DESTINATION_ROUTING_REASON = 'destinationRoutingReason';
    public const FIELD_RECIPIENT_EMAIL = 'recipientEmail';

    /**
     * Select specific EmailFileAssessmentRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
