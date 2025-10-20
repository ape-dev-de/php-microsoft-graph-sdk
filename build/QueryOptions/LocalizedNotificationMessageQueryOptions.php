<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LocalizedNotificationMessage resources
 *
 * Available select fields:
 * - isDefault
 * - lastModifiedDateTime
 * - locale
 * - messageTemplate
 * - subject
 */
class LocalizedNotificationMessageQueryOptions extends QueryOptions
{
    public const FIELD_IS_DEFAULT = 'isDefault';
    public const FIELD_LAST_MODIFIED_DATE_TIME = 'lastModifiedDateTime';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_MESSAGE_TEMPLATE = 'messageTemplate';
    public const FIELD_SUBJECT = 'subject';

    /**
     * Select specific LocalizedNotificationMessage properties
     * 
     * @param array<string> $select Use LocalizedNotificationMessageQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
