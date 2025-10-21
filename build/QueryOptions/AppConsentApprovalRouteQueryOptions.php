<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AppConsentApprovalRoute resources
 *
 * Available select fields:
 * - appConsentRequests
 */
class AppConsentApprovalRouteQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AppConsentApprovalRoute
     */
    public const FIELD_APP_CONSENT_REQUESTS = 'appConsentRequests';

    /**
     * Select specific AppConsentApprovalRoute properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
