<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AccessReviewNotificationRecipientItem resources
 *
 * Available select fields:
 * - notificationRecipientScope
 * - notificationTemplateType
 */
class AccessReviewNotificationRecipientItemQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AccessReviewNotificationRecipientItem
     */
    public const FIELD_NOTIFICATION_RECIPIENT_SCOPE = 'notificationRecipientScope';
    public const FIELD_NOTIFICATION_TEMPLATE_TYPE = 'notificationTemplateType';

    /**
     * Select specific AccessReviewNotificationRecipientItem properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
