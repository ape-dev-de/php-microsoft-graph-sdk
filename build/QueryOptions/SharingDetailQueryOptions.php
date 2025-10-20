<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SharingDetail resources
 *
 * Available select fields:
 * - sharedBy
 * - sharedDateTime
 * - sharingReference
 * - sharingSubject
 * - sharingType
 */
class SharingDetailQueryOptions extends QueryOptions
{
    public const FIELD_SHARED_BY = 'sharedBy';
    public const FIELD_SHARED_DATE_TIME = 'sharedDateTime';
    public const FIELD_SHARING_REFERENCE = 'sharingReference';
    public const FIELD_SHARING_SUBJECT = 'sharingSubject';
    public const FIELD_SHARING_TYPE = 'sharingType';

    /**
     * Select specific SharingDetail properties
     * 
     * @param array<string> $select Use SharingDetailQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
