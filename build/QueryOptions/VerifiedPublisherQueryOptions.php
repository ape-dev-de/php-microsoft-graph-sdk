<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for VerifiedPublisher resources
 *
 * Available select fields:
 * - addedDateTime
 * - displayName
 * - verifiedPublisherId
 */
class VerifiedPublisherQueryOptions extends QueryOptions
{
    public const FIELD_ADDED_DATE_TIME = 'addedDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_VERIFIED_PUBLISHER_ID = 'verifiedPublisherId';

    /**
     * Select specific VerifiedPublisher properties
     * 
     * @param array<string> $select Use VerifiedPublisherQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
