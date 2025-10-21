<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailPayloadDetail resources
 *
 * Available select fields:
 * - fromEmail
 * - fromName
 * - isExternalSender
 * - subject
 */
class EmailPayloadDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmailPayloadDetail
     */
    public const FIELD_FROM_EMAIL = 'fromEmail';
    public const FIELD_FROM_NAME = 'fromName';
    public const FIELD_IS_EXTERNAL_SENDER = 'isExternalSender';
    public const FIELD_SUBJECT = 'subject';

    /**
     * Select specific EmailPayloadDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
