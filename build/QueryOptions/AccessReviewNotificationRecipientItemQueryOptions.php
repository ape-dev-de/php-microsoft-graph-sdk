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
    public const FIELD_NOTIFICATION_RECIPIENT_SCOPE = 'notificationRecipientScope';
    public const FIELD_NOTIFICATION_TEMPLATE_TYPE = 'notificationTemplateType';

    /**
     * Select specific AccessReviewNotificationRecipientItem properties
     * 
     * @param array<string> $select Use AccessReviewNotificationRecipientItemQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
