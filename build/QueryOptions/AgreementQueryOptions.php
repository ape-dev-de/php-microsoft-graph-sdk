<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Agreement resources
 *
 * Available select fields:
 * - displayName
 * - isPerDeviceAcceptanceRequired
 * - isViewingBeforeAcceptanceRequired
 * - termsExpiration
 * - userReacceptRequiredFrequency
 * - acceptances
 * - file
 * - files
 */
class AgreementQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Agreement
     */
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_IS_PER_DEVICE_ACCEPTANCE_REQUIRED = 'isPerDeviceAcceptanceRequired';
    public const FIELD_IS_VIEWING_BEFORE_ACCEPTANCE_REQUIRED = 'isViewingBeforeAcceptanceRequired';
    public const FIELD_TERMS_EXPIRATION = 'termsExpiration';
    public const FIELD_USER_REACCEPT_REQUIRED_FREQUENCY = 'userReacceptRequiredFrequency';
    public const FIELD_ACCEPTANCES = 'acceptances';
    public const FIELD_FILE = 'file';
    public const FIELD_FILES = 'files';

    /**
     * Select specific Agreement properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
