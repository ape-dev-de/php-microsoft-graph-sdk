<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnOtpSendCustomExtensionHandler resources
 *
 * Available select fields:
 * - configuration
 * - customExtension
 */
class OnOtpSendCustomExtensionHandlerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnOtpSendCustomExtensionHandler
     */
    public const FIELD_CONFIGURATION = 'configuration';
    public const FIELD_CUSTOM_EXTENSION = 'customExtension';

    /**
     * Select specific OnOtpSendCustomExtensionHandler properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
