<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServiceAnnouncementAttachmentCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ServiceAnnouncementAttachmentCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ServiceAnnouncementAttachmentCollectionResponse properties
     * 
     * @param array<string> $select Use ServiceAnnouncementAttachmentCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
