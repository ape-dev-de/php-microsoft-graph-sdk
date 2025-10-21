<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RemoteAssistancePartner resources
 *
 * Available select fields:
 * - displayName
 * - lastConnectionDateTime
 * - onboardingStatus
 * - onboardingUrl
 */
class RemoteAssistancePartnerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RemoteAssistancePartner
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_LAST_CONNECTION_DATE_TIME = 'lastConnectionDateTime';
    public const FIELD_ONBOARDING_STATUS = 'onboardingStatus';
    public const FIELD_ONBOARDING_URL = 'onboardingUrl';

    /**
     * Select specific RemoteAssistancePartner properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
