<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BaseEndUserNotification resources
 *
 * Available select fields:
 * - defaultLanguage
 * - endUserNotification
 */
class BaseEndUserNotificationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BaseEndUserNotification
     */
    public const FIELD_DEFAULT_LANGUAGE = 'defaultLanguage';
    public const FIELD_END_USER_NOTIFICATION = 'endUserNotification';

    /**
     * Select specific BaseEndUserNotification properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
