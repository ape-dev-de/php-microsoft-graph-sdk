<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EndUserNotificationDetail resources
 *
 * Available select fields:
 * - emailContent
 * - isDefaultLangauge
 * - language
 * - locale
 * - sentFrom
 * - subject
 */
class EndUserNotificationDetailQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EndUserNotificationDetail
     */
    public const FIELD_EMAIL_CONTENT = 'emailContent';
    public const FIELD_IS_DEFAULT_LANGAUGE = 'isDefaultLangauge';
    public const FIELD_LANGUAGE = 'language';
    public const FIELD_LOCALE = 'locale';
    public const FIELD_SENT_FROM = 'sentFrom';
    public const FIELD_SUBJECT = 'subject';

    /**
     * Select specific EndUserNotificationDetail properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
