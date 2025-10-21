<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnOtpSendCustomExtension resources
 *
 * Available select fields:
 */
class OnOtpSendCustomExtensionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnOtpSendCustomExtension
     */

    /**
     * Select specific OnOtpSendCustomExtension properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
