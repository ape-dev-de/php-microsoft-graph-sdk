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
    /**
     * Available select fields for VerifiedPublisher
     */
    public const FIELD_ADDED_DATE_TIME = 'addedDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_VERIFIED_PUBLISHER_ID = 'verifiedPublisherId';

    /**
     * Select specific VerifiedPublisher properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
