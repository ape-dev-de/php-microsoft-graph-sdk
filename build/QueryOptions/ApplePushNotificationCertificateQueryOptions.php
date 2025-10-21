<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ApplePushNotificationCertificate resources
 *
 * Available select fields:
 */
class ApplePushNotificationCertificateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ApplePushNotificationCertificate
     */

    /**
     * Select specific ApplePushNotificationCertificate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
